<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FarveSHKodeType EnumType
 * @subpackage Enumerations
 */
class FarveSHKodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SH'
     * @return string 'SH'
     */
    const VALUE_SH = 'SH';
    /**
     * Constant for value 'Farve'
     * @return string 'Farve'
     */
    const VALUE_FARVE = 'Farve';
    /**
     * Return allowed values
     * @uses self::VALUE_SH
     * @uses self::VALUE_FARVE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SH,
            self::VALUE_FARVE,
        ];
    }
}
