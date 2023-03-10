<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FremsoegObjekthierarkiOutputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sts:fremsoegobjekthierarkioutputADD:2.0.0
 * @subpackage Structs
 */
class FremsoegObjekthierarkiOutputType extends BasicOutputType
{
    /**
     * The Organisationer
     * Meta information extracted from the WSDL
     * - content: organisationer
     * - ref: sts:Organisationer
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationerOutputType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationerOutputType $Organisationer = null;
    /**
     * The OrganisationEnheder
     * Meta information extracted from the WSDL
     * - content: organisationenheder
     * - ref: sts:OrganisationEnheder
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederOutputType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederOutputType $OrganisationEnheder = null;
    /**
     * The OrganisationFunktioner
     * Meta information extracted from the WSDL
     * - content: organisationfunktioner
     * - ref: sts:OrganisationFunktioner
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionerOutputType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionerOutputType $OrganisationFunktioner = null;
    /**
     * The Brugere
     * Meta information extracted from the WSDL
     * - content: brugere
     * - ref: sts:Brugere
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugereOutputType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugereOutputType $Brugere = null;
    /**
     * The Interessefaellesskaber
     * Meta information extracted from the WSDL
     * - content: interessefaellesskaber
     * - ref: sts:Interessefaellesskaber
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskaberOutputType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskaberOutputType $Interessefaellesskaber = null;
    /**
     * The ItSystemer
     * Meta information extracted from the WSDL
     * - content: itsystemer
     * - ref: sts:ItSystemer
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemerOutputType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemerOutputType $ItSystemer = null;
    /**
     * Constructor method for FremsoegObjekthierarkiOutputType
     * @uses FremsoegObjekthierarkiOutputType::setOrganisationer()
     * @uses FremsoegObjekthierarkiOutputType::setOrganisationEnheder()
     * @uses FremsoegObjekthierarkiOutputType::setOrganisationFunktioner()
     * @uses FremsoegObjekthierarkiOutputType::setBrugere()
     * @uses FremsoegObjekthierarkiOutputType::setInteressefaellesskaber()
     * @uses FremsoegObjekthierarkiOutputType::setItSystemer()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationerOutputType $organisationer
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederOutputType $organisationEnheder
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionerOutputType $organisationFunktioner
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugereOutputType $brugere
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskaberOutputType $interessefaellesskaber
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemerOutputType $itSystemer
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationerOutputType $organisationer = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederOutputType $organisationEnheder = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionerOutputType $organisationFunktioner = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugereOutputType $brugere = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskaberOutputType $interessefaellesskaber = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemerOutputType $itSystemer = null)
    {
        $this
            ->setOrganisationer($organisationer)
            ->setOrganisationEnheder($organisationEnheder)
            ->setOrganisationFunktioner($organisationFunktioner)
            ->setBrugere($brugere)
            ->setInteressefaellesskaber($interessefaellesskaber)
            ->setItSystemer($itSystemer);
    }
    /**
     * Get Organisationer value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationerOutputType|null
     */
    public function getOrganisationer(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationerOutputType
    {
        return $this->Organisationer;
    }
    /**
     * Set Organisationer value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationerOutputType $organisationer
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FremsoegObjekthierarkiOutputType
     */
    public function setOrganisationer(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationerOutputType $organisationer = null): self
    {
        $this->Organisationer = $organisationer;
        
        return $this;
    }
    /**
     * Get OrganisationEnheder value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederOutputType|null
     */
    public function getOrganisationEnheder(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederOutputType
    {
        return $this->OrganisationEnheder;
    }
    /**
     * Set OrganisationEnheder value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederOutputType $organisationEnheder
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FremsoegObjekthierarkiOutputType
     */
    public function setOrganisationEnheder(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationEnhederOutputType $organisationEnheder = null): self
    {
        $this->OrganisationEnheder = $organisationEnheder;
        
        return $this;
    }
    /**
     * Get OrganisationFunktioner value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionerOutputType|null
     */
    public function getOrganisationFunktioner(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionerOutputType
    {
        return $this->OrganisationFunktioner;
    }
    /**
     * Set OrganisationFunktioner value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionerOutputType $organisationFunktioner
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FremsoegObjekthierarkiOutputType
     */
    public function setOrganisationFunktioner(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\OrganisationFunktionerOutputType $organisationFunktioner = null): self
    {
        $this->OrganisationFunktioner = $organisationFunktioner;
        
        return $this;
    }
    /**
     * Get Brugere value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugereOutputType|null
     */
    public function getBrugere(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugereOutputType
    {
        return $this->Brugere;
    }
    /**
     * Set Brugere value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugereOutputType $brugere
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FremsoegObjekthierarkiOutputType
     */
    public function setBrugere(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\BrugereOutputType $brugere = null): self
    {
        $this->Brugere = $brugere;
        
        return $this;
    }
    /**
     * Get Interessefaellesskaber value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskaberOutputType|null
     */
    public function getInteressefaellesskaber(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskaberOutputType
    {
        return $this->Interessefaellesskaber;
    }
    /**
     * Set Interessefaellesskaber value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskaberOutputType $interessefaellesskaber
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FremsoegObjekthierarkiOutputType
     */
    public function setInteressefaellesskaber(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskaberOutputType $interessefaellesskaber = null): self
    {
        $this->Interessefaellesskaber = $interessefaellesskaber;
        
        return $this;
    }
    /**
     * Get ItSystemer value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemerOutputType|null
     */
    public function getItSystemer(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemerOutputType
    {
        return $this->ItSystemer;
    }
    /**
     * Set ItSystemer value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemerOutputType $itSystemer
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FremsoegObjekthierarkiOutputType
     */
    public function setItSystemer(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\ItSystemerOutputType $itSystemer = null): self
    {
        $this->ItSystemer = $itSystemer;
        
        return $this;
    }
}
