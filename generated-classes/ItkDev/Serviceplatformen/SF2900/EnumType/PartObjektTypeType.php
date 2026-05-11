<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PartObjektTypeType EnumType
 * @subpackage Enumerations
 */
class PartObjektTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Person'
     * @return string 'Person'
     */
    const VALUE_PERSON = 'Person';
    /**
     * Constant for value 'Virksomhed'
     * @return string 'Virksomhed'
     */
    const VALUE_VIRKSOMHED = 'Virksomhed';
    /**
     * Constant for value 'Organisation'
     * @return string 'Organisation'
     */
    const VALUE_ORGANISATION = 'Organisation';
    /**
     * Constant for value 'OrgEnhed'
     * @return string 'OrgEnhed'
     */
    const VALUE_ORG_ENHED = 'OrgEnhed';
    /**
     * Constant for value 'OrgFunktion'
     * @return string 'OrgFunktion'
     */
    const VALUE_ORG_FUNKTION = 'OrgFunktion';
    /**
     * Constant for value 'Interesse-faellesskab'
     * @return string 'Interesse-faellesskab'
     */
    const VALUE_INTERESSE_FAELLESSKAB = 'Interesse-faellesskab';
    /**
     * Constant for value 'Bruger'
     * @return string 'Bruger'
     */
    const VALUE_BRUGER = 'Bruger';
    /**
     * Return allowed values
     * @uses self::VALUE_PERSON
     * @uses self::VALUE_VIRKSOMHED
     * @uses self::VALUE_ORGANISATION
     * @uses self::VALUE_ORG_ENHED
     * @uses self::VALUE_ORG_FUNKTION
     * @uses self::VALUE_INTERESSE_FAELLESSKAB
     * @uses self::VALUE_BRUGER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PERSON,
            self::VALUE_VIRKSOMHED,
            self::VALUE_ORGANISATION,
            self::VALUE_ORG_ENHED,
            self::VALUE_ORG_FUNKTION,
            self::VALUE_INTERESSE_FAELLESSKAB,
            self::VALUE_BRUGER,
        ];
    }
}
