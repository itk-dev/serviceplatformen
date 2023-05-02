<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\ItSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FiltreretOejebliksbilledeType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:itsystemfiltreretoejebliksbillede:ADD:1.0.0
 * @subpackage Structs
 */
class FiltreretOejebliksbilledeType extends AbstractStructBase
{
    /**
     * The ObjektType
     * Meta information extracted from the WSDL
     * - content: objekt
     * @var \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\SagDokObjektType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\SagDokObjektType $ObjektType = null;
    /**
     * The Registrering
     * Meta information extracted from the WSDL
     * - content: registrering
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RegistreringType[]
     */
    protected ?array $Registrering = null;
    /**
     * Constructor method for FiltreretOejebliksbilledeType
     * @uses FiltreretOejebliksbilledeType::setObjektType()
     * @uses FiltreretOejebliksbilledeType::setRegistrering()
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\SagDokObjektType $objektType
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RegistreringType[] $registrering
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\SagDokObjektType $objektType = null, ?array $registrering = null)
    {
        $this
            ->setObjektType($objektType)
            ->setRegistrering($registrering);
    }
    /**
     * Get ObjektType value
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\SagDokObjektType|null
     */
    public function getObjektType(): ?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\SagDokObjektType
    {
        return $this->ObjektType;
    }
    /**
     * Set ObjektType value
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\SagDokObjektType $objektType
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\FiltreretOejebliksbilledeType
     */
    public function setObjektType(?\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\SagDokObjektType $objektType = null): self
    {
        $this->ObjektType = $objektType;
        
        return $this;
    }
    /**
     * Get Registrering value
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RegistreringType[]
     */
    public function getRegistrering(): ?array
    {
        return $this->Registrering;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRegistrering method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistrering method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistreringForArrayConstraintFromSetRegistrering(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $filtreretOejebliksbilledeTypeRegistreringItem) {
            // validation for constraint: itemType
            if (!$filtreretOejebliksbilledeTypeRegistreringItem instanceof \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RegistreringType) {
                $invalidValues[] = is_object($filtreretOejebliksbilledeTypeRegistreringItem) ? get_class($filtreretOejebliksbilledeTypeRegistreringItem) : sprintf('%s(%s)', gettype($filtreretOejebliksbilledeTypeRegistreringItem), var_export($filtreretOejebliksbilledeTypeRegistreringItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Registrering property can only contain items of type \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RegistreringType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Registrering value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RegistreringType[] $registrering
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\FiltreretOejebliksbilledeType
     */
    public function setRegistrering(?array $registrering = null): self
    {
        // validation for constraint: array
        if ('' !== ($registreringArrayErrorMessage = self::validateRegistreringForArrayConstraintFromSetRegistrering($registrering))) {
            throw new InvalidArgumentException($registreringArrayErrorMessage, __LINE__);
        }
        $this->Registrering = $registrering;
        
        return $this;
    }
    /**
     * Add item to Registrering value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RegistreringType $item
     * @return \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\FiltreretOejebliksbilledeType
     */
    public function addToRegistrering(\ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RegistreringType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RegistreringType) {
            throw new InvalidArgumentException(sprintf('The Registrering property can only contain items of type \ItkDev\Serviceplatformen\SF1500\ItSystem\StructType\RegistreringType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Registrering[] = $item;
        
        return $this;
    }
}
