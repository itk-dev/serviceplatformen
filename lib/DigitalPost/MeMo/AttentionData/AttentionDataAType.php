<?php

namespace DigitalPost\MeMo\AttentionData;

/**
 * Class representing AttentionDataAType
 */
class AttentionDataAType
{
    /**
     * @var \DigitalPost\MeMo\AttentionPerson $attentionPerson
     */
    private $attentionPerson = null;

    /**
     * @var \DataGovDk\Model\Core\ProductionUnit $productionUnit
     */
    private $productionUnit = null;

    /**
     * @var \WwwGs1Dk\Gs1Standarder\Identifikation\GlnGlobalLocationNumber\GlobalLocationNumber $globalLocationNumber
     */
    private $globalLocationNumber = null;

    /**
     * @var \DigitalPost\MeMo\EMail $eMail
     */
    private $eMail = null;

    /**
     * @var \DataGovDk\Model\Core\SEnumber $sEnumber
     */
    private $sEnumber = null;

    /**
     * @var \DigitalPost\MeMo\Telephone $telephone
     */
    private $telephone = null;

    /**
     * @var \DataGovDk\Model\Core\EID $eID
     */
    private $eID = null;

    /**
     * @var \DigitalPost\MeMo\ContentResponsible $contentResponsible
     */
    private $contentResponsible = null;

    /**
     * @var \DigitalPost\MeMo\GeneratingSystem $generatingSystem
     */
    private $generatingSystem = null;

    /**
     * @var \ServicesNsiDk\En\Services\SOR\SORdata $sORdata
     */
    private $sORdata = null;

    /**
     * @var \DataGovDk\Model\Core\Address $address
     */
    private $address = null;

    /**
     * @var \DataGovDk\Model\Core\UnstructuredAddress $unstructuredAddress
     */
    private $unstructuredAddress = null;

    /**
     * Gets as attentionPerson
     *
     * @return \DigitalPost\MeMo\AttentionPerson
     */
    public function getAttentionPerson()
    {
        return $this->attentionPerson;
    }

    /**
     * Sets a new attentionPerson
     *
     * @param \DigitalPost\MeMo\AttentionPerson $attentionPerson
     * @return self
     */
    public function setAttentionPerson(?\DigitalPost\MeMo\AttentionPerson $attentionPerson = null)
    {
        $this->attentionPerson = $attentionPerson;
        return $this;
    }

    /**
     * Gets as productionUnit
     *
     * @return \DataGovDk\Model\Core\ProductionUnit
     */
    public function getProductionUnit()
    {
        return $this->productionUnit;
    }

    /**
     * Sets a new productionUnit
     *
     * @param \DataGovDk\Model\Core\ProductionUnit $productionUnit
     * @return self
     */
    public function setProductionUnit(?\DataGovDk\Model\Core\ProductionUnit $productionUnit = null)
    {
        $this->productionUnit = $productionUnit;
        return $this;
    }

    /**
     * Gets as globalLocationNumber
     *
     * @return \WwwGs1Dk\Gs1Standarder\Identifikation\GlnGlobalLocationNumber\GlobalLocationNumber
     */
    public function getGlobalLocationNumber()
    {
        return $this->globalLocationNumber;
    }

    /**
     * Sets a new globalLocationNumber
     *
     * @param \WwwGs1Dk\Gs1Standarder\Identifikation\GlnGlobalLocationNumber\GlobalLocationNumber $globalLocationNumber
     * @return self
     */
    public function setGlobalLocationNumber(?\WwwGs1Dk\Gs1Standarder\Identifikation\GlnGlobalLocationNumber\GlobalLocationNumber $globalLocationNumber = null)
    {
        $this->globalLocationNumber = $globalLocationNumber;
        return $this;
    }

