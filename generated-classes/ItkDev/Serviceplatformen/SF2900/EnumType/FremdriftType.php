<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FremdriftType EnumType
 * @subpackage Enumerations
 */
class FremdriftType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Modtaget'
     * @return string 'Modtaget'
     */
    const VALUE_MODTAGET = 'Modtaget';
    /**
     * Constant for value 'Fordelt'
     * @return string 'Fordelt'
     */
    const VALUE_FORDELT = 'Fordelt';
    /**
     * Constant for value 'UnderUdarbejdelse'
     * @return string 'UnderUdarbejdelse'
     */
    const VALUE_UNDER_UDARBEJDELSE = 'UnderUdarbejdelse';
    /**
     * Constant for value 'UnderReview'
     * @return string 'UnderReview'
     */
    const VALUE_UNDER_REVIEW = 'UnderReview';
    /**
     * Constant for value 'Endeligt'
     * @return string 'Endeligt'
     */
    const VALUE_ENDELIGT = 'Endeligt';
    /**
     * Constant for value 'Afleveret'
     * @return string 'Afleveret'
     */
    const VALUE_AFLEVERET = 'Afleveret';
    /**
     * Return allowed values
     * @uses self::VALUE_MODTAGET
     * @uses self::VALUE_FORDELT
     * @uses self::VALUE_UNDER_UDARBEJDELSE
     * @uses self::VALUE_UNDER_REVIEW
     * @uses self::VALUE_ENDELIGT
     * @uses self::VALUE_AFLEVERET
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MODTAGET,
            self::VALUE_FORDELT,
            self::VALUE_UNDER_UDARBEJDELSE,
            self::VALUE_UNDER_REVIEW,
            self::VALUE_ENDELIGT,
            self::VALUE_AFLEVERET,
        ];
    }
}
