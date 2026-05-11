<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DokumentPartType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DokumentPartType extends AbstractStructBase
{
    /**
     * The Virkning
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $Virkning;
    /**
     * The Rolle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Rolle;
    /**
     * The Indeks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Indeks;
    /**
     * The Part
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\PartType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\PartType $Part;
    /**
     * Constructor method for DokumentPartType
     * @uses DokumentPartType::setVirkning()
     * @uses DokumentPartType::setRolle()
     * @uses DokumentPartType::setIndeks()
     * @uses DokumentPartType::setPart()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning
     * @param string $rolle
     * @param int $indeks
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\PartType $part
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning, string $rolle, int $indeks, \ItkDev\Serviceplatformen\SF2900\StructType\PartType $part)
    {
        $this
            ->setVirkning($virkning)
            ->setRolle($rolle)
            ->setIndeks($indeks)
            ->setPart($part);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    public function getVirkning(): \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType
     */
    public function setVirkning(\ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning): self
    {
        $this->Virkning = $virkning;
        
        return $this;
    }
    /**
     * Get Rolle value
     * @return string
     */
    public function getRolle(): string
    {
        return $this->Rolle;
    }
    /**
     * Set Rolle value
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\DokumentPartRolleType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\DokumentPartRolleType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rolle
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType
     */
    public function setRolle(string $rolle): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\DokumentPartRolleType::valueIsValid($rolle)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\DokumentPartRolleType', is_array($rolle) ? implode(', ', $rolle) : var_export($rolle, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\DokumentPartRolleType::getValidValues())), __LINE__);
        }
        $this->Rolle = $rolle;
        
        return $this;
    }
    /**
     * Get Indeks value
     * @return int
     */
    public function getIndeks(): int
    {
        return $this->Indeks;
    }
    /**
     * Set Indeks value
     * @param int $indeks
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType
     */
    public function setIndeks(int $indeks): self
    {
        // validation for constraint: int
        if (!is_null($indeks) && !(is_int($indeks) || ctype_digit($indeks))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($indeks, true), gettype($indeks)), __LINE__);
        }
        $this->Indeks = $indeks;
        
        return $this;
    }
    /**
     * Get Part value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\PartType
     */
    public function getPart(): \ItkDev\Serviceplatformen\SF2900\StructType\PartType
    {
        return $this->Part;
    }
    /**
     * Set Part value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\PartType $part
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DokumentPartType
     */
    public function setPart(\ItkDev\Serviceplatformen\SF2900\StructType\PartType $part): self
    {
        $this->Part = $part;
        
        return $this;
    }
}
