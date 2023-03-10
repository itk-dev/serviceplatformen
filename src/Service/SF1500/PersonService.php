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

class PersonService
{
    private SF1500 $sf1500;

    public function __construct(SF1500 $sf1500)
    {
        $this->sf1500= $sf1500;
    }

    /**
     * @return Bruger[]
     */
    public function soeg(string $query, array $fields = []): array
    {
        $data = $this->sf1500->getPersonSoeg($query);
        header('content-type: text/plain');
        echo var_export($data, true);
        die(__FILE__.':'.__LINE__.':'.__METHOD__);
        $ids = $this->sf1500->getSoegIdliste($data);

        if (empty($ids)) {
            $data = $this->sf1500->getAdresseSoeg($query);
            $ids = $this->sf1500->getSoegIdliste($data);
        }

        $result = $this->sf1500->getBrugerList($ids);

        $results = [];
        foreach ($ids as $id) {
            $results[] = new Bruger([
                'id' => $id,
                'brugernavn' => $this->sf1500->getPersonAZIdent($id),
                'email' => $this->sf1500->getPersonEmail($id),
                'navn' => $this->sf1500->getPersonName($id),
                'mobiltelefon' => $this->sf1500->getPersonPhone($id),
            ]);
        }

        return $results;
    }
}
