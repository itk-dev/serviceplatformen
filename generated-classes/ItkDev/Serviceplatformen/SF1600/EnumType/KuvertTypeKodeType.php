<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for KuvertTypeKodeType EnumType
 * @subpackage Enumerations
 */
class KuvertTypeKodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'C4'
     * @return string 'C4'
     */
    const VALUE_C_4 = 'C4';
    /**
     * Constant for value 'C5'
     * @return string 'C5'
     */
    const VALUE_C_5 = 'C5';
    /**
     * Constant for value 'MA'
     * @return string 'MA'
     */
    const VALUE_MA = 'MA';
    /**
     * Return allowed values
     * @uses self::VALUE_C_4
     * @uses self::VALUE_C_5
     * @uses self::VALUE_MA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_C_4,
            self::VALUE_C_5,
            self::VALUE_MA,
        ];
    }
}
