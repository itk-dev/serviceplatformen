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
 * @property string $adressetekst;
 */
final class Adresse extends AbstractModel
{
    public const EMAIL = 'Email_bruger';
    public const MOBILTELEFON = 'Mobiltelefon_bruger';
    public const LOKATION = 'Lokation_bruger';
}
