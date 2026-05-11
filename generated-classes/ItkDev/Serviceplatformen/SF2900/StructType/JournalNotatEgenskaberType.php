<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalNotatEgenskaberType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JournalNotatEgenskaberType extends AbstractStructBase
{
    /**
     * The Notat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Notat;
    /**
     * The Titel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Titel = null;
    /**
     * Constructor method for JournalNotatEgenskaberType
     * @uses JournalNotatEgenskaberType::setNotat()
     * @uses JournalNotatEgenskaberType::setTitel()
     * @param string $notat
     * @param string $titel
     */
    public function __construct(string $notat, ?string $titel = null)
    {
        $this
            ->setNotat($notat)
            ->setTitel($titel);
    }
    /**
     * Get Notat value
     * @return string
     */
    public function getNotat(): string
    {
        return $this->Notat;
    }
    /**
     * Set Notat value
     * @param string $notat
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalNotatEgenskaberType
     */
    public function setNotat(string $notat): self
    {
        // validation for constraint: string
        if (!is_null($notat) && !is_string($notat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notat, true), gettype($notat)), __LINE__);
        }
        $this->Notat = $notat;
        
        return $this;
    }
    /**
     * Get Titel value
     * @return string|null
     */
    public function getTitel(): ?string
    {
        return $this->Titel;
    }
    /**
     * Set Titel value
     * @param string $titel
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalNotatEgenskaberType
     */
    public function setTitel(?string $titel = null): self
    {
        // validation for constraint: string
        if (!is_null($titel) && !is_string($titel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titel, true), gettype($titel)), __LINE__);
        }
        $this->Titel = $titel;
        
        return $this;
    }
}
