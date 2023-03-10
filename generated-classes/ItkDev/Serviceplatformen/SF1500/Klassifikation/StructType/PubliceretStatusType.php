<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PubliceretStatusType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:klassifikationpubliceret:ADD:2.0.0
 * @subpackage Structs
 */
class PubliceretStatusType extends AbstractStructBase
{
    /**
     * The Virkning
     * Meta information extracted from the WSDL
     * - content: virkning
     * - minOccurs: 0
     * - ref: sd:Virkning
     * @var \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType $Virkning = null;
    /**
     * The ErPubliceretIndikator
     * Meta information extracted from the WSDL
     * - content: status
     * - minOccurs: 0
     * - ref: sd:ErPubliceretIndikator
     * @var bool|null
     */
    protected ?bool $ErPubliceretIndikator = null;
    /**
     * Constructor method for PubliceretStatusType
     * @uses PubliceretStatusType::setVirkning()
     * @uses PubliceretStatusType::setErPubliceretIndikator()
     * @param \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType $virkning
     * @param bool $erPubliceretIndikator
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType $virkning = null, ?bool $erPubliceretIndikator = null)
    {
        $this
            ->setVirkning($virkning)
            ->setErPubliceretIndikator($erPubliceretIndikator);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\PubliceretStatusType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\VirkningType $virkning = null): self
    {
        $this->Virkning = $virkning;
        
        return $this;
    }
    /**
     * Get ErPubliceretIndikator value
     * @return bool|null
     */
    public function getErPubliceretIndikator(): ?bool
    {
        return $this->ErPubliceretIndikator;
    }
    /**
     * Set ErPubliceretIndikator value
     * @param bool $erPubliceretIndikator
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\PubliceretStatusType
     */
    public function setErPubliceretIndikator(?bool $erPubliceretIndikator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($erPubliceretIndikator) && !is_bool($erPubliceretIndikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($erPubliceretIndikator, true), gettype($erPubliceretIndikator)), __LINE__);
        }
        $this->ErPubliceretIndikator = $erPubliceretIndikator;
        
        return $this;
    }
}
