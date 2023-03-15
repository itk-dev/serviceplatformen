<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500;

use ItkDev\Serviceplatformen\Service\SF1500\Model\Person;
use ItkDev\Serviceplatformen\SF1500\Person\ServiceType\Laes;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\LaesInputType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\LaesOutputType;
use ItkDev\Serviceplatformen\SF1500\Person\ClassMap;
use ItkDev\Serviceplatformen\SF1500\Person\ServiceType\_List;
use ItkDev\Serviceplatformen\SF1500\Person\ServiceType\Soeg;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\AttributListeType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\FiltreretOejebliksbilledeType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\ListInputType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\ListOutputType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\RelationListeType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\SoegInputType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\SoegOutputType;

class PersonService extends SF1500 implements ServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function soeg(array $query, array $fields = []): array
    {
        $data = $this->doSoeg($query);

        return null === $data->getIdListe()
            ? []
            : $this->list($data->getIdListe()->getUUIDIdentifikator(), $fields);
    }

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
    public function laes(string $id, array $fields = [])
    {
        $data = $this->doLaes($id);

        $oejebliksbillede = $data->getFiltreretOejebliksbillede();
        if (null === $oejebliksbillede) {
            return null;
        }

        return $this->buildModel($oejebliksbillede);
    }

    private function buildModel(FiltreretOejebliksbilledeType $oejebliksbillede): Person
    {
        $id = $oejebliksbillede->getObjektType()->getUUIDIdentifikator();
        $model = new Person(['id' => $id]);

        return $model;
    }

    protected function doSoeg(array $query): SoegOutputType
    {
        $attributListe = new AttributListeType();
        if (isset($query['navntekst'])) {
            $attributListe->addToEgenskab((new EgenskabType())
                ->setNavnTekst($query['navntekst']));
        }
        if (isset($query['CPR_NummerTekst'])) {
            $attributListe->addToEgenskab((new EgenskabType())
                ->setCPR_NummerTekst($query['CPR_NummerTekst']));
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
            ->_list_11((new ListInputType())
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
                    SoapClientBase::WSDL_URL => __DIR__ . '/../../../resources/sf1500/Tekniske specifikationer (v6.0 Services)/v6_0_0_0/wsdl/Person.wsdl',
                    SoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
                ] + $options))
                ->setSF1500($this);
        }

        return $this->clients[$className];
    }
}