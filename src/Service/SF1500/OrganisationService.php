<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500;

use ItkDev\Serviceplatformen\Service\SF1500\Model\Organisation;
use ItkDev\Serviceplatformen\SF1500\Organisation\ClassMap;
use ItkDev\Serviceplatformen\SF1500\Organisation\ServiceType\_List;
use ItkDev\Serviceplatformen\SF1500\Organisation\ServiceType\Laes;
use ItkDev\Serviceplatformen\SF1500\Organisation\ServiceType\Soeg;
use ItkDev\Serviceplatformen\SF1500\Organisation\StructType\AttributListeType;
use ItkDev\Serviceplatformen\SF1500\Organisation\StructType\EgenskabType;
use ItkDev\Serviceplatformen\SF1500\Organisation\StructType\FiltreretOejebliksbilledeType;
use ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LaesInputType;
use ItkDev\Serviceplatformen\SF1500\Organisation\StructType\LaesOutputType;
use ItkDev\Serviceplatformen\SF1500\Organisation\StructType\ListInputType;
use ItkDev\Serviceplatformen\SF1500\Organisation\StructType\ListOutputType;
use ItkDev\Serviceplatformen\SF1500\Organisation\StructType\RelationListeType;
use ItkDev\Serviceplatformen\SF1500\Organisation\StructType\SoegInputType;
use ItkDev\Serviceplatformen\SF1500\Organisation\StructType\SoegOutputType;

final class OrganisationService extends AbstractService
{
    /**
     * {@inheritdoc}
     */
    public function list(array $ids, array $fields = []): array
    {
        $list = $this->doList($ids);

        return array_map(
            fn ($oejebliksbillede) => $this->buildModel($oejebliksbillede),
            $list->getFiltreretOejebliksbillede()
        );
    }

    /**
     * {@inheritdoc}
     */
    public function laes(string $id, array $fields = []): ?Organisation
    {
        $data = $this->doLaes($id);

        $oejebliksbillede = $data->getFiltreretOejebliksbillede();
        if (null === $oejebliksbillede) {
            return null;
        }

        return $this->buildModel($oejebliksbillede);
    }

    private function buildModel(FiltreretOejebliksbilledeType $oejebliksbillede): Organisation
    {
        $id = $oejebliksbillede->getObjektType()->getUUIDIdentifikator();
        $model = new Organisation(['id' => $id]);
        foreach ($oejebliksbillede->getRegistrering() as $registrering) {
            foreach ($registrering->getAttributListe()->getEgenskab() as $egenskab) {
                $model->organisationnavn = $egenskab->getOrganisationNavn();
            }
            foreach ($registrering->getRelationListe()->getAdresser() as $adresse) {
                // TODO
                $model->setRelation(
                    'adresse',
                    $adresse->getRolle()->getLabel(),
                    $adresse->getReferenceID()->getUUIDIdentifikator()
                );
            }
        }

        return $model;
    }

    protected function doSoeg(array $query): SoegOutputType
    {
        $attributListe = new AttributListeType();
        if (isset($query['organisationnavn'])) {
            $attributListe->addToEgenskab((new EgenskabType())
                ->setOrganisationNavn($query['organisationnavn']));
        }

        $relationListe = new RelationListeType();

        $request = (new SoegInputType())
            ->setAttributListe($attributListe)
            ->setRelationListe($relationListe);

        return $this->clientSoeg()->soeg($request);
    }

    protected function doList(array $ids): ListOutputType
    {
        return $this->clientList()
            ->_list_8((new ListInputType())
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
}
