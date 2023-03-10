<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\ItSystem\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ArkivTypeKodeType EnumType
 * @subpackage Enumerations
 */
class ArkivTypeKodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Forvaltning'
     * @return string 'Forvaltning'
     */
    const VALUE_FORVALTNING = 'Forvaltning';
    /**
     * Constant for value 'Reference'
     * @return string 'Reference'
     */
    const VALUE_REFERENCE = 'Reference';
    /**
     * Constant for value 'Personlig'
     * @return string 'Personlig'
     */
    const VALUE_PERSONLIG = 'Personlig';
    /**
     * Return allowed values
     * @uses self::VALUE_FORVALTNING
     * @uses self::VALUE_REFERENCE
     * @uses self::VALUE_PERSONLIG
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FORVALTNING,
            self::VALUE_REFERENCE,
            self::VALUE_PERSONLIG,
        ];
    }
}
