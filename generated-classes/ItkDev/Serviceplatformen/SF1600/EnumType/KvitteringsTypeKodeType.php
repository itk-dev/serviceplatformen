<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for KvitteringsTypeKodeType EnumType
 * @subpackage Enumerations
 */
class KvitteringsTypeKodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Alle'
     * @return string 'Alle'
     */
    const VALUE_ALLE = 'Alle';
    /**
     * Constant for value 'Ingen'
     * @return string 'Ingen'
     */
    const VALUE_INGEN = 'Ingen';
    /**
     * Constant for value 'Kun fejl'
     * @return string 'Kun fejl'
     */
    const VALUE_KUN_FEJL = 'Kun fejl';
    /**
     * Return allowed values
     * @uses self::VALUE_ALLE
     * @uses self::VALUE_INGEN
     * @uses self::VALUE_KUN_FEJL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ALLE,
            self::VALUE_INGEN,
            self::VALUE_KUN_FEJL,
        ];
    }
}
