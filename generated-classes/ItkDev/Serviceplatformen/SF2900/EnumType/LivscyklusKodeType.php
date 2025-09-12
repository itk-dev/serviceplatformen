<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LivscyklusKodeType EnumType
 * @subpackage Enumerations
 */
class LivscyklusKodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Oprettet'
     * @return string 'Oprettet'
     */
    const VALUE_OPRETTET = 'Oprettet';
    /**
     * Return allowed values
     * @uses self::VALUE_OPRETTET
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OPRETTET,
        ];
    }
}
