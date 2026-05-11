<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TransportValideringsKodeType EnumType
 * @subpackage Enumerations
 */
class TransportValideringsKodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OK'
     * @return string 'OK'
     */
    const VALUE_OK = 'OK';
    /**
     * Constant for value 'ADVARSEL'
     * @return string 'ADVARSEL'
     */
    const VALUE_ADVARSEL = 'ADVARSEL';
    /**
     * Constant for value 'FEJL'
     * @return string 'FEJL'
     */
    const VALUE_FEJL = 'FEJL';
    /**
     * Return allowed values
     * @uses self::VALUE_OK
     * @uses self::VALUE_ADVARSEL
     * @uses self::VALUE_FEJL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OK,
            self::VALUE_ADVARSEL,
            self::VALUE_FEJL,
        ];
    }
}
