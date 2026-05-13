<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormularType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FormularType extends AbstractStructBase
{
    /**
     * The TitelTekst
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $TitelTekst;
    /**
     * The FormatNavn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $FormatNavn;
    /**
     * The FormularIndhold
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $FormularIndhold;
    /**
     * The FormularXML
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\FormularXMLType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\FormularXMLType $FormularXML;
    /**
     * Constructor method for FormularType
     * @uses FormularType::setTitelTekst()
     * @uses FormularType::setFormatNavn()
     * @uses FormularType::setFormularIndhold()
     * @uses FormularType::setFormularXML()
     * @param string $titelTekst
     * @param string $formatNavn
     * @param string $formularIndhold
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FormularXMLType $formularXML
     */
    public function __construct(string $titelTekst, string $formatNavn, string $formularIndhold, \ItkDev\Serviceplatformen\SF2900\StructType\FormularXMLType $formularXML)
    {
        $this
            ->setTitelTekst($titelTekst)
            ->setFormatNavn($formatNavn)
            ->setFormularIndhold($formularIndhold)
            ->setFormularXML($formularXML);
    }
    /**
     * Get TitelTekst value
     * @return string
     */
    public function getTitelTekst(): string
    {
        return $this->TitelTekst;
    }
    /**
     * Set TitelTekst value
     * @param string $titelTekst
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FormularType
     */
    public function setTitelTekst(string $titelTekst): self
    {
        // validation for constraint: string
        if (!is_null($titelTekst) && !is_string($titelTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titelTekst, true), gettype($titelTekst)), __LINE__);
        }
        $this->TitelTekst = $titelTekst;
        
        return $this;
    }
    /**
     * Get FormatNavn value
     * @return string
     */
    public function getFormatNavn(): string
    {
        return $this->FormatNavn;
    }
    /**
     * Set FormatNavn value
     * @param string $formatNavn
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FormularType
     */
    public function setFormatNavn(string $formatNavn): self
    {
        // validation for constraint: string
        if (!is_null($formatNavn) && !is_string($formatNavn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatNavn, true), gettype($formatNavn)), __LINE__);
        }
        $this->FormatNavn = $formatNavn;
        
        return $this;
    }
    /**
     * Get FormularIndhold value
     * @return string
     */
    public function getFormularIndhold(): string
    {
        return $this->FormularIndhold;
    }
    /**
     * Set FormularIndhold value
     * @param string $formularIndhold
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FormularType
     */
    public function setFormularIndhold(string $formularIndhold): self
    {
        // validation for constraint: string
        if (!is_null($formularIndhold) && !is_string($formularIndhold)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formularIndhold, true), gettype($formularIndhold)), __LINE__);
        }
        $this->FormularIndhold = $formularIndhold;
        
        return $this;
    }
    /**
     * Get FormularXML value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FormularXMLType
     */
    public function getFormularXML(): \ItkDev\Serviceplatformen\SF2900\StructType\FormularXMLType
    {
        return $this->FormularXML;
    }
    /**
     * Set FormularXML value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FormularXMLType $formularXML
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FormularType
     */
    public function setFormularXML(\ItkDev\Serviceplatformen\SF2900\StructType\FormularXMLType $formularXML): self
    {
        $this->FormularXML = $formularXML;
        
        return $this;
    }
}
