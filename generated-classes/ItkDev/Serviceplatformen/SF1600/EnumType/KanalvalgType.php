<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for KanalvalgType EnumType
 * @subpackage Enumerations
 */
class KanalvalgType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'F'
     * @return string 'F'
     */
    const VALUE_F = 'F';
    /**
     * Constant for value 'P'
     * @return string 'P'
     */
    const VALUE_P = 'P';
    /**
     * Return allowed values
     * @uses self::VALUE_A
     * @uses self::VALUE_D
     * @uses self::VALUE_S
     * @uses self::VALUE_F
     * @uses self::VALUE_P
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_A,
            self::VALUE_D,
            self::VALUE_S,
            self::VALUE_F,
            self::VALUE_P,
        ];
    }
}
