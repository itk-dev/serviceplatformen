<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeddelelseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MeddelelseType extends AbstractStructBase
{
    /**
     * The FormularType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $FormularType;
    /**
     * The Formular
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\FormularType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\FormularType $Formular;
    /**
     * Constructor method for MeddelelseType
     * @uses MeddelelseType::setFormularType()
     * @uses MeddelelseType::setFormular()
     * @param string $formularType
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FormularType $formular
     */
    public function __construct(string $formularType, \ItkDev\Serviceplatformen\SF2900\StructType\FormularType $formular)
    {
        $this
            ->setFormularType($formularType)
            ->setFormular($formular);
    }
    /**
     * Get FormularType value
     * @return string
     */
    public function getFormularType(): string
    {
        return $this->FormularType;
    }
    /**
     * Set FormularType value
     * @param string $formularType
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\MeddelelseType
     */
    public function setFormularType(string $formularType): self
    {
        // validation for constraint: string
        if (!is_null($formularType) && !is_string($formularType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formularType, true), gettype($formularType)), __LINE__);
        }
        $this->FormularType = $formularType;
        
        return $this;
    }
    /**
     * Get Formular value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FormularType
     */
    public function getFormular(): \ItkDev\Serviceplatformen\SF2900\StructType\FormularType
    {
        return $this->Formular;
    }
    /**
     * Set Formular value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\FormularType $formular
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\MeddelelseType
     */
    public function setFormular(\ItkDev\Serviceplatformen\SF2900\StructType\FormularType $formular): self
    {
        $this->Formular = $formular;
        
        return $this;
    }
}
