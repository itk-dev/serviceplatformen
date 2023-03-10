<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImporterOrganisationSystemInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sts:organisationssystemimportinputtype:ADD:2.0.0
 * @subpackage Structs
 */
class ImporterOrganisationSystemInputType extends AbstractStructBase
{
    /**
     * The Organisation
     * Meta information extracted from the WSDL
     * - content: urn:oio:sagdok:organisation:ADD:2.0.0
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: organisation:Organisation
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType
     */
    protected \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType $Organisation;
    /**
     * The OrganisationEnhederInput
     * Meta information extracted from the WSDL
     * - content: organisationenheder
     * - ref: sts:OrganisationEnhederInput
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederInputType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederInputType $OrganisationEnhederInput = null;
    /**
     * Constructor method for ImporterOrganisationSystemInputType
     * @uses ImporterOrganisationSystemInputType::setOrganisation()
     * @uses ImporterOrganisationSystemInputType::setOrganisationEnhederInput()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType $organisation
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederInputType $organisationEnhederInput
     */
    public function __construct(\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType $organisation, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederInputType $organisationEnhederInput = null)
    {
        $this
            ->setOrganisation($organisation)
            ->setOrganisationEnhederInput($organisationEnhederInput);
    }
    /**
     * Get Organisation value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType
     */
    public function getOrganisation(): \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType
    {
        return $this->Organisation;
    }
    /**
     * Set Organisation value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType $organisation
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ImporterOrganisationSystemInputType
     */
    public function setOrganisation(\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationType $organisation): self
    {
        $this->Organisation = $organisation;
        
        return $this;
    }
    /**
     * Get OrganisationEnhederInput value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederInputType|null
     */
    public function getOrganisationEnhederInput(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederInputType
    {
        return $this->OrganisationEnhederInput;
    }
    /**
     * Set OrganisationEnhederInput value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederInputType $organisationEnhederInput
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ImporterOrganisationSystemInputType
     */
    public function setOrganisationEnhederInput(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederInputType $organisationEnhederInput = null): self
    {
        $this->OrganisationEnhederInput = $organisationEnhederInput;
        
        return $this;
    }
}
