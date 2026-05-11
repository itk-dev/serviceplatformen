<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DokumentPartRolleType EnumType
 * @subpackage Enumerations
 */
class DokumentPartRolleType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PrimaerPart'
     * @return string 'PrimaerPart'
     */
    const VALUE_PRIMAER_PART = 'PrimaerPart';
    /**
     * Constant for value 'SekundaerPart'
     * @return string 'SekundaerPart'
     */
    const VALUE_SEKUNDAER_PART = 'SekundaerPart';
    /**
     * Constant for value 'KopiModtager'
     * @return string 'KopiModtager'
     */
    const VALUE_KOPI_MODTAGER = 'KopiModtager';
    /**
     * Return allowed values
     * @uses self::VALUE_PRIMAER_PART
     * @uses self::VALUE_SEKUNDAER_PART
     * @uses self::VALUE_KOPI_MODTAGER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PRIMAER_PART,
            self::VALUE_SEKUNDAER_PART,
            self::VALUE_KOPI_MODTAGER,
        ];
    }
}
