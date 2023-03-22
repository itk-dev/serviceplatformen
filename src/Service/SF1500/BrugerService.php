<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500;

use ItkDev\Serviceplatformen\Service\SF1500\Model\Adresse;
use ItkDev\Serviceplatformen\Service\SF1500\Model\Bruger;
use ItkDev\Serviceplatformen\SF1500\Bruger\ClassMap;
use ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType\_List;
use ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType\Laes;
use ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType\Soeg;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\AttributListeType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\EgenskabType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\FiltreretOejebliksbilledeType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LaesInputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LaesOutputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ListInputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ListOutputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\SoegInputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\SoegOutputType;

final class BrugerService extends AbstractService
{
    protected static $validFilters = ['brugernavn'];

    /**
     * {@inheritdoc}
     */
    public function list(array $ids, array $fields = []): array
    {
        $list = $this->doList($ids);

        $items = array_map(
            fn ($oejebliksbillede) => $this->buildModel($oejebliksbillede),
            $list->getFiltreretOejebliksbillede()
        );

        // Address type => Bruger field name
        $fieldMap = [
            'Email_bruger' => 'email',
            'Mobiltelefon_bruger' => 'mobiltelefon',
            'Lokation_bruger' => 'lokation',
        ];

        if (!empty($fields) && !empty($items)) {
            foreach ($fields as $field) {
                $adresseIds = array_values(array_filter(array_map(static fn(Bruger $bruger) => $bruger->getRelation('adresse', $field), $items)));

                $adresser = $this->getService(AdresseService::class)->list($adresseIds);
                // Index by id
                $adresser = array_combine(
                    array_map(static fn (Adresse $adresse) => $adresse->id, $adresser),
                    $adresser
                );

                if (isset($fieldMap[$field])) {
                    foreach ($items as $item) {
                        $adresseId = $item->getRelation('adresse', $field);
                        if (isset($adresser[$adresseId])) {
                            $item->{$fieldMap[$field]} = $adresser[$adresseId]->adressetekst;
                        }
                    }
                }
            }
        }

        return $items;
    }

    /**
     * {@inheritdoc}
     */
    public function laes(string $id, array $fields = []): ?Bruger
    {
        $data = $this->doLaes($id);

        $oejebliksbillede = $data->getFiltreretOejebliksbillede();
        if (null === $oejebliksbillede) {
            return null;
        }

        return $this->buildModel($oejebliksbillede);
    }

    private function buildModel(FiltreretOejebliksbilledeType $oejebliksbillede): Bruger
    {
        $id = $oejebliksbillede->getObjektType()->getUUIDIdentifikator();
        $model = new Bruger(['id' => $id]);
        foreach ($oejebliksbillede->getRegistrering() as $registrering) {
            foreach ($registrering->getAttributListe()->getEgenskab() as $egenskab) {
                $model->brugernavn = $egenskab->getBrugerNavn();
                $model->brugertype = $egenskab->getBrugerTypeTekst();
            }
            foreach ($registrering->getRelationListe()->getAdresser() as $adresse) {
                $model->setRelation(
                    'adresse',
                    $adresse->getRolle()->getLabel(),
                    $adresse->getReferenceID()->getUUIDIdentifikator()
                );
            }
        }

        return $model;
    }

    protected function doSoeg(array $query): ?SoegOutputType
    {
        $attributListe = new AttributListeType();
        if (isset($query['brugernavn'])) {
            $attributListe->addToEgenskab((new EgenskabType())
                ->setBrugerNavn($query['brugernavn']));
        }

        $relationListe = new RelationListeType();
        if (isset($query['email'])) {
            // TODO We cannot search by email yet
        }

        $request = (new SoegInputType())
            ->setAttributListe($attributListe)
            ->setRelationListe($relationListe);

        return $this->clientSoeg()->soeg($request) ?: null;
    }

    protected function doList(array $ids): ListOutputType
    {
        return $this->clientList()
            ->_list_1((new ListInputType())
                ->setUUIDIdentifikator($ids));
    }

    protected function doLaes(string $id): LaesOutputType
    {
        return $this->clientLaes()
            ->laes((new LaesInputType())
                ->setUUIDIdentifikator($id));
    }

    private function clientSoeg(array $options = []): Soeg
    {
        $client = $this->getClient(Soeg::class, $options);
        assert($client instanceof Soeg);

        return $client;
    }

    private function clientList(array $options = []): _List
    {
        $client = $this->getClient(_List::class, $options);
        assert($client instanceof _List);

        return $client;
    }

    private function clientLaes(array $options = []): Laes
    {
        $client = $this->getClient(Laes::class, $options);
        assert($client instanceof Laes);

        return $client;
    }

    /**
     * {@inheritdoc}
     */
    public function getClient(string $className, array $options = []): SoapClientBase
    {
        if (!isset($this->clients[$className])) {
            $this->clients[$className] = (new $className([
                    SoapClientBase::WSDL_URL => __DIR__ . '/../../../resources/sf1500/Tekniske specifikationer (v6.0 Services)/v6_0_0_0/wsdl/Bruger.wsdl',
                    SoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
                ] + $options))
                ->setSF1500($this);
        }

        return $this->clients[$className];
    }
}
