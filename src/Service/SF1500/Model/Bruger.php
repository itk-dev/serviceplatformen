<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1500\Model;

/**
 * @property string $id
 * @property string $brugernavn
 * @property string $brugertype
 * @property string $navn
 * @property string $email
 * @property string $mobiltelefon
 * @property string $lokation
 */
final class Bruger extends AbstractModel
{
    public function __get($name)
    {
        if ('email' === $name) {
            return $this->relations['adresse']['Email_bruger'] ?? null;
        }
        return parent::__get($name);
    }
}
