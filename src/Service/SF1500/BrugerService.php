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
use ItkDev\Serviceplatformen\Service\SF1500\Model\OrganisationFunktion;
use ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType\_List;
use ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType\Laes;
use ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType\Soeg;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\AttributListeType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\EgenskabType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\FiltreretOejebliksbilledeType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\IdListeType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LaesInputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\LaesOutputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ListInputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ListOutputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\PersonFlerRelationType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\RelationListeType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\SoegInputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\SoegOutputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\UnikIdType;

final class BrugerService extends AbstractService
{
    public const FILTER_BRUGERNAVN = 'brugernavn';
    public const FILTER_PERSON_ID = 'person_id';
    public const FILTER_EMAIL = 'email';
    public const FILTER_LEDER = 'leder';

    /**
     * {@inheritdoc}
     */
    public static function getValidFilters(): array
    {
        return [
            self::FILTER_BRUGERNAVN,
            self::FILTER_PERSON_ID,
            self::FILTER_LEDER,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function list(array $ids, array $fields = []): array
    {
        $list = $this->doList($ids);

        if (empty($list)) {
            return [];
        }

        $items = array_map(
            fn ($oejebliksbillede) => $this->buildModel($oejebliksbillede),
            $list->getFiltreretOejebliksbillede() ?? []
        );

        // Address type => Bruger field name
        $fieldMap = [
            Adresse::EMAIL => Bruger::FIELD_EMAIL,
            Adresse::MOBILTELEFON => Bruger::FIELD_MOBILTELEFON,
            Adresse::LOKATION => Bruger::FIELD_LOKATION,
        ];

        if (!empty($fields) && !empty($items)) {
            foreach ($fields as $field) {
                $adresseIds = array_values(array_filter(array_map(static fn (Bruger $bruger) => $bruger->getRelation(Bruger::RELATION_ADRESSE, $field), $items)));

                /** @var Adresse[] $adresser */
                $adresser = $this->getService(AdresseService::class)->list($adresseIds);
                // Index by id
                $adresser = array_combine(
                    array_map(static fn (Adresse $adresse) => $adresse->id, $adresser),
                    $adresser
                );

                if (isset($fieldMap[$field])) {
                    foreach ($items as $item) {
                        $adresseId = $item->getRelation(Bruger::RELATION_ADRESSE, $field);
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
    protected function doSoeg(array $query): ?SoegOutputType
    {
        $attributListe = new AttributListeType();
        if (isset($query[self::FILTER_BRUGERNAVN])) {
            $attributListe->addToEgenskab((new EgenskabType())
                ->setBrugerNavn($query[self::FILTER_BRUGERNAVN]));
        }

        $relationListe = new RelationListeType();
        if (isset($query[self::FILTER_EMAIL])) {
            // TODO We cannot search by email yet
        }
        if (isset($query[self::FILTER_PERSON_ID])) {
            $ids = (array)$query[self::FILTER_PERSON_ID];
            foreach ($ids as $id) {
                $relationListe->addToTilknyttedePersoner((new PersonFlerRelationType())
                    ->setReferenceID(new UnikIdType($id)));
            }
        }

        $request = (new SoegInputType())
            ->setMaksimalAntalKvantitet((int)($query['limit'] ?? self::DEFAULT_LIMIT))
            ->setFoersteResultatReference((int)($query['offset'] ?? 0))
            ->setAttributListe($attributListe)
            ->setRelationListe($relationListe);

        $response = $this->clientSoeg()->soeg($request) ?: null;

        if (null !== $response && isset($query[self::FILTER_LEDER])) {
            // Keep or throw away managers.
            $managerIds = $this->getManagerIds();

            $brugerIds = $response->getIdListe()->getUUIDIdentifikator();
            $response->setIdListe(new IdListeType(
                array_values(
                    $query[self::FILTER_LEDER]
                        // Keep only managers.
                        ? array_intersect($brugerIds, $managerIds)
                        // Throw away managers.
                        : array_diff($brugerIds, $managerIds)
                )
            ));
        }

        return $response;
    }

    private function getManagerIds()
    {
        $service = $this->getService(OrganisationFunktionService::class);
        /** @var OrganisationFunktion[] $organisationFunktioner */
        $organisationFunktioner = $service->soeg([
            OrganisationFunktionService::FILTER_FUNKTIONSTYPEID => $this->options['organisation-funktion-manager-id']
        ]);

        return array_values(array_filter(array_map(
            static fn (OrganisationFunktion $organisationFunktion) => $organisationFunktion->tilknyttedeBrugere[0] ?? null,
            $organisationFunktioner
        )));
    }

    /**
     * {@inheritdoc}
     */
    protected function doList(array $ids): ?ListOutputType
    {
        return $this->clientList()
            ->_list_1(new ListInputType($ids)) ?: null;
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
    protected function buildModel($oejebliksbillede): Bruger
    {
        assert($oejebliksbillede instanceof FiltreretOejebliksbilledeType);
        $id = $oejebliksbillede->getObjektType()->getUUIDIdentifikator();
        $model = new Bruger(['id' => $id]);
        foreach ($oejebliksbillede->getRegistrering() as $registrering) {
            // We assume that we have only a single item in the attribute list.
            foreach ($registrering->getAttributListe()->getEgenskab() as $egenskab) {
                $model->brugernavn = $egenskab->getBrugerNavn();
                $model->brugertype = $egenskab->getBrugerTypeTekst();
                break;
            }
            // Set an address relation for each labeled address.
            foreach (($registrering->getRelationListe()->getAdresser() ?? []) as $adresse) {
                $model->setRelation(
                    Bruger::RELATION_ADRESSE,
                    $adresse->getRolle()->getLabel(),
                    $adresse->getReferenceID()->getUUIDIdentifikator()
                );
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
