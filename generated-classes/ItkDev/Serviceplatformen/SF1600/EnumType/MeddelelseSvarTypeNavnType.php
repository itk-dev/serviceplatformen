<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MeddelelseSvarTypeNavnType EnumType
 * @subpackage Enumerations
 */
class MeddelelseSvarTypeNavnType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'angivet'
     * @return string 'angivet'
     */
    const VALUE_ANGIVET = 'angivet';
    /**
     * Constant for value 'ikkeMuligt'
     * @return string 'ikkeMuligt'
     */
    const VALUE_IKKE_MULIGT = 'ikkeMuligt';
    /**
     * Constant for value 'standard'
     * @return string 'standard'
     */
    const VALUE_STANDARD = 'standard';
    /**
     * Return allowed values
     * @uses self::VALUE_ANGIVET
     * @uses self::VALUE_IKKE_MULIGT
     * @uses self::VALUE_STANDARD
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ANGIVET,
            self::VALUE_IKKE_MULIGT,
            self::VALUE_STANDARD,
        ];
    }
}
