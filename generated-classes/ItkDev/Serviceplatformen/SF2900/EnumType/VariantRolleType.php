<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for VariantRolleType EnumType
 * @subpackage Enumerations
 */
class VariantRolleType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Variant'
     * @return string 'Variant'
     */
    const VALUE_VARIANT = 'Variant';
    /**
     * Return allowed values
     * @uses self::VALUE_VARIANT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_VARIANT,
        ];
    }
}
