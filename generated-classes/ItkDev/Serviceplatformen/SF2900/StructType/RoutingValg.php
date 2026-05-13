<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutingValg StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoutingValg extends AbstractStructBase
{
    /**
     * The RoutingKLEEmneHandling
     * Meta information extracted from the WSDL
     * - choice: RoutingKLEEmneHandling | RoutingModtagerAktoer
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\RoutingKLEInfo
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\RoutingKLEInfo $RoutingKLEEmneHandling;
    /**
     * The RoutingModtagerAktoer
     * Meta information extracted from the WSDL
     * - base: string
     * - choice: RoutingKLEEmneHandling | RoutingModtagerAktoer
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * @var string
     */
    protected string $RoutingModtagerAktoer;
    /**
     * Constructor method for RoutingValg
     * @uses RoutingValg::setRoutingKLEEmneHandling()
     * @uses RoutingValg::setRoutingModtagerAktoer()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingKLEInfo $routingKLEEmneHandling
     * @param string $routingModtagerAktoer
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\RoutingKLEInfo $routingKLEEmneHandling = null, string $routingModtagerAktoer = null)
    {
        $this
            ->setRoutingKLEEmneHandling($routingKLEEmneHandling)
            ->setRoutingModtagerAktoer($routingModtagerAktoer);
    }
    /**
     * Get RoutingKLEEmneHandling value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingKLEInfo|null
     */
    public function getRoutingKLEEmneHandling(): ?\ItkDev\Serviceplatformen\SF2900\StructType\RoutingKLEInfo
    {
        return $this->RoutingKLEEmneHandling ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRoutingKLEEmneHandling method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoutingKLEEmneHandling method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRoutingKLEEmneHandlingForChoiceConstraintFromSetRoutingKLEEmneHandling($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RoutingModtagerAktoer',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RoutingKLEEmneHandling can\'t be set as the property %s is already set. Only one property must be set among these properties: RoutingKLEEmneHandling, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RoutingKLEEmneHandling value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingKLEInfo $routingKLEEmneHandling
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingValg
     */
    public function setRoutingKLEEmneHandling(\ItkDev\Serviceplatformen\SF2900\StructType\RoutingKLEInfo $routingKLEEmneHandling = null): self
    {
        // validation for constraint: choice(RoutingKLEEmneHandling, RoutingModtagerAktoer)
        if ('' !== ($routingKLEEmneHandlingChoiceErrorMessage = self::validateRoutingKLEEmneHandlingForChoiceConstraintFromSetRoutingKLEEmneHandling($routingKLEEmneHandling))) {
            throw new InvalidArgumentException($routingKLEEmneHandlingChoiceErrorMessage, __LINE__);
        }
        if (is_null($routingKLEEmneHandling) || (is_array($routingKLEEmneHandling) && empty($routingKLEEmneHandling))) {
            unset($this->RoutingKLEEmneHandling);
        } else {
            $this->RoutingKLEEmneHandling = $routingKLEEmneHandling;
        }
        
        return $this;
    }
    /**
     * Get RoutingModtagerAktoer value
     * @return string|null
     */
    public function getRoutingModtagerAktoer(): ?string
    {
        return $this->RoutingModtagerAktoer ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRoutingModtagerAktoer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoutingModtagerAktoer method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRoutingModtagerAktoerForChoiceConstraintFromSetRoutingModtagerAktoer($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RoutingKLEEmneHandling',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RoutingModtagerAktoer can\'t be set as the property %s is already set. Only one property must be set among these properties: RoutingModtagerAktoer, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RoutingModtagerAktoer value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $routingModtagerAktoer
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingValg
     */
    public function setRoutingModtagerAktoer(string $routingModtagerAktoer = null): self
    {
        // validation for constraint: string
        if (!is_null($routingModtagerAktoer) && !is_string($routingModtagerAktoer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingModtagerAktoer, true), gettype($routingModtagerAktoer)), __LINE__);
        }
        // validation for constraint: choice(RoutingKLEEmneHandling, RoutingModtagerAktoer)
        if ('' !== ($routingModtagerAktoerChoiceErrorMessage = self::validateRoutingModtagerAktoerForChoiceConstraintFromSetRoutingModtagerAktoer($routingModtagerAktoer))) {
            throw new InvalidArgumentException($routingModtagerAktoerChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($routingModtagerAktoer) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', (string) $routingModtagerAktoer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($routingModtagerAktoer, true)), __LINE__);
        }
        if (is_null($routingModtagerAktoer) || (is_array($routingModtagerAktoer) && empty($routingModtagerAktoer))) {
            unset($this->RoutingModtagerAktoer);
        } else {
            $this->RoutingModtagerAktoer = $routingModtagerAktoer;
        }
        
        return $this;
    }
}
