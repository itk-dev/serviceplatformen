<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500;

use ItkDev\Serviceplatformen\Service\SF1500\Model\Bruger;
use ItkDev\Serviceplatformen\SF1500\Bruger\ClassMap;
use ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType\_List;
use ItkDev\Serviceplatformen\SF1500\Bruger\ServiceType\Soeg;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\AttributListeType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\EgenskabType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ListInputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\ListOutputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\SoegInputType;
use ItkDev\Serviceplatformen\SF1500\Bruger\StructType\SoegOutputType;

final class BrugerService extends SF1500
{
    private array $clients = [];

    /**
     * @return Bruger[]
     */
    public function soeg(string $query, array $fields = []): array
    {
        // Search by username
        $data = $this->getSoeg($query);

        if (empty($data->getIdListe()->getUUIDIdentifikator())) {
            // TODO Search by email
            throw new \RuntimeException('Lazy programmer exception');
            $data = $this->sf1500->getAdresseSoeg($query);
        }

        $list = $this->getList($data->getIdListe()->getUUIDIdentifikator());

        $brugere = [];
        foreach ($list->getFiltreretOejebliksbillede() as $oejebliksbillede) {
            $id = $oejebliksbillede->getObjektType()->getUUIDIdentifikator();
            $bruger = (new Bruger(['id' => $id]));
            foreach ($oejebliksbillede->getRegistrering() as $registrering) {
                foreach ($registrering->getAttributListe()->getEgenskab() as $egenskab) {
                    $bruger->brugernavn = $egenskab->getBrugerNavn();
                    $bruger->brugertype = $egenskab->getBrugerTypeTekst();
                }
                foreach ($registrering->getRelationListe()->getAdresser() as $adresse) {
                    //if ('Email_bruger' === $adresse->getRolle()->getLabel())
                    {
                        // TODO
                        $bruger->setRelation(
                            'adresse',
                            $adresse->getRolle()->getLabel(),
                            $adresse->getReferenceID()->getUUIDIdentifikator()
                        );
                    }
                }
            }
            $brugere[$id] = $bruger;
        }

        return $brugere;

        header('content-type: text/plain');
        echo var_export($list, true);
        die(__FILE__.':'.__LINE__.':'.__METHOD__);
        $results = [];
        foreach ($ids as $id) {
            $results[] = new Bruger([
                'id' => $id,
                'brugernavn' => $this->sf1500->getBrugerAZIdent($id),
                'email' => $this->sf1500->getBrugerEmail($id),
                'navn' => $this->sf1500->getBrugerName($id),
                'mobiltelefon' => $this->sf1500->getBrugerPhone($id),
            ]);
        }

        return $results;
    }

    protected function getSoeg(string $tekst): SoegOutputType
    {
        return $this->clientSoeg()
            ->soeg(
                (new SoegInputType())
                    ->setAttributListe((new AttributListeType())
                        ->setEgenskab([
                            (new EgenskabType())
                                ->setBrugerNavn($tekst),
                        ]))
            );
    }

    protected function getList(array $ids): ListOutputType
    {
        return $this->clientList()
            ->_list_1((new ListInputType())
                ->setUUIDIdentifikator($ids));
    }

    private function clientSoeg(array $options = []): Soeg
    {
        return $this->client(Soeg::class, $options);
    }

    private function clientList(array $options = []): _List
    {
        return $this->client(_List::class, $options);
    }

    private function client(string $className, array $options = []): SoapClientBase
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
