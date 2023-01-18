<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PostKategoriKodeType EnumType
 * @subpackage Enumerations
 */
class PostKategoriKodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Prioritaire'
     * @return string 'Prioritaire'
     */
    const VALUE_PRIORITAIRE = 'Prioritaire';
    /**
     * Constant for value 'Economique'
     * @return string 'Economique'
     */
    const VALUE_ECONOMIQUE = 'Economique';
    /**
     * Constant for value 'Bulk'
     * @return string 'Bulk'
     */
    const VALUE_BULK = 'Bulk';
    /**
     * Constant for value 'Rekommanderet'
     * @return string 'Rekommanderet'
     */
    const VALUE_REKOMMANDERET = 'Rekommanderet';
    /**
     * Constant for value 'Rekommanderet med modtagerbevis'
     * @return string 'Rekommanderet med modtagerbevis'
     */
    const VALUE_REKOMMANDERET_MED_MODTAGERBEVIS = 'Rekommanderet med modtagerbevis';
    /**
     * Constant for value 'Forkyndelse'
     * @return string 'Forkyndelse'
     */
    const VALUE_FORKYNDELSE = 'Forkyndelse';
    /**
     * Return allowed values
     * @uses self::VALUE_PRIORITAIRE
     * @uses self::VALUE_ECONOMIQUE
     * @uses self::VALUE_BULK
     * @uses self::VALUE_REKOMMANDERET
     * @uses self::VALUE_REKOMMANDERET_MED_MODTAGERBEVIS
     * @uses self::VALUE_FORKYNDELSE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PRIORITAIRE,
            self::VALUE_ECONOMIQUE,
            self::VALUE_BULK,
            self::VALUE_REKOMMANDERET,
            self::VALUE_REKOMMANDERET_MED_MODTAGERBEVIS,
            self::VALUE_FORKYNDELSE,
        ];
    }
}
