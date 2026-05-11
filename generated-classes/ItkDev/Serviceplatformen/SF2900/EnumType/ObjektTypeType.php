<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ObjektTypeType EnumType
 * @subpackage Enumerations
 */
class ObjektTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'JOURNALPOST'
     * @return string 'JOURNALPOST'
     */
    const VALUE_JOURNALPOST = 'JOURNALPOST';
    /**
     * Constant for value 'DOKUMENT'
     * @return string 'DOKUMENT'
     */
    const VALUE_DOKUMENT = 'DOKUMENT';
    /**
     * Constant for value 'FORMULAR'
     * @return string 'FORMULAR'
     */
    const VALUE_FORMULAR = 'FORMULAR';
    /**
     * Return allowed values
     * @uses self::VALUE_JOURNALPOST
     * @uses self::VALUE_DOKUMENT
     * @uses self::VALUE_FORMULAR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_JOURNALPOST,
            self::VALUE_DOKUMENT,
            self::VALUE_FORMULAR,
        ];
    }
}
