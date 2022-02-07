<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TilmeldingRequestType StructType
 * @subpackage Structs
 */
class TilmeldingRequestType extends AbstractStructBase
{
    /**
     * The SlutbrugerIdentitet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: oio:SlutbrugerIdentitet
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType
     */
    protected \ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType $SlutbrugerIdentitet;
    /**
     * The MeddelelseIndholdstypeIdentifikator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: oio:MeddelelseIndholdstypeIdentifikator
     * @var int|null
     */
    protected ?int $MeddelelseIndholdstypeIdentifikator = null;
    /**
     * Constructor method for TilmeldingRequestType
     * @uses TilmeldingRequestType::setSlutbrugerIdentitet()
     * @uses TilmeldingRequestType::setMeddelelseIndholdstypeIdentifikator()
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType $slutbrugerIdentitet
     * @param int $meddelelseIndholdstypeIdentifikator
     */
    public function __construct(\ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType $slutbrugerIdentitet, ?int $meddelelseIndholdstypeIdentifikator = null)
    {
        $this
            ->setSlutbrugerIdentitet($slutbrugerIdentitet)
            ->setMeddelelseIndholdstypeIdentifikator($meddelelseIndholdstypeIdentifikator);
    }
    /**
     * Get SlutbrugerIdentitet value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType
     */
    public function getSlutbrugerIdentitet(): \ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType
    {
        return $this->SlutbrugerIdentitet;
    }
    /**
     * Set SlutbrugerIdentitet value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType $slutbrugerIdentitet
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\TilmeldingRequestType
     */
    public function setSlutbrugerIdentitet(\ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType $slutbrugerIdentitet): self
    {
        $this->SlutbrugerIdentitet = $slutbrugerIdentitet;
        
        return $this;
    }
    /**
     * Get MeddelelseIndholdstypeIdentifikator value
     * @return int|null
     */
    public function getMeddelelseIndholdstypeIdentifikator(): ?int
    {
        return $this->MeddelelseIndholdstypeIdentifikator;
    }
    /**
     * Set MeddelelseIndholdstypeIdentifikator value
     * @param int $meddelelseIndholdstypeIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\TilmeldingRequestType
     */
    public function setMeddelelseIndholdstypeIdentifikator(?int $meddelelseIndholdstypeIdentifikator = null): self
    {
        // validation for constraint: int
        if (!is_null($meddelelseIndholdstypeIdentifikator) && !(is_int($meddelelseIndholdstypeIdentifikator) || ctype_digit($meddelelseIndholdstypeIdentifikator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($meddelelseIndholdstypeIdentifikator, true), gettype($meddelelseIndholdstypeIdentifikator)), __LINE__);
        }
        $this->MeddelelseIndholdstypeIdentifikator = $meddelelseIndholdstypeIdentifikator;
        
        return $this;
    }
}
