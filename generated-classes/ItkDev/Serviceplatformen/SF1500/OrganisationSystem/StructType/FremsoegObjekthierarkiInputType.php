<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FremsoegObjekthierarkiInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sts:fremsoegobjekthierarkiinputADD:2.0.0
 * @subpackage Structs
 */
class FremsoegObjekthierarkiInputType extends SoegInputType
{
    /**
     * The OrganisationSoegEgenskab
     * Meta information extracted from the WSDL
     * - content: organisationegenskaber
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: sts:OrganisationSoegEgenskab
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $OrganisationSoegEgenskab = null;
    /**
     * The OrganisationEnhedSoegEgenskab
     * Meta information extracted from the WSDL
     * - content: organisationenhedegenskaber
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: sts:OrganisationEnhedSoegEgenskab
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $OrganisationEnhedSoegEgenskab = null;
    /**
     * The OrganisationFunktionSoegEgenskab
     * Meta information extracted from the WSDL
     * - content: organisationfunktionegenskaber
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: sts:OrganisationFunktionSoegEgenskab
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $OrganisationFunktionSoegEgenskab = null;
    /**
     * The BrugerSoegEgenskab
     * Meta information extracted from the WSDL
     * - content: brugeregenskaber
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: sts:BrugerSoegEgenskab
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $BrugerSoegEgenskab = null;
    /**
     * The InteressefaellesskabSoegEgenskab
     * Meta information extracted from the WSDL
     * - content: interessefaellesskabegenskaber
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: sts:InteressefaellesskabSoegEgenskab
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $InteressefaellesskabSoegEgenskab = null;
    /**
     * The ItSystemSoegEgenskab
     * Meta information extracted from the WSDL
     * - content: itsystemegenskaber
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: sts:ItSystemSoegEgenskab
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $ItSystemSoegEgenskab = null;
    /**
     * Constructor method for FremsoegObjekthierarkiInputType
     * @uses FremsoegObjekthierarkiInputType::setOrganisationSoegEgenskab()
     * @uses FremsoegObjekthierarkiInputType::setOrganisationEnhedSoegEgenskab()
     * @uses FremsoegObjekthierarkiInputType::setOrganisationFunktionSoegEgenskab()
     * @uses FremsoegObjekthierarkiInputType::setBrugerSoegEgenskab()
     * @uses FremsoegObjekthierarkiInputType::setInteressefaellesskabSoegEgenskab()
     * @uses FremsoegObjekthierarkiInputType::setItSystemSoegEgenskab()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $organisationSoegEgenskab
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $organisationEnhedSoegEgenskab
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $organisationFunktionSoegEgenskab
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $brugerSoegEgenskab
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $interessefaellesskabSoegEgenskab
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $itSystemSoegEgenskab
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $organisationSoegEgenskab = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $organisationEnhedSoegEgenskab = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $organisationFunktionSoegEgenskab = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $brugerSoegEgenskab = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $interessefaellesskabSoegEgenskab = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $itSystemSoegEgenskab = null)
    {
        $this
            ->setOrganisationSoegEgenskab($organisationSoegEgenskab)
            ->setOrganisationEnhedSoegEgenskab($organisationEnhedSoegEgenskab)
            ->setOrganisationFunktionSoegEgenskab($organisationFunktionSoegEgenskab)
            ->setBrugerSoegEgenskab($brugerSoegEgenskab)
            ->setInteressefaellesskabSoegEgenskab($interessefaellesskabSoegEgenskab)
            ->setItSystemSoegEgenskab($itSystemSoegEgenskab);
    }
    /**
     * Get OrganisationSoegEgenskab value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType|null
     */
    public function getOrganisationSoegEgenskab(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
    {
        return $this->OrganisationSoegEgenskab;
    }
    /**
     * Set OrganisationSoegEgenskab value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $organisationSoegEgenskab
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FremsoegObjekthierarkiInputType
     */
    public function setOrganisationSoegEgenskab(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $organisationSoegEgenskab = null): self
    {
        $this->OrganisationSoegEgenskab = $organisationSoegEgenskab;
        
        return $this;
    }
    /**
     * Get OrganisationEnhedSoegEgenskab value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType|null
     */
    public function getOrganisationEnhedSoegEgenskab(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
    {
        return $this->OrganisationEnhedSoegEgenskab;
    }
    /**
     * Set OrganisationEnhedSoegEgenskab value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $organisationEnhedSoegEgenskab
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FremsoegObjekthierarkiInputType
     */
    public function setOrganisationEnhedSoegEgenskab(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $organisationEnhedSoegEgenskab = null): self
    {
        $this->OrganisationEnhedSoegEgenskab = $organisationEnhedSoegEgenskab;
        
        return $this;
    }
    /**
     * Get OrganisationFunktionSoegEgenskab value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType|null
     */
    public function getOrganisationFunktionSoegEgenskab(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
    {
        return $this->OrganisationFunktionSoegEgenskab;
    }
    /**
     * Set OrganisationFunktionSoegEgenskab value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $organisationFunktionSoegEgenskab
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FremsoegObjekthierarkiInputType
     */
    public function setOrganisationFunktionSoegEgenskab(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $organisationFunktionSoegEgenskab = null): self
    {
        $this->OrganisationFunktionSoegEgenskab = $organisationFunktionSoegEgenskab;
        
        return $this;
    }
    /**
     * Get BrugerSoegEgenskab value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType|null
     */
    public function getBrugerSoegEgenskab(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
    {
        return $this->BrugerSoegEgenskab;
    }
    /**
     * Set BrugerSoegEgenskab value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $brugerSoegEgenskab
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FremsoegObjekthierarkiInputType
     */
    public function setBrugerSoegEgenskab(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $brugerSoegEgenskab = null): self
    {
        $this->BrugerSoegEgenskab = $brugerSoegEgenskab;
        
        return $this;
    }
    /**
     * Get InteressefaellesskabSoegEgenskab value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType|null
     */
    public function getInteressefaellesskabSoegEgenskab(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
    {
        return $this->InteressefaellesskabSoegEgenskab;
    }
    /**
     * Set InteressefaellesskabSoegEgenskab value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $interessefaellesskabSoegEgenskab
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FremsoegObjekthierarkiInputType
     */
    public function setInteressefaellesskabSoegEgenskab(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $interessefaellesskabSoegEgenskab = null): self
    {
        $this->InteressefaellesskabSoegEgenskab = $interessefaellesskabSoegEgenskab;
        
        return $this;
    }
    /**
     * Get ItSystemSoegEgenskab value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType|null
     */
    public function getItSystemSoegEgenskab(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType
    {
        return $this->ItSystemSoegEgenskab;
    }
    /**
     * Set ItSystemSoegEgenskab value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $itSystemSoegEgenskab
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FremsoegObjekthierarkiInputType
     */
    public function setItSystemSoegEgenskab(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\EgenskabType $itSystemSoegEgenskab = null): self
    {
        $this->ItSystemSoegEgenskab = $itSystemSoegEgenskab;
        
        return $this;
    }
}
