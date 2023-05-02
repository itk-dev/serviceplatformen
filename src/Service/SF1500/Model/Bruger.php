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
    public const RELATION_ADRESSE = 'adresse';

    public const FIELD_EMAIL = 'email';
    public const FIELD_MOBILTELEFON = 'mobiltelefon';
    public const FIELD_LOKATION = 'lokation';

    public function __get($name)
    {
        return match ($name) {
            self::FIELD_EMAIL => $this->relations[self::RELATION_ADRESSE][Adresse::EMAIL] ?? null,
            self::FIELD_MOBILTELEFON => $this->relations[self::RELATION_ADRESSE][Adresse::MOBILTELEFON] ?? null,
            self::FIELD_LOKATION => $this->relations[self::RELATION_ADRESSE][Adresse::LOKATION] ?? null,
            default => parent::__get($name)
        };
    }
}
