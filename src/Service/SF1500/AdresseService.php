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
use ItkDev\Serviceplatformen\SF1500\Adresse\ServiceType\_List;
use ItkDev\Serviceplatformen\SF1500\Adresse\ServiceType\Laes;
use ItkDev\Serviceplatformen\SF1500\Adresse\ServiceType\Soeg;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\AttributListeType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\EgenskabType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\FiltreretOejebliksbilledeType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\LaesInputType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\LaesOutputType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\ListInputType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\ListOutputType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\RelationListeType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\SoegInputType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\SoegOutputType;

final class AdresseService extends AbstractService
{
    public const FILTER_ADRESSETEKST = 'adressetekst';

    protected static $validFilters = [
        self::FILTER_ADRESSETEKST,
    ];

    protected function doSoeg(array $query): ?SoegOutputType
    {
        $attributListe = new AttributListeType();
        if (isset($query[self::FILTER_ADRESSETEKST])) {
            $attributListe->addToEgenskab((new EgenskabType())
                ->setAdresseTekst($query[self::FILTER_ADRESSETEKST]));
        }

        $relationListe = new RelationListeType();

        $request = (new SoegInputType())
            ->setAttributListe($attributListe)
            ->setRelationListe($relationListe);

        return $this->clientSoeg()->soeg($request) ?: null;
    }

    protected function doList(array $ids): ?ListOutputType
    {
        return $this->clientList()
            ->_list(new ListInputType($ids)) ?: null;
    }

    protected function doLaes(string $id): ?LaesOutputType
    {
        return $this->clientLaes()
            ->laes(new LaesInputType($id)) ?: null;
    }

    protected function buildModel($oejebliksbillede): Adresse
    {
        assert($oejebliksbillede instanceof FiltreretOejebliksbilledeType);
        $id = $oejebliksbillede->getObjektType()->getUUIDIdentifikator();
        $model = new Adresse(['id' => $id]);
        foreach ($oejebliksbillede->getRegistrering() as $registrering) {
            foreach ($registrering->getAttributListe()->getEgenskab() as $egenskab) {
                $model->adressetekst = $egenskab->getAdresseTekst();
            }
        }

        return $model;
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
