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
 * @property string $organisationnavn
 */
final class Organisation extends AbstractModel
{
    public const RELATION_ADRESSE = 'adresse';
}
