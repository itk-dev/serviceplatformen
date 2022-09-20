<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintAfsendBrevResponseType StructType
 * @subpackage Structs
 */
class PrintAfsendBrevResponseType extends AbstractStructBase
{
    /**
     * The resultat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $resultat;
    /**
     * Constructor method for PrintAfsendBrevResponseType
     * @uses PrintAfsendBrevResponseType::setResultat()
     * @param bool $resultat
     */
    public function __construct(bool $resultat)
    {
        $this
            ->setResultat($resultat);
    }
    /**
     * Get resultat value
     * @return bool
     */
    public function getResultat(): bool
    {
        return $this->resultat;
    }
    /**
     * Set resultat value
     * @param bool $resultat
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintAfsendBrevResponseType
     */
    public function setResultat(bool $resultat): self
    {
        // validation for constraint: boolean
        if (!is_null($resultat) && !is_bool($resultat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($resultat, true), gettype($resultat)), __LINE__);
        }
        $this->resultat = $resultat;
        
        return $this;
    }
}
