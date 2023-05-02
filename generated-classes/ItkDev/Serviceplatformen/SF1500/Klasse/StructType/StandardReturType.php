<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Klasse\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StandardReturType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:standardretur:ADD:1.0.0
 * @subpackage Structs
 */
class StandardReturType extends AbstractStructBase
{
    /**
     * The StatusKode
     * Meta information extracted from the WSDL
     * - content: statuskode
     * - ref: sd:StatusKode
     * @var int|null
     */
    protected ?int $StatusKode = null;
    /**
     * The FejlbeskedTekst
     * Meta information extracted from the WSDL
     * - content: fejlbesked
     * - minOccurs: 0
     * - ref: sd:FejlbeskedTekst
     * @var string|null
     */
    protected ?string $FejlbeskedTekst = null;
    /**
     * Constructor method for StandardReturType
     * @uses StandardReturType::setStatusKode()
     * @uses StandardReturType::setFejlbeskedTekst()
     * @param int $statusKode
     * @param string $fejlbeskedTekst
     */
    public function __construct(?int $statusKode = null, ?string $fejlbeskedTekst = null)
    {
        $this
            ->setStatusKode($statusKode)
            ->setFejlbeskedTekst($fejlbeskedTekst);
    }
    /**
     * Get StatusKode value
     * @return int|null
     */
    public function getStatusKode(): ?int
    {
        return $this->StatusKode;
    }
    /**
     * Set StatusKode value
     * @param int $statusKode
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType
     */
    public function setStatusKode(?int $statusKode = null): self
    {
        // validation for constraint: int
        if (!is_null($statusKode) && !(is_int($statusKode) || ctype_digit($statusKode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusKode, true), gettype($statusKode)), __LINE__);
        }
        $this->StatusKode = $statusKode;
        
        return $this;
    }
    /**
     * Get FejlbeskedTekst value
     * @return string|null
     */
    public function getFejlbeskedTekst(): ?string
    {
        return $this->FejlbeskedTekst;
    }
    /**
     * Set FejlbeskedTekst value
     * @param string $fejlbeskedTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Klasse\StructType\StandardReturType
     */
    public function setFejlbeskedTekst(?string $fejlbeskedTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($fejlbeskedTekst) && !is_string($fejlbeskedTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fejlbeskedTekst, true), gettype($fejlbeskedTekst)), __LINE__);
        }
        $this->FejlbeskedTekst = $fejlbeskedTekst;
        
        return $this;
    }
}
