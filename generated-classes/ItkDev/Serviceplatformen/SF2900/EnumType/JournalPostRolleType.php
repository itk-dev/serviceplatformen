<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for JournalPostRolleType EnumType
 * @subpackage Enumerations
 */
class JournalPostRolleType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Journalpost'
     * @return string 'Journalpost'
     */
    const VALUE_JOURNALPOST = 'Journalpost';
    /**
     * Return allowed values
     * @uses self::VALUE_JOURNALPOST
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_JOURNALPOST,
        ];
    }
}
