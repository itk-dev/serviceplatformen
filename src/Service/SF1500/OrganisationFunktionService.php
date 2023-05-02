<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500;

use ItkDev\Serviceplatformen\Service\SF1500\Model\OrganisationFunktion;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\ServiceType\_List;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\ServiceType\Laes;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\ServiceType\Soeg;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\AttributListeType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\BrugerFlerRelationType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\EgenskabType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\FiltreretOejebliksbilledeType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\KlasseRelationType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\LaesInputType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\LaesOutputType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\ListInputType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\ListOutputType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\RelationListeType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\SoegInputType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\SoegOutputType;
use ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\StructType\UnikIdType;

final class OrganisationFunktionService extends AbstractService
{
    public const FILTER_FUNKTIONNAVN = 'funktionnavn';
    public const FILTER_FUNKTIONSTYPEID = 'funktionstypeid';

    /**
     * {@inheritdoc}
     */
    public static function getValidFilters(): array
    {
        return [
            self::FILTER_FUNKTIONNAVN,
            self::FILTER_FUNKTIONSTYPEID,
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function doSoeg(array $query): ?SoegOutputType
    {
        $attributListe = new AttributListeType();
        if (isset($query[self::FILTER_FUNKTIONNAVN])) {
            $attributListe->addToEgenskab((new EgenskabType())
                ->setFunktionNavn($query[self::FILTER_FUNKTIONNAVN]));
        }

        $relationListe = new RelationListeType();

        if (isset($query[self::FILTER_FUNKTIONSTYPEID])) {
            $relationListe->setFunktionstype((new KlasseRelationType)
                ->setReferenceID(new UnikIdType($query[self::FILTER_FUNKTIONSTYPEID])));
        }

        $request = (new SoegInputType())
            ->setMaksimalAntalKvantitet((int)($query['limit'] ?? self::DEFAULT_LIMIT))
            ->setFoersteResultatReference((int)($query['offset'] ?? 0))
            ->setAttributListe($attributListe)
            ->setRelationListe($relationListe);

        return $this->clientSoeg()->soeg($request) ?: null;
    }

    /**
     * {@inheritdoc}
     */
    protected function doList(array $ids): ?ListOutputType
    {
        return $this->clientList()
            ->_list_10(new ListInputType($ids)) ?: null;
    }

    /**
     * {@inheritdoc}
     */
    protected function doLaes(string $id): ?LaesOutputType
    {
        return $this->clientLaes()
            ->laes(new LaesInputType($id)) ?: null;
    }

    /**
     * {@inheritdoc}
     */
    protected function buildModel($oejebliksbillede): OrganisationFunktion
    {
        assert($oejebliksbillede instanceof FiltreretOejebliksbilledeType);
        $id = $oejebliksbillede->getObjektType()->getUUIDIdentifikator();
        $model = new OrganisationFunktion(['id' => $id]);
        foreach ($oejebliksbillede->getRegistrering() as $registrering) {
            foreach ($registrering->getAttributListe()->getEgenskab() as $egenskab) {
                $model->funktionnavn = $egenskab->getFunktionNavn();
            }
            $model->tilknyttedeBrugere = array_map(
                static fn (BrugerFlerRelationType $relation) => $relation->getReferenceID()?->getUUIDIdentifikator(),
                $registrering->getRelationListe()?->getTilknyttedeBrugere() ?? []
            );
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
