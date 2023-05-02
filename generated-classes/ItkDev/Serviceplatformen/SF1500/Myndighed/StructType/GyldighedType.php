<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Myndighed\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GyldighedType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:organisationgyldighed:ADD:2.0.0
 * @subpackage Structs
 */
class GyldighedType extends AbstractStructBase
{
    /**
     * The Virkning
     * Meta information extracted from the WSDL
     * - content: virkning
     * - minOccurs: 0
     * - ref: sd:Virkning
     * @var \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\VirkningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\VirkningType $Virkning = null;
    /**
     * The GyldighedStatusKode
     * Meta information extracted from the WSDL
     * - content: status
     * - ref: orgfaelles:GyldighedStatusKode
     * @var string|null
     */
    protected ?string $GyldighedStatusKode = null;
    /**
     * Constructor method for GyldighedType
     * @uses GyldighedType::setVirkning()
     * @uses GyldighedType::setGyldighedStatusKode()
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\VirkningType $virkning
     * @param string $gyldighedStatusKode
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\VirkningType $virkning = null, ?string $gyldighedStatusKode = null)
    {
        $this
            ->setVirkning($virkning)
            ->setGyldighedStatusKode($gyldighedStatusKode);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\VirkningType|null
     */
    public function getVirkning(): ?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\GyldighedType
     */
    public function setVirkning(?\ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\VirkningType $virkning = null): self
    {
        $this->Virkning = $virkning;
        
        return $this;
    }
    /**
     * Get GyldighedStatusKode value
     * @return string|null
     */
    public function getGyldighedStatusKode(): ?string
    {
        return $this->GyldighedStatusKode;
    }
    /**
     * Set GyldighedStatusKode value
     * @uses \ItkDev\Serviceplatformen\SF1500\Myndighed\EnumType\GyldighedStatusKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1500\Myndighed\EnumType\GyldighedStatusKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $gyldighedStatusKode
     * @return \ItkDev\Serviceplatformen\SF1500\Myndighed\StructType\GyldighedType
     */
    public function setGyldighedStatusKode(?string $gyldighedStatusKode = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1500\Myndighed\EnumType\GyldighedStatusKodeType::valueIsValid($gyldighedStatusKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1500\Myndighed\EnumType\GyldighedStatusKodeType', is_array($gyldighedStatusKode) ? implode(', ', $gyldighedStatusKode) : var_export($gyldighedStatusKode, true), implode(', ', \ItkDev\Serviceplatformen\SF1500\Myndighed\EnumType\GyldighedStatusKodeType::getValidValues())), __LINE__);
        }
        $this->GyldighedStatusKode = $gyldighedStatusKode;
        
        return $this;
    }
}
