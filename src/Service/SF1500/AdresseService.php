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
use ItkDev\Serviceplatformen\SF1500\Adresse\ClassMap;
use ItkDev\Serviceplatformen\SF1500\Adresse\ServiceType\_List;
use ItkDev\Serviceplatformen\SF1500\Adresse\ServiceType\Soeg;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\AttributListeType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\EgenskabType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\ListInputType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\ListOutputType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\SoegInputType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\SoegOutputType;
use ItkDev\Serviceplatformen\SF1500\Adresse\StructType\TilstandListeType;

final class AdresseService extends SF1500
{
    private array $clients = [];

    /**
     * @return Adresse[]
     */
    public function soeg(string $query, array $fields = []): array
    {
        // Search by username
        $data = $this->getSoeg($query);

        $list = $this->getList($data->getIdListe()->getUUIDIdentifikator());

        $adresser = [];
        foreach ($list->getFiltreretOejebliksbillede() as $oejebliksbillede) {
            $id = $oejebliksbillede->getObjektType()->getUUIDIdentifikator();
            $adresse = (new Adresse(['id' => $id]));
            foreach ($oejebliksbillede->getRegistrering() as $registrering) {
                foreach ($registrering->getAttributListe()->getEgenskab() as $egenskab) {
                    $adresse->adressetekst = $egenskab->getAdresseTekst();
                }
            }
            $adresser[$id] = $adresse;
        }

        return $adresser;
    }

    protected function getSoeg(string $tekst): SoegOutputType
    {
        return $this->clientSoeg()
            ->soeg(
                (new SoegInputType())
                    ->setAttributListe((new AttributListeType())
                        ->setEgenskab([
                            (new EgenskabType())
                                ->setAdresseTekst($tekst),
                        ]))
            );
    }

    protected function getList(array $ids): ListOutputType
    {
        return $this->clientList()
            ->_list((new ListInputType())
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
                    SoapClientBase::WSDL_URL => __DIR__ . '/../../../resources/sf1500/Tekniske specifikationer (v6.0 Services)/v6_0_0_0/wsdl/Adresse.wsdl',
                    SoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
                ] + $options))
                ->setSF1500($this);
        }

        return $this->clients[$className];
    }
}
