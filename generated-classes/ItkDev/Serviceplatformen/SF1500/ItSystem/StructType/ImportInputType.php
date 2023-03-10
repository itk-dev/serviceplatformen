<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\ItSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:itsystemimportinput:ADD:2.0.0 | urn:oio:sagdok:importinput:ADD:1.0.0
 * @subpackage Structs
 */
class ImportInputType extends AbstractStructBase
{
    /**
     * The NoteTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: note
     * - definition: urn:oio:sagdok:note:BDD:1.0.0
     * - maxLength: 1024
     * - minOccurs: 0
     * - ref: sd:NoteTekst
     * @var string|null
     */
    protected ?string $NoteTekst = null;
    /**
     * The ItSystem
     * Meta information extracted from the WSDL
     * - content: itsystem
     * - ref: itsystem:ItSystem
     * @var \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ItSystemType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ItSystemType $ItSystem = null;
    /**
     * Constructor method for ImportInputType
     * @uses ImportInputType::setNoteTekst()
     * @uses ImportInputType::setItSystem()
     * @param string $noteTekst
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ItSystemType $itSystem
     */
    public function __construct(?string $noteTekst = null, ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ItSystemType $itSystem = null)
    {
        $this
            ->setNoteTekst($noteTekst)
            ->setItSystem($itSystem);
    }
    /**
     * Get NoteTekst value
     * @return string|null
     */
    public function getNoteTekst(): ?string
    {
        return $this->NoteTekst;
    }
    /**
     * Set NoteTekst value
     * @param string $noteTekst
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ImportInputType
     */
    public function setNoteTekst(?string $noteTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($noteTekst) && !is_string($noteTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noteTekst, true), gettype($noteTekst)), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (!is_null($noteTekst) && mb_strlen((string) $noteTekst) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $noteTekst)), __LINE__);
        }
        $this->NoteTekst = $noteTekst;
        
        return $this;
    }
    /**
     * Get ItSystem value
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ItSystemType|null
     */
    public function getItSystem(): ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ItSystemType
    {
        return $this->ItSystem;
    }
    /**
     * Set ItSystem value
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ItSystemType $itSystem
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ImportInputType
     */
    public function setItSystem(?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\ItSystemType $itSystem = null): self
    {
        $this->ItSystem = $itSystem;
        
        return $this;
    }
}
