<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FysiskSletInputType StructType
 * @subpackage Structs
 */
class FysiskSletInputType extends AbstractStructBase
{
    /**
     * The OrganisationUUID
     * Meta information extracted from the WSDL
     * - base: string | xsd:string
     * - minLength: 1
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * @var string|null
     */
    protected ?string $OrganisationUUID = null;
    /**
     * The OrganisationEnhedUUID
     * Meta information extracted from the WSDL
     * - base: string | xsd:string
     * - minLength: 1
     * - pattern: [a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}
     * @var string|null
     */
    protected ?string $OrganisationEnhedUUID = null;
    /**
     * Constructor method for FysiskSletInputType
     * @uses FysiskSletInputType::setOrganisationUUID()
     * @uses FysiskSletInputType::setOrganisationEnhedUUID()
     * @param string $organisationUUID
     * @param string $organisationEnhedUUID
     */
    public function __construct(?string $organisationUUID = null, ?string $organisationEnhedUUID = null)
    {
        $this
            ->setOrganisationUUID($organisationUUID)
            ->setOrganisationEnhedUUID($organisationEnhedUUID);
    }
    /**
     * Get OrganisationUUID value
     * @return string|null
     */
    public function getOrganisationUUID(): ?string
    {
        return $this->OrganisationUUID;
    }
    /**
     * Set OrganisationUUID value
     * @param string $organisationUUID
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\FysiskSletInputType
     */
    public function setOrganisationUUID(?string $organisationUUID = null): self
    {
        // validation for constraint: string
        if (!is_null($organisationUUID) && !is_string($organisationUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisationUUID, true), gettype($organisationUUID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($organisationUUID) && mb_strlen((string) $organisationUUID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $organisationUUID)), __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($organisationUUID) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', $organisationUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($organisationUUID, true)), __LINE__);
        }
        $this->OrganisationUUID = $organisationUUID;
        
        return $this;
    }
    /**
     * Get OrganisationEnhedUUID value
     * @return string|null
     */
    public function getOrganisationEnhedUUID(): ?string
    {
        return $this->OrganisationEnhedUUID;
    }
    /**
     * Set OrganisationEnhedUUID value
     * @param string $organisationEnhedUUID
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\FysiskSletInputType
     */
    public function setOrganisationEnhedUUID(?string $organisationEnhedUUID = null): self
    {
        // validation for constraint: string
        if (!is_null($organisationEnhedUUID) && !is_string($organisationEnhedUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisationEnhedUUID, true), gettype($organisationEnhedUUID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($organisationEnhedUUID) && mb_strlen((string) $organisationEnhedUUID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $organisationEnhedUUID)), __LINE__);
        }
        // validation for constraint: pattern([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})
        if (!is_null($organisationEnhedUUID) && !preg_match('/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', $organisationEnhedUUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/', var_export($organisationEnhedUUID, true)), __LINE__);
        }
        $this->OrganisationEnhedUUID = $organisationEnhedUUID;
        
        return $this;
    }
}
