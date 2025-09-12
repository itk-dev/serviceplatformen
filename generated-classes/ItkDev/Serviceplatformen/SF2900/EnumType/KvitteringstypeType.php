<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for KvitteringstypeType EnumType
 * @subpackage Enumerations
 */
class KvitteringstypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Teknisk'
     * @return string 'Teknisk'
     */
    const VALUE_TEKNISK = 'Teknisk';
    /**
     * Constant for value 'Forretning'
     * @return string 'Forretning'
     */
    const VALUE_FORRETNING = 'Forretning';
    /**
     * Constant for value 'Digital post'
     * @return string 'Digital post'
     */
    const VALUE_DIGITAL_POST = 'Digital post';
    /**
     * Return allowed values
     * @uses self::VALUE_TEKNISK
     * @uses self::VALUE_FORRETNING
     * @uses self::VALUE_DIGITAL_POST
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TEKNISK,
            self::VALUE_FORRETNING,
            self::VALUE_DIGITAL_POST,
        ];
    }
}
