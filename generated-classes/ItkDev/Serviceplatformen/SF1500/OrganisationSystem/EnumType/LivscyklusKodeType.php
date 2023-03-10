<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LivscyklusKodeType EnumType
 * @subpackage Enumerations
 */
class LivscyklusKodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Opstaaet'
     * @return string 'Opstaaet'
     */
    const VALUE_OPSTAAET = 'Opstaaet';
    /**
     * Constant for value 'Importeret'
     * @return string 'Importeret'
     */
    const VALUE_IMPORTERET = 'Importeret';
    /**
     * Constant for value 'Passiveret'
     * @return string 'Passiveret'
     */
    const VALUE_PASSIVERET = 'Passiveret';
    /**
     * Constant for value 'Slettet'
     * @return string 'Slettet'
     */
    const VALUE_SLETTET = 'Slettet';
    /**
     * Return allowed values
     * @uses self::VALUE_OPSTAAET
     * @uses self::VALUE_IMPORTERET
     * @uses self::VALUE_PASSIVERET
     * @uses self::VALUE_SLETTET
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OPSTAAET,
            self::VALUE_IMPORTERET,
            self::VALUE_PASSIVERET,
            self::VALUE_SLETTET,
        ];
    }
}