    /**
     * Gets as eMail
     *
     * @return \DigitalPost\MeMo\EMail
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Sets a new eMail
     *
     * @param \DigitalPost\MeMo\EMail $eMail
     * @return self
     */
    public function setEMail(?\DigitalPost\MeMo\EMail $eMail = null)
    {
        $this->eMail = $eMail;
        return $this;
    }

    /**
     * Gets as sEnumber
     *
     * @return \DataGovDk\Model\Core\SEnumber
     */
    public function getSEnumber()
    {
        return $this->sEnumber;
    }

    /**
     * Sets a new sEnumber
     *
     * @param \DataGovDk\Model\Core\SEnumber $sEnumber
     * @return self
     */
    public function setSEnumber(?\DataGovDk\Model\Core\SEnumber $sEnumber = null)
    {
        $this->sEnumber = $sEnumber;
        return $this;
    }

    /**
     * Gets as telephone
     *
     * @return \DigitalPost\MeMo\Telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * @param \DigitalPost\MeMo\Telephone $telephone
     * @return self
     */
    public function setTelephone(?\DigitalPost\MeMo\Telephone $telephone = null)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as eID
     *
     * @return \DataGovDk\Model\Core\EID
     */
    public function getEID()
    {
        return $this->eID;
    }

    /**
     * Sets a new eID
     *
     * @param \DataGovDk\Model\Core\EID $eID
     * @return self
     */
    public function setEID(?\DataGovDk\Model\Core\EID $eID = null)
    {
        $this->eID = $eID;
        return $this;
    }

    /**
     * Gets as contentResponsible
     *
     * @return \DigitalPost\MeMo\ContentResponsible
     */
    public function getContentResponsible()
    {
        return $this->contentResponsible;
    }

    /**
     * Sets a new contentResponsible
     *
     * @param \DigitalPost\MeMo\ContentResponsible $contentResponsible
     * @return self
     */
    public function setContentResponsible(?\DigitalPost\MeMo\ContentResponsible $contentResponsible = null)
    {
        $this->contentResponsible = $contentResponsible;
        return $this;
    }

    /**
     * Gets as generatingSystem
     *
     * @return \DigitalPost\MeMo\GeneratingSystem
     */
    public function getGeneratingSystem()
    {
        return $this->generatingSystem;
    }

    /**
     * Sets a new generatingSystem
     *
     * @param \DigitalPost\MeMo\GeneratingSystem $generatingSystem
     * @return self
     */
    public function setGeneratingSystem(?\DigitalPost\MeMo\GeneratingSystem $generatingSystem = null)
    {
        $this->generatingSystem = $generatingSystem;
        return $this;
    }

    /**
     * Gets as sORdata
     *
     * @return \ServicesNsiDk\En\Services\SOR\SORdata
     */
    public function getSORdata()
    {
        return $this->sORdata;
    }

    /**
     * Sets a new sORdata
     *
     * @param \ServicesNsiDk\En\Services\SOR\SORdata $sORdata
     * @return self
     */
    public function setSORdata(?\ServicesNsiDk\En\Services\SOR\SORdata $sORdata = null)
    {
        $this->sORdata = $sORdata;
        return $this;
    }

    /**
     * Gets as address
     *
     * @return \DataGovDk\Model\Core\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \DataGovDk\Model\Core\Address $address
     * @return self
     */
    public function setAddress(?\DataGovDk\Model\Core\Address $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as unstructuredAddress
     *
     * @return \DataGovDk\Model\Core\UnstructuredAddress
     */
    public function getUnstructuredAddress()
    {
        return $this->unstructuredAddress;
    }

    /**
     * Sets a new unstructuredAddress
     *
     * @param \DataGovDk\Model\Core\UnstructuredAddress $unstructuredAddress
     * @return self
     */
    public function setUnstructuredAddress(?\DataGovDk\Model\Core\UnstructuredAddress $unstructuredAddress = null)
    {
        $this->unstructuredAddress = $unstructuredAddress;
        return $this;
    }
}

