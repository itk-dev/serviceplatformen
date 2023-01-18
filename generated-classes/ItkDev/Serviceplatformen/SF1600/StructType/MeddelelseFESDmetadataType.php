<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeddelelseFESDmetadataType StructType
 * @subpackage Structs
 */
class MeddelelseFESDmetadataType extends AbstractStructBase
{
    /**
     * The FESDdokumentIdentifikator
     * Meta information extracted from the WSDL
     * - base: xsd:string | string
     * - minOccurs: 0
     * - pattern: [a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12} | [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}
     * - ref: dkal:FESDdokumentIdentifikator
     * @var string|null
     */
    protected ?string $FESDdokumentIdentifikator = null;
    /**
     * The FESDaktoerIdentifikator
     * Meta information extracted from the WSDL
     * - base: xsd:string | string
     * - minOccurs: 0
     * - pattern: [a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12} | [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}
     * - ref: dkal:FESDaktoerIdentifikator
     * @var string|null
     */
    protected ?string $FESDaktoerIdentifikator = null;
    /**
     * The FESDsagIdentifikator
     * Meta information extracted from the WSDL
     * - base: xsd:string | string
     * - minOccurs: 0
     * - pattern: [a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12} | [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}
     * - ref: dkal:FESDsagIdentifikator
     * @var string|null
     */
    protected ?string $FESDsagIdentifikator = null;
    /**
     * The FESDsagsklassifikationIdentifikator
     * Meta information extracted from the WSDL
     * - base: xsd:string | string
     * - minOccurs: 0
     * - pattern: [a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12} | [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}
     * - ref: dkal:FESDsagsklassifikationIdentifikator
     * @var string|null
     */
    protected ?string $FESDsagsklassifikationIdentifikator = null;
    /**
     * Constructor method for MeddelelseFESDmetadataType
     * @uses MeddelelseFESDmetadataType::setFESDdokumentIdentifikator()
     * @uses MeddelelseFESDmetadataType::setFESDaktoerIdentifikator()
     * @uses MeddelelseFESDmetadataType::setFESDsagIdentifikator()
     * @uses MeddelelseFESDmetadataType::setFESDsagsklassifikationIdentifikator()
     * @param string $fESDdokumentIdentifikator
     * @param string $fESDaktoerIdentifikator
     * @param string $fESDsagIdentifikator
     * @param string $fESDsagsklassifikationIdentifikator
     */
    public function __construct(?string $fESDdokumentIdentifikator = null, ?string $fESDaktoerIdentifikator = null, ?string $fESDsagIdentifikator = null, ?string $fESDsagsklassifikationIdentifikator = null)
    {
        $this
            ->setFESDdokumentIdentifikator($fESDdokumentIdentifikator)
            ->setFESDaktoerIdentifikator($fESDaktoerIdentifikator)
            ->setFESDsagIdentifikator($fESDsagIdentifikator)
            ->setFESDsagsklassifikationIdentifikator($fESDsagsklassifikationIdentifikator);
    }
    /**
     * Get FESDdokumentIdentifikator value
     * @return string|null
     */
    public function getFESDdokumentIdentifikator(): ?string
    {
        return $this->FESDdokumentIdentifikator;
    }
    /**
     * Set FESDdokumentIdentifikator value
     * @param string $fESDdokumentIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\MeddelelseFESDmetadataType
     */
    public function setFESDdokumentIdentifikator(?string $fESDdokumentIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($fESDdokumentIdentifikator) && !is_string($fESDdokumentIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fESDdokumentIdentifikator, true), gettype($fESDdokumentIdentifikator)), __LINE__);
        }
        // validation for constraint: pattern([a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}, [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})
        if (!is_null($fESDdokumentIdentifikator) && !preg_match('/[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', $fESDdokumentIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', var_export($fESDdokumentIdentifikator, true)), __LINE__);
        }
        $this->FESDdokumentIdentifikator = $fESDdokumentIdentifikator;
        
        return $this;
    }
    /**
     * Get FESDaktoerIdentifikator value
     * @return string|null
     */
    public function getFESDaktoerIdentifikator(): ?string
    {
        return $this->FESDaktoerIdentifikator;
    }
    /**
     * Set FESDaktoerIdentifikator value
     * @param string $fESDaktoerIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\MeddelelseFESDmetadataType
     */
    public function setFESDaktoerIdentifikator(?string $fESDaktoerIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($fESDaktoerIdentifikator) && !is_string($fESDaktoerIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fESDaktoerIdentifikator, true), gettype($fESDaktoerIdentifikator)), __LINE__);
        }
        // validation for constraint: pattern([a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}, [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})
        if (!is_null($fESDaktoerIdentifikator) && !preg_match('/[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', $fESDaktoerIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', var_export($fESDaktoerIdentifikator, true)), __LINE__);
        }
        $this->FESDaktoerIdentifikator = $fESDaktoerIdentifikator;
        
        return $this;
    }
    /**
     * Get FESDsagIdentifikator value
     * @return string|null
     */
    public function getFESDsagIdentifikator(): ?string
    {
        return $this->FESDsagIdentifikator;
    }
    /**
     * Set FESDsagIdentifikator value
     * @param string $fESDsagIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\MeddelelseFESDmetadataType
     */
    public function setFESDsagIdentifikator(?string $fESDsagIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($fESDsagIdentifikator) && !is_string($fESDsagIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fESDsagIdentifikator, true), gettype($fESDsagIdentifikator)), __LINE__);
        }
        // validation for constraint: pattern([a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}, [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})
        if (!is_null($fESDsagIdentifikator) && !preg_match('/[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', $fESDsagIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', var_export($fESDsagIdentifikator, true)), __LINE__);
        }
        $this->FESDsagIdentifikator = $fESDsagIdentifikator;
        
        return $this;
    }
    /**
     * Get FESDsagsklassifikationIdentifikator value
     * @return string|null
     */
    public function getFESDsagsklassifikationIdentifikator(): ?string
    {
        return $this->FESDsagsklassifikationIdentifikator;
    }
    /**
     * Set FESDsagsklassifikationIdentifikator value
     * @param string $fESDsagsklassifikationIdentifikator
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\MeddelelseFESDmetadataType
     */
    public function setFESDsagsklassifikationIdentifikator(?string $fESDsagsklassifikationIdentifikator = null): self
    {
        // validation for constraint: string
        if (!is_null($fESDsagsklassifikationIdentifikator) && !is_string($fESDsagsklassifikationIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fESDsagsklassifikationIdentifikator, true), gettype($fESDsagsklassifikationIdentifikator)), __LINE__);
        }
        // validation for constraint: pattern([a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}, [0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})
        if (!is_null($fESDsagsklassifikationIdentifikator) && !preg_match('/[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', $fESDsagsklassifikationIdentifikator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/', var_export($fESDsagsklassifikationIdentifikator, true)), __LINE__);
        }
        $this->FESDsagsklassifikationIdentifikator = $fESDsagsklassifikationIdentifikator;
        
        return $this;
    }
}
