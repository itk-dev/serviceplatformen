<?php

namespace DigitalPost\MeMo\MessageBody;

/**
 * Class representing MessageBodyAType
 */
class MessageBodyAType
{
    /**
     * @var \DateTime $createdDateTime
     */
    private $createdDateTime = null;

    /**
     * @var \DigitalPost\MeMo\MainDocument $mainDocument
     */
    private $mainDocument = null;

    /**
     * @var \DigitalPost\MeMo\AdditionalDocument[] $additionalDocument
     */
    private $additionalDocument = [
        
    ];

    /**
     * @var \DigitalPost\MeMo\TechnicalDocument[] $technicalDocument
     */
    private $technicalDocument = [
        
    ];

    /**
     * Gets as createdDateTime
     *
     * @return \DateTime
     */
    public function getCreatedDateTime()
    {
        return $this->createdDateTime;
    }

    /**
     * Sets a new createdDateTime
     *
     * @param \DateTime $createdDateTime
     * @return self
     */
    public function setCreatedDateTime(\DateTime $createdDateTime)
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    /**
     * Gets as mainDocument
     *
     * @return \DigitalPost\MeMo\MainDocument
     */
    public function getMainDocument()
    {
        return $this->mainDocument;
    }

    /**
     * Sets a new mainDocument
     *
     * @param \DigitalPost\MeMo\MainDocument $mainDocument
     * @return self
     */
    public function setMainDocument(\DigitalPost\MeMo\MainDocument $mainDocument)
    {
        $this->mainDocument = $mainDocument;
        return $this;
    }

    /**
     * Adds as additionalDocument
     *
     * @return self
     * @param \DigitalPost\MeMo\AdditionalDocument $additionalDocument
     */
    public function addToAdditionalDocument(\DigitalPost\MeMo\AdditionalDocument $additionalDocument)
    {
        $this->additionalDocument[] = $additionalDocument;
        return $this;
    }

    /**
     * isset additionalDocument
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDocument($index)
    {
        return isset($this->additionalDocument[$index]);
    }

    /**
     * unset additionalDocument
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDocument($index)
    {
        unset($this->additionalDocument[$index]);
    }

    /**
     * Gets as additionalDocument
     *
     * @return \DigitalPost\MeMo\AdditionalDocument[]
     */
    public function getAdditionalDocument()
    {
        return $this->additionalDocument;
    }

    /**
     * Sets a new additionalDocument
     *
     * @param \DigitalPost\MeMo\AdditionalDocument[] $additionalDocument
     * @return self
     */
    public function setAdditionalDocument(array $additionalDocument = null)
    {
        $this->additionalDocument = $additionalDocument;
        return $this;
    }

    /**
     * Adds as technicalDocument
     *
     * @return self
     * @param \DigitalPost\MeMo\TechnicalDocument $technicalDocument
     */
    public function addToTechnicalDocument(\DigitalPost\MeMo\TechnicalDocument $technicalDocument)
    {
        $this->technicalDocument[] = $technicalDocument;
        return $this;
    }

    /**
     * isset technicalDocument
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalDocument($index)
    {
        return isset($this->technicalDocument[$index]);
    }

    /**
     * unset technicalDocument
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalDocument($index)
    {
        unset($this->technicalDocument[$index]);
    }

    /**
     * Gets as technicalDocument
     *
     * @return \DigitalPost\MeMo\TechnicalDocument[]
     */
    public function getTechnicalDocument()
    {
        return $this->technicalDocument;
    }

    /**
     * Sets a new technicalDocument
     *
     * @param \DigitalPost\MeMo\TechnicalDocument[] $technicalDocument
     * @return self
     */
    public function setTechnicalDocument(array $technicalDocument = null)
    {
        $this->technicalDocument = $technicalDocument;
        return $this;
    }
}

