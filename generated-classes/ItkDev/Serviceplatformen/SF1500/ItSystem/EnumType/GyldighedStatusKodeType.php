<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\ItSystem\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GyldighedStatusKodeType EnumType
 * @subpackage Enumerations
 */
class GyldighedStatusKodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Aktiv'
     * @return string 'Aktiv'
     */
    const VALUE_AKTIV = 'Aktiv';
    /**
     * Constant for value 'Inaktiv'
     * @return string 'Inaktiv'
     */
    const VALUE_INAKTIV = 'Inaktiv';
    /**
     * Return allowed values
     * @uses self::VALUE_AKTIV
     * @uses self::VALUE_INAKTIV
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AKTIV,
            self::VALUE_INAKTIV,
        ];
    }
}
