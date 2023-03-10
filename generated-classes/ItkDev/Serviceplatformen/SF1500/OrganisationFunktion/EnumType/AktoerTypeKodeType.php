<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationFunktion\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AktoerTypeKodeType EnumType
 * @subpackage Enumerations
 */
class AktoerTypeKodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Organisation'
     * @return string 'Organisation'
     */
    const VALUE_ORGANISATION = 'Organisation';
    /**
     * Constant for value 'OrganisationEnhed'
     * @return string 'OrganisationEnhed'
     */
    const VALUE_ORGANISATION_ENHED = 'OrganisationEnhed';
    /**
     * Constant for value 'OrganisationFunktion'
     * @return string 'OrganisationFunktion'
     */
    const VALUE_ORGANISATION_FUNKTION = 'OrganisationFunktion';
    /**
     * Constant for value 'Bruger'
     * @return string 'Bruger'
     */
    const VALUE_BRUGER = 'Bruger';
    /**
     * Constant for value 'ItSystem'
     * @return string 'ItSystem'
     */
    const VALUE_IT_SYSTEM = 'ItSystem';
    /**
     * Constant for value 'Interessefaellesskab'
     * @return string 'Interessefaellesskab'
     */
    const VALUE_INTERESSEFAELLESSKAB = 'Interessefaellesskab';
    /**
     * Return allowed values
     * @uses self::VALUE_ORGANISATION
     * @uses self::VALUE_ORGANISATION_ENHED
     * @uses self::VALUE_ORGANISATION_FUNKTION
     * @uses self::VALUE_BRUGER
     * @uses self::VALUE_IT_SYSTEM
     * @uses self::VALUE_INTERESSEFAELLESSKAB
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ORGANISATION,
            self::VALUE_ORGANISATION_ENHED,
            self::VALUE_ORGANISATION_FUNKTION,
            self::VALUE_BRUGER,
            self::VALUE_IT_SYSTEM,
            self::VALUE_INTERESSEFAELLESSKAB,
        ];
    }
}
