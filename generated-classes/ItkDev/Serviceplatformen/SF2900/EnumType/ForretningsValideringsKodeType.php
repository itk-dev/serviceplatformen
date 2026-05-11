<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ForretningsValideringsKodeType EnumType
 * @subpackage Enumerations
 */
class ForretningsValideringsKodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MODTAGET'
     * @return string 'MODTAGET'
     */
    const VALUE_MODTAGET = 'MODTAGET';
    /**
     * Constant for value 'AFLEVERET'
     * @return string 'AFLEVERET'
     */
    const VALUE_AFLEVERET = 'AFLEVERET';
    /**
     * Constant for value 'ACCEPTERET'
     * @return string 'ACCEPTERET'
     */
    const VALUE_ACCEPTERET = 'ACCEPTERET';
    /**
     * Constant for value 'AFVIST'
     * @return string 'AFVIST'
     */
    const VALUE_AFVIST = 'AFVIST';
    /**
     * Constant for value 'FEJLET'
     * @return string 'FEJLET'
     */
    const VALUE_FEJLET = 'FEJLET';
    /**
     * Return allowed values
     * @uses self::VALUE_MODTAGET
     * @uses self::VALUE_AFLEVERET
     * @uses self::VALUE_ACCEPTERET
     * @uses self::VALUE_AFVIST
     * @uses self::VALUE_FEJLET
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MODTAGET,
            self::VALUE_AFLEVERET,
            self::VALUE_ACCEPTERET,
            self::VALUE_AFVIST,
            self::VALUE_FEJLET,
        ];
    }
}
