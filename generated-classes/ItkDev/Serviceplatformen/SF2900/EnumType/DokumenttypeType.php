<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DokumenttypeType EnumType
 * @subpackage Enumerations
 */
class DokumenttypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Faktura'
     * @return string 'Faktura'
     */
    const VALUE_FAKTURA = 'Faktura';
    /**
     * Constant for value 'Brev'
     * @return string 'Brev'
     */
    const VALUE_BREV = 'Brev';
    /**
     * Constant for value 'Notat'
     * @return string 'Notat'
     */
    const VALUE_NOTAT = 'Notat';
    /**
     * Constant for value 'Rapport'
     * @return string 'Rapport'
     */
    const VALUE_RAPPORT = 'Rapport';
    /**
     * Constant for value 'Dagsorden'
     * @return string 'Dagsorden'
     */
    const VALUE_DAGSORDEN = 'Dagsorden';
    /**
     * Constant for value 'Refereat'
     * @return string 'Refereat'
     */
    const VALUE_REFEREAT = 'Refereat';
    /**
     * Constant for value 'eMail'
     * @return string 'eMail'
     */
    const VALUE_E_MAIL = 'eMail';
    /**
     * Constant for value 'Anden'
     * @return string 'Anden'
     */
    const VALUE_ANDEN = 'Anden';
    /**
     * Return allowed values
     * @uses self::VALUE_FAKTURA
     * @uses self::VALUE_BREV
     * @uses self::VALUE_NOTAT
     * @uses self::VALUE_RAPPORT
     * @uses self::VALUE_DAGSORDEN
     * @uses self::VALUE_REFEREAT
     * @uses self::VALUE_E_MAIL
     * @uses self::VALUE_ANDEN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FAKTURA,
            self::VALUE_BREV,
            self::VALUE_NOTAT,
            self::VALUE_RAPPORT,
            self::VALUE_DAGSORDEN,
            self::VALUE_REFEREAT,
            self::VALUE_E_MAIL,
            self::VALUE_ANDEN,
        ];
    }
}
