<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for JournalPartObjekttypeType EnumType
 * @subpackage Enumerations
 */
class JournalPartObjekttypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Dokument'
     * @return string 'Dokument'
     */
    const VALUE_DOKUMENT = 'Dokument';
    /**
     * Return allowed values
     * @uses self::VALUE_DOKUMENT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DOKUMENT,
        ];
    }
}
