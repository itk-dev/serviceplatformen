<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintParametreType StructType
 * @subpackage Structs
 */
class PrintParametreType extends AbstractStructBase
{
    /**
     * The SimplexDuplexKode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:SimplexDuplexKode
     * @var string|null
     */
    protected ?string $SimplexDuplexKode = null;
    /**
     * The FarveSHKode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:FarveSHKode
     * @var string|null
     */
    protected ?string $FarveSHKode = null;
    /**
     * The KuvertTypeKode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: fjernprint:KuvertTypeKode
     * @var string|null
     */
    protected ?string $KuvertTypeKode = null;
    /**
     * Constructor method for PrintParametreType
     * @uses PrintParametreType::setSimplexDuplexKode()
     * @uses PrintParametreType::setFarveSHKode()
     * @uses PrintParametreType::setKuvertTypeKode()
     * @param string $simplexDuplexKode
     * @param string $farveSHKode
     * @param string $kuvertTypeKode
     */
    public function __construct(?string $simplexDuplexKode = null, ?string $farveSHKode = null, ?string $kuvertTypeKode = null)
    {
        $this
            ->setSimplexDuplexKode($simplexDuplexKode)
            ->setFarveSHKode($farveSHKode)
            ->setKuvertTypeKode($kuvertTypeKode);
    }
    /**
     * Get SimplexDuplexKode value
     * @return string|null
     */
    public function getSimplexDuplexKode(): ?string
    {
        return $this->SimplexDuplexKode;
    }
    /**
     * Set SimplexDuplexKode value
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\SimplexDuplexKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\SimplexDuplexKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $simplexDuplexKode
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintParametreType
     */
    public function setSimplexDuplexKode(?string $simplexDuplexKode = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1600\EnumType\SimplexDuplexKodeType::valueIsValid($simplexDuplexKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1600\EnumType\SimplexDuplexKodeType', is_array($simplexDuplexKode) ? implode(', ', $simplexDuplexKode) : var_export($simplexDuplexKode, true), implode(', ', \ItkDev\Serviceplatformen\SF1600\EnumType\SimplexDuplexKodeType::getValidValues())), __LINE__);
        }
        $this->SimplexDuplexKode = $simplexDuplexKode;
        
        return $this;
    }
    /**
     * Get FarveSHKode value
     * @return string|null
     */
    public function getFarveSHKode(): ?string
    {
        return $this->FarveSHKode;
    }
    /**
     * Set FarveSHKode value
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\FarveSHKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\FarveSHKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $farveSHKode
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintParametreType
     */
    public function setFarveSHKode(?string $farveSHKode = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1600\EnumType\FarveSHKodeType::valueIsValid($farveSHKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1600\EnumType\FarveSHKodeType', is_array($farveSHKode) ? implode(', ', $farveSHKode) : var_export($farveSHKode, true), implode(', ', \ItkDev\Serviceplatformen\SF1600\EnumType\FarveSHKodeType::getValidValues())), __LINE__);
        }
        $this->FarveSHKode = $farveSHKode;
        
        return $this;
    }
    /**
     * Get KuvertTypeKode value
     * @return string|null
     */
    public function getKuvertTypeKode(): ?string
    {
        return $this->KuvertTypeKode;
    }
    /**
     * Set KuvertTypeKode value
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\KuvertTypeKodeType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF1600\EnumType\KuvertTypeKodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $kuvertTypeKode
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\PrintParametreType
     */
    public function setKuvertTypeKode(?string $kuvertTypeKode = null): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF1600\EnumType\KuvertTypeKodeType::valueIsValid($kuvertTypeKode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF1600\EnumType\KuvertTypeKodeType', is_array($kuvertTypeKode) ? implode(', ', $kuvertTypeKode) : var_export($kuvertTypeKode, true), implode(', ', \ItkDev\Serviceplatformen\SF1600\EnumType\KuvertTypeKodeType::getValidValues())), __LINE__);
        }
        $this->KuvertTypeKode = $kuvertTypeKode;
        
        return $this;
    }
}
