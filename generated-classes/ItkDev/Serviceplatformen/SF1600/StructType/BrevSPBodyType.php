<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrevSPBodyType StructType
 * @subpackage Structs
 */
class BrevSPBodyType extends AbstractStructBase
{
    /**
     * The Kanalvalg
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Kanalvalg;
    /**
     * The Prioritet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Prioritet;
    /**
     * The ForsendelseI
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseIType
     */
    protected \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseIType $ForsendelseI;
    /**
     * Constructor method for BrevSPBodyType
     * @uses BrevSPBodyType::setKanalvalg()
     * @uses BrevSPBodyType::setPrioritet()
     * @uses BrevSPBodyType::setForsendelseI()
     * @param string $kanalvalg
     * @param string $prioritet
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseIType $forsendelseI
     */
    public function __construct(string $kanalvalg, string $prioritet, \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseIType $forsendelseI)
    {
        $this
            ->setKanalvalg($kanalvalg)
            ->setPrioritet($prioritet)
            ->setForsendelseI($forsendelseI);
    }
    /**
     * Get Kanalvalg value
     * @return string
     */
    public function getKanalvalg(): string
    {
        return $this->Kanalvalg;
    }
    /**
     * Set Kanalvalg value
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\KanalvalgType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\KanalvalgType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $kanalvalg
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BrevSPBodyType
     */
    public function setKanalvalg(string $kanalvalg): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1600\EnumType\KanalvalgType::valueIsValid($kanalvalg)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1600\EnumType\KanalvalgType', is_array($kanalvalg) ? implode(', ', $kanalvalg) : var_export($kanalvalg, true), implode(', ', \ItkDev\Serviceplatformen\SF1600\EnumType\KanalvalgType::getValidValues())), __LINE__);
        }
        $this->Kanalvalg = $kanalvalg;
        
        return $this;
    }
    /**
     * Get Prioritet value
     * @return string
     */
    public function getPrioritet(): string
    {
        return $this->Prioritet;
    }
    /**
     * Set Prioritet value
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\PrioritetType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\PrioritetType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $prioritet
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BrevSPBodyType
     */
    public function setPrioritet(string $prioritet): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1600\EnumType\PrioritetType::valueIsValid($prioritet)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1600\EnumType\PrioritetType', is_array($prioritet) ? implode(', ', $prioritet) : var_export($prioritet, true), implode(', ', \ItkDev\Serviceplatformen\SF1600\EnumType\PrioritetType::getValidValues())), __LINE__);
        }
        $this->Prioritet = $prioritet;
        
        return $this;
    }
    /**
     * Get ForsendelseI value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseIType
     */
    public function getForsendelseI(): \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseIType
    {
        return $this->ForsendelseI;
    }
    /**
     * Set ForsendelseI value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseIType $forsendelseI
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\BrevSPBodyType
     */
    public function setForsendelseI(\ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseIType $forsendelseI): self
    {
        $this->ForsendelseI = $forsendelseI;
        
        return $this;
    }
}
