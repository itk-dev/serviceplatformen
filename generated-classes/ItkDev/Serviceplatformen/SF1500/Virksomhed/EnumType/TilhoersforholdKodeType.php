<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Virksomhed\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TilhoersforholdKodeType EnumType
 * @subpackage Enumerations
 */
class TilhoersforholdKodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Vedlagt'
     * @return string 'Vedlagt'
     */
    const VALUE_VEDLAGT = 'Vedlagt';
    /**
     * Constant for value 'Tilakteret'
     * @return string 'Tilakteret'
     */
    const VALUE_TILAKTERET = 'Tilakteret';
    /**
     * Return allowed values
     * @uses self::VALUE_VEDLAGT
     * @uses self::VALUE_TILAKTERET
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_VEDLAGT,
            self::VALUE_TILAKTERET,
        ];
    }
}
