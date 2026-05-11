<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalPostType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JournalPostType extends AbstractStructBase
{
    /**
     * The Virkning
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $Virkning;
    /**
     * The Rolle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Rolle;
    /**
     * The Indeks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Indeks;
    /**
     * The JournalnotatAttributter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\JournalNotatEgenskaberType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\JournalNotatEgenskaberType $JournalnotatAttributter;
    /**
     * The Dokument
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\JournalPartType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF2900\StructType\JournalPartType $Dokument = null;
    /**
     * The JournalpostAttributter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\JournalpostEgenskaberType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF2900\StructType\JournalpostEgenskaberType $JournalpostAttributter = null;
    /**
     * Constructor method for JournalPostType
     * @uses JournalPostType::setVirkning()
     * @uses JournalPostType::setRolle()
     * @uses JournalPostType::setIndeks()
     * @uses JournalPostType::setJournalnotatAttributter()
     * @uses JournalPostType::setDokument()
     * @uses JournalPostType::setJournalpostAttributter()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning
     * @param string $rolle
     * @param string $indeks
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\JournalNotatEgenskaberType $journalnotatAttributter
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\JournalPartType $dokument
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\JournalpostEgenskaberType $journalpostAttributter
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning, string $rolle, string $indeks, \ItkDev\Serviceplatformen\SF2900\StructType\JournalNotatEgenskaberType $journalnotatAttributter, ?\ItkDev\Serviceplatformen\SF2900\StructType\JournalPartType $dokument = null, ?\ItkDev\Serviceplatformen\SF2900\StructType\JournalpostEgenskaberType $journalpostAttributter = null)
    {
        $this
            ->setVirkning($virkning)
            ->setRolle($rolle)
            ->setIndeks($indeks)
            ->setJournalnotatAttributter($journalnotatAttributter)
            ->setDokument($dokument)
            ->setJournalpostAttributter($journalpostAttributter);
    }
    /**
     * Get Virkning value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
     */
    public function getVirkning(): \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType
    {
        return $this->Virkning;
    }
    /**
     * Set Virkning value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType
     */
    public function setVirkning(\ItkDev\Serviceplatformen\SF2900\StructType\VirkningType $virkning): self
    {
        $this->Virkning = $virkning;
        
        return $this;
    }
    /**
     * Get Rolle value
     * @return string
     */
    public function getRolle(): string
    {
        return $this->Rolle;
    }
    /**
     * Set Rolle value
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\JournalPostRolleType::valueIsValid()
     * @uses \ItkDev\Serviceplatformen\SF2900\EnumType\JournalPostRolleType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rolle
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType
     */
    public function setRolle(string $rolle): self
    {
        // validation for constraint: enumeration
        if (!\ItkDev\Serviceplatformen\SF2900\EnumType\JournalPostRolleType::valueIsValid($rolle)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ItkDev\Serviceplatformen\SF2900\EnumType\JournalPostRolleType', is_array($rolle) ? implode(', ', $rolle) : var_export($rolle, true), implode(', ', \ItkDev\Serviceplatformen\SF2900\EnumType\JournalPostRolleType::getValidValues())), __LINE__);
        }
        $this->Rolle = $rolle;
        
        return $this;
    }
    /**
     * Get Indeks value
     * @return string
     */
    public function getIndeks(): string
    {
        return $this->Indeks;
    }
    /**
     * Set Indeks value
     * @param string $indeks
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType
     */
    public function setIndeks(string $indeks): self
    {
        // validation for constraint: string
        if (!is_null($indeks) && !is_string($indeks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($indeks, true), gettype($indeks)), __LINE__);
        }
        $this->Indeks = $indeks;
        
        return $this;
    }
    /**
     * Get JournalnotatAttributter value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalNotatEgenskaberType
     */
    public function getJournalnotatAttributter(): \ItkDev\Serviceplatformen\SF2900\StructType\JournalNotatEgenskaberType
    {
        return $this->JournalnotatAttributter;
    }
    /**
     * Set JournalnotatAttributter value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\JournalNotatEgenskaberType $journalnotatAttributter
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType
     */
    public function setJournalnotatAttributter(\ItkDev\Serviceplatformen\SF2900\StructType\JournalNotatEgenskaberType $journalnotatAttributter): self
    {
        $this->JournalnotatAttributter = $journalnotatAttributter;
        
        return $this;
    }
    /**
     * Get Dokument value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPartType|null
     */
    public function getDokument(): ?\ItkDev\Serviceplatformen\SF2900\StructType\JournalPartType
    {
        return $this->Dokument;
    }
    /**
     * Set Dokument value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\JournalPartType $dokument
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType
     */
    public function setDokument(?\ItkDev\Serviceplatformen\SF2900\StructType\JournalPartType $dokument = null): self
    {
        $this->Dokument = $dokument;
        
        return $this;
    }
    /**
     * Get JournalpostAttributter value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalpostEgenskaberType|null
     */
    public function getJournalpostAttributter(): ?\ItkDev\Serviceplatformen\SF2900\StructType\JournalpostEgenskaberType
    {
        return $this->JournalpostAttributter;
    }
    /**
     * Set JournalpostAttributter value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\JournalpostEgenskaberType $journalpostAttributter
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType
     */
    public function setJournalpostAttributter(?\ItkDev\Serviceplatformen\SF2900\StructType\JournalpostEgenskaberType $journalpostAttributter = null): self
    {
        $this->JournalpostAttributter = $journalpostAttributter;
        
        return $this;
    }
}
