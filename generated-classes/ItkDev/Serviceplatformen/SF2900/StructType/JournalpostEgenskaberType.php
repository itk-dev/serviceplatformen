<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalpostEgenskaberType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JournalpostEgenskaberType extends AbstractStructBase
{
    /**
     * The Dokumenttitel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Dokumenttitel = null;
    /**
     * The OffentlighedUndtaget
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType $OffentlighedUndtaget = null;
    /**
     * Constructor method for JournalpostEgenskaberType
     * @uses JournalpostEgenskaberType::setDokumenttitel()
     * @uses JournalpostEgenskaberType::setOffentlighedUndtaget()
     * @param string $dokumenttitel
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType $offentlighedUndtaget
     */
    public function __construct(?string $dokumenttitel = null, ?\ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType $offentlighedUndtaget = null)
    {
        $this
            ->setDokumenttitel($dokumenttitel)
            ->setOffentlighedUndtaget($offentlighedUndtaget);
    }
    /**
     * Get Dokumenttitel value
     * @return string|null
     */
    public function getDokumenttitel(): ?string
    {
        return $this->Dokumenttitel;
    }
    /**
     * Set Dokumenttitel value
     * @param string $dokumenttitel
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalpostEgenskaberType
     */
    public function setDokumenttitel(?string $dokumenttitel = null): self
    {
        // validation for constraint: string
        if (!is_null($dokumenttitel) && !is_string($dokumenttitel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dokumenttitel, true), gettype($dokumenttitel)), __LINE__);
        }
        $this->Dokumenttitel = $dokumenttitel;
        
        return $this;
    }
    /**
     * Get OffentlighedUndtaget value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType|null
     */
    public function getOffentlighedUndtaget(): ?\ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType
    {
        return $this->OffentlighedUndtaget;
    }
    /**
     * Set OffentlighedUndtaget value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType $offentlighedUndtaget
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalpostEgenskaberType
     */
    public function setOffentlighedUndtaget(?\ItkDev\Serviceplatformen\SF2900\StructType\OffentlighedUndtagetType $offentlighedUndtaget = null): self
    {
        $this->OffentlighedUndtaget = $offentlighedUndtaget;
        
        return $this;
    }
}
