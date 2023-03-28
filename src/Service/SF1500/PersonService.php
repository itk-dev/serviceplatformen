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
use ItkDev\Serviceplatformen\SF1500\Person\ServiceType\_List;
use ItkDev\Serviceplatformen\SF1500\Person\ServiceType\Laes;
use ItkDev\Serviceplatformen\SF1500\Person\ServiceType\Soeg;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\AttributListeType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\EgenskabType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\FiltreretOejebliksbilledeType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\LaesInputType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\LaesOutputType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\ListInputType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\ListOutputType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\RelationListeType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\SoegInputType;
use ItkDev\Serviceplatformen\SF1500\Person\StructType\SoegOutputType;

class PersonService extends AbstractService
{
    public const FILTER_NAVNTEKST = 'navntekst';

    protected static $validFilters = [
        self::FILTER_NAVNTEKST,
    ];

    protected function buildModel($oejebliksbillede): Person
    {
        assert($oejebliksbillede instanceof FiltreretOejebliksbilledeType);
        $id = $oejebliksbillede->getObjektType()->getUUIDIdentifikator();
        $model = new Person(['id' => $id]);
        foreach ($oejebliksbillede->getRegistrering() as $registrering) {
            foreach ($registrering->getAttributListe()->getEgenskab() as $egenskab) {
                $model->navn = $egenskab->getNavnTekst();
            }
        }

        return $model;
    }

    protected function doSoeg(array $query): ?SoegOutputType
    {
        $attributListe = new AttributListeType();
        if (isset($query[self::FILTER_NAVNTEKST])) {
            $attributListe->addToEgenskab((new EgenskabType())
                ->setNavnTekst($query[self::FILTER_NAVNTEKST]));
        }

        $relationListe = new RelationListeType();

        $request = (new SoegInputType())
            ->setAttributListe($attributListe)
            ->setRelationListe($relationListe);

        return $this->clientSoeg()->soeg($request) ?: null;
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
}
