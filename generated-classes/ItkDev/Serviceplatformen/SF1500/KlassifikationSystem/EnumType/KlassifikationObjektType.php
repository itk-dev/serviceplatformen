<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\KlassifikationSystem\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for KlassifikationObjektType EnumType
 * @subpackage Enumerations
 */
class KlassifikationObjektType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Klassifikation'
     * @return string 'Klassifikation'
     */
    const VALUE_KLASSIFIKATION = 'Klassifikation';
    /**
     * Constant for value 'Facet'
     * @return string 'Facet'
     */
    const VALUE_FACET = 'Facet';
    /**
     * Constant for value 'Klasse'
     * @return string 'Klasse'
     */
    const VALUE_KLASSE = 'Klasse';
    /**
     * Return allowed values
     * @uses self::VALUE_KLASSIFIKATION
     * @uses self::VALUE_FACET
     * @uses self::VALUE_KLASSE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_KLASSIFIKATION,
            self::VALUE_FACET,
            self::VALUE_KLASSE,
        ];
    }
}
