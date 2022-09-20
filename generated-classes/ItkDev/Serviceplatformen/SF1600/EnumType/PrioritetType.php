<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PrioritetType EnumType
 * @subpackage Enumerations
 */
class PrioritetType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Return allowed values
     * @uses self::VALUE_D
     * @uses self::VALUE_M
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_D,
            self::VALUE_M,
        ];
    }
}
