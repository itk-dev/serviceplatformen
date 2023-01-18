<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for KanalKodeType EnumType
 * @subpackage Enumerations
 */
class KanalKodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Digital Post'
     * @return string 'Digital Post'
     */
    const VALUE_DIGITAL_POST = 'Digital Post';
    /**
     * Constant for value 'Fysisk Post'
     * @return string 'Fysisk Post'
     */
    const VALUE_FYSISK_POST = 'Fysisk Post';
    /**
     * Return allowed values
     * @uses self::VALUE_DIGITAL_POST
     * @uses self::VALUE_FYSISK_POST
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DIGITAL_POST,
            self::VALUE_FYSISK_POST,
        ];
    }
}
