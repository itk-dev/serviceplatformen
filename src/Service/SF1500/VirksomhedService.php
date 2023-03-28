<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500;

use ItkDev\Serviceplatformen\Service\SF1500\Model\Virksomhed;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\ClassMap;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\ServiceType\_List;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\ServiceType\Laes;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\ServiceType\Soeg;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\AttributListeType;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\EgenskabType;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\FiltreretOejebliksbilledeType;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\LaesInputType;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\LaesOutputType;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\ListInputType;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\ListOutputType;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\RelationListeType;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegInputType;
use ItkDev\Serviceplatformen\SF1500\Virksomhed\StructType\SoegOutputType;

final class VirksomhedService extends AbstractService
{
    protected function buildModel($oejebliksbillede): Virksomhed
    {
        assert($oejebliksbillede instanceof FiltreretOejebliksbilledeType);
        $id = $oejebliksbillede->getObjektType()->getUUIDIdentifikator();
        $model = new Virksomhed(['id' => $id]);
        foreach ($oejebliksbillede->getRegistrering() as $registrering) {
            foreach ($registrering->getAttributListe()->getEgenskab() as $egenskab) {
                $model->navn = $egenskab->getNavnTekst();
                $model->cvrNummer = $egenskab->getCVR_NummerTekst();
            }
        }

        return $model;
    }

    protected function doSoeg(array $query): ?SoegOutputType
    {
        $attributListe = new AttributListeType();
        if (isset($query['navntekst'])) {
            $attributListe->addToEgenskab((new EgenskabType())
                ->setNavnTekst($query['navntekst']));
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
            ->_list_12(new ListInputType($ids)) ?: null;
    }

    protected function doLaes(string $id): ?LaesOutputType
    {
        return $this->clientLaes()
            ->laes(new LaesInputType($id)) ?: null;
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
