<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistributionContextType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DistributionContextType extends AbstractStructBase
{
    /**
     * The AnvenderTransaktionsID
     * Meta information extracted from the WSDL
     * - base: string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * @var string
     */
    protected string $AnvenderTransaktionsID;
    /**
     * The AfsendendeMyndighed
     * Meta information extracted from the WSDL
     * - base: xsd:string | string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]
     * @var string
     */
    protected string $AfsendendeMyndighed;
    /**
     * The RoutingMyndighed
     * Meta information extracted from the WSDL
     * - base: xsd:string | string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]
     * @var string
     */
    protected string $RoutingMyndighed;
    /**
     * The RoutingValg
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\RoutingValg
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\RoutingValg $RoutingValg;
    /**
     * The DistributionTransktionsID
     * Meta information extracted from the WSDL
     * - base: string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * @var string|null
     */
    protected ?string $DistributionTransktionsID = null;
    /**
     * The DigitalPostMeddelelsesID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DigitalPostMeddelelsesID = null;
    /**
     * The DokumentFilNavn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DokumentFilNavn = null;
    /**
     * Constructor method for DistributionContextType
     * @uses DistributionContextType::setAnvenderTransaktionsID()
     * @uses DistributionContextType::setAfsendendeMyndighed()
     * @uses DistributionContextType::setRoutingMyndighed()
     * @uses DistributionContextType::setRoutingValg()
     * @uses DistributionContextType::setDistributionTransktionsID()
     * @uses DistributionContextType::setDigitalPostMeddelelsesID()
     * @uses DistributionContextType::setDokumentFilNavn()
     * @param string $anvenderTransaktionsID
     * @param string $afsendendeMyndighed
     * @param string $routingMyndighed
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingValg $routingValg
     * @param string $distributionTransktionsID
     * @param string $digitalPostMeddelelsesID
     * @param string $dokumentFilNavn
     */
    public function __construct(string $anvenderTransaktionsID, string $afsendendeMyndighed, string $routingMyndighed, \ItkDev\Serviceplatformen\SF2900\StructType\RoutingValg $routingValg, ?string $distributionTransktionsID = null, ?string $digitalPostMeddelelsesID = null, ?string $dokumentFilNavn = null)
    {
        $this
            ->setAnvenderTransaktionsID($anvenderTransaktionsID)
            ->setAfsendendeMyndighed($afsendendeMyndighed)
            ->setRoutingMyndighed($routingMyndighed)
            ->setRoutingValg($routingValg)
            ->setDistributionTransktionsID($distributionTransktionsID)
            ->setDigitalPostMeddelelsesID($digitalPostMeddelelsesID)
            ->setDokumentFilNavn($dokumentFilNavn);
    }
    /**
     * Get AnvenderTransaktionsID value
     * @return string
     */
    public function getAnvenderTransaktionsID(): string
    {
        return $this->AnvenderTransaktionsID;
    }
    /**
     * Set AnvenderTransaktionsID value
     * @param string $anvenderTransaktionsID
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType
     */
    public function setAnvenderTransaktionsID(string $anvenderTransaktionsID): self
    {
        // validation for constraint: string
        if (!is_null($anvenderTransaktionsID) && !is_string($anvenderTransaktionsID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($anvenderTransaktionsID, true), gettype($anvenderTransaktionsID)), __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($anvenderTransaktionsID) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', (string) $anvenderTransaktionsID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($anvenderTransaktionsID, true)), __LINE__);
        }
        $this->AnvenderTransaktionsID = $anvenderTransaktionsID;
        
        return $this;
    }
    /**
     * Get AfsendendeMyndighed value
     * @return string
     */
    public function getAfsendendeMyndighed(): string
    {
        return $this->AfsendendeMyndighed;
    }
    /**
     * Set AfsendendeMyndighed value
     * @param string $afsendendeMyndighed
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType
     */
    public function setAfsendendeMyndighed(string $afsendendeMyndighed): self
    {
        // validation for constraint: string
        if (!is_null($afsendendeMyndighed) && !is_string($afsendendeMyndighed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($afsendendeMyndighed, true), gettype($afsendendeMyndighed)), __LINE__);
        }
        // validation for constraint: pattern([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])
        if (!is_null($afsendendeMyndighed) && !preg_match('/[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', (string) $afsendendeMyndighed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', var_export($afsendendeMyndighed, true)), __LINE__);
        }
        $this->AfsendendeMyndighed = $afsendendeMyndighed;
        
        return $this;
    }
    /**
     * Get RoutingMyndighed value
     * @return string
     */
    public function getRoutingMyndighed(): string
    {
        return $this->RoutingMyndighed;
    }
    /**
     * Set RoutingMyndighed value
     * @param string $routingMyndighed
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType
     */
    public function setRoutingMyndighed(string $routingMyndighed): self
    {
        // validation for constraint: string
        if (!is_null($routingMyndighed) && !is_string($routingMyndighed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingMyndighed, true), gettype($routingMyndighed)), __LINE__);
        }
        // validation for constraint: pattern([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])
        if (!is_null($routingMyndighed) && !preg_match('/[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', (string) $routingMyndighed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', var_export($routingMyndighed, true)), __LINE__);
        }
        $this->RoutingMyndighed = $routingMyndighed;
        
        return $this;
    }
    /**
     * Get RoutingValg value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingValg
     */
    public function getRoutingValg(): \ItkDev\Serviceplatformen\SF2900\StructType\RoutingValg
    {
        return $this->RoutingValg;
    }
    /**
     * Set RoutingValg value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingValg $routingValg
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType
     */
    public function setRoutingValg(\ItkDev\Serviceplatformen\SF2900\StructType\RoutingValg $routingValg): self
    {
        $this->RoutingValg = $routingValg;
        
        return $this;
    }
    /**
     * Get DistributionTransktionsID value
     * @return string|null
     */
    public function getDistributionTransktionsID(): ?string
    {
        return $this->DistributionTransktionsID;
    }
    /**
     * Set DistributionTransktionsID value
     * @param string $distributionTransktionsID
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType
     */
    public function setDistributionTransktionsID(?string $distributionTransktionsID = null): self
    {
        // validation for constraint: string
        if (!is_null($distributionTransktionsID) && !is_string($distributionTransktionsID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($distributionTransktionsID, true), gettype($distributionTransktionsID)), __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($distributionTransktionsID) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', (string) $distributionTransktionsID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($distributionTransktionsID, true)), __LINE__);
        }
        $this->DistributionTransktionsID = $distributionTransktionsID;
        
        return $this;
    }
    /**
     * Get DigitalPostMeddelelsesID value
     * @return string|null
     */
    public function getDigitalPostMeddelelsesID(): ?string
    {
        return $this->DigitalPostMeddelelsesID;
    }
    /**
     * Set DigitalPostMeddelelsesID value
     * @param string $digitalPostMeddelelsesID
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType
     */
    public function setDigitalPostMeddelelsesID(?string $digitalPostMeddelelsesID = null): self
    {
        // validation for constraint: string
        if (!is_null($digitalPostMeddelelsesID) && !is_string($digitalPostMeddelelsesID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($digitalPostMeddelelsesID, true), gettype($digitalPostMeddelelsesID)), __LINE__);
        }
        $this->DigitalPostMeddelelsesID = $digitalPostMeddelelsesID;
        
        return $this;
    }
    /**
     * Get DokumentFilNavn value
     * @return string|null
     */
    public function getDokumentFilNavn(): ?string
    {
        return $this->DokumentFilNavn;
    }
    /**
     * Set DokumentFilNavn value
     * @param string $dokumentFilNavn
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionContextType
     */
    public function setDokumentFilNavn(?string $dokumentFilNavn = null): self
    {
        // validation for constraint: string
        if (!is_null($dokumentFilNavn) && !is_string($dokumentFilNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dokumentFilNavn, true), gettype($dokumentFilNavn)), __LINE__);
        }
        $this->DokumentFilNavn = $dokumentFilNavn;
        
        return $this;
    }
}
