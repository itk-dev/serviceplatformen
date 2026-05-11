<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RetningType EnumType
 * @subpackage Enumerations
 */
class RetningType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Indgaaende'
     * @return string 'Indgaaende'
     */
    const VALUE_INDGAAENDE = 'Indgaaende';
    /**
     * Constant for value 'Udgaaende'
     * @return string 'Udgaaende'
     */
    const VALUE_UDGAAENDE = 'Udgaaende';
    /**
     * Constant for value 'InterntInd'
     * @return string 'InterntInd'
     */
    const VALUE_INTERNT_IND = 'InterntInd';
    /**
     * Constant for value 'InterntUd'
     * @return string 'InterntUd'
     */
    const VALUE_INTERNT_UD = 'InterntUd';
    /**
     * Constant for value 'Internt'
     * @return string 'Internt'
     */
    const VALUE_INTERNT = 'Internt';
    /**
     * Return allowed values
     * @uses self::VALUE_INDGAAENDE
     * @uses self::VALUE_UDGAAENDE
     * @uses self::VALUE_INTERNT_IND
     * @uses self::VALUE_INTERNT_UD
     * @uses self::VALUE_INTERNT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INDGAAENDE,
            self::VALUE_UDGAAENDE,
            self::VALUE_INTERNT_IND,
            self::VALUE_INTERNT_UD,
            self::VALUE_INTERNT,
        ];
    }
}
