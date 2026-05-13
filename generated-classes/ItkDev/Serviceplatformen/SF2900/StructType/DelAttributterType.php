<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DelAttributterType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DelAttributterType extends AbstractStructBase
{
    /**
     * The DelTekst
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DelTekst;
    /**
     * The Indeks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Indeks = null;
    /**
     * The Indhold
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Indhold = null;
    /**
     * The Filstoerrelse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Filstoerrelse = null;
    /**
     * The MimeType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MimeType = null;
    /**
     * The ScannerID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ScannerID = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * Constructor method for DelAttributterType
     * @uses DelAttributterType::setDelTekst()
     * @uses DelAttributterType::setIndeks()
     * @uses DelAttributterType::setIndhold()
     * @uses DelAttributterType::setFilstoerrelse()
     * @uses DelAttributterType::setMimeType()
     * @uses DelAttributterType::setScannerID()
     * @uses DelAttributterType::setLocation()
     * @param string $delTekst
     * @param int $indeks
     * @param string $indhold
     * @param int $filstoerrelse
     * @param string $mimeType
     * @param string $scannerID
     * @param string $location
     */
    public function __construct(string $delTekst, ?int $indeks = null, ?string $indhold = null, ?int $filstoerrelse = null, ?string $mimeType = null, ?string $scannerID = null, ?string $location = null)
    {
        $this
            ->setDelTekst($delTekst)
            ->setIndeks($indeks)
            ->setIndhold($indhold)
            ->setFilstoerrelse($filstoerrelse)
            ->setMimeType($mimeType)
            ->setScannerID($scannerID)
            ->setLocation($location);
    }
    /**
     * Get DelTekst value
     * @return string
     */
    public function getDelTekst(): string
    {
        return $this->DelTekst;
    }
    /**
     * Set DelTekst value
     * @param string $delTekst
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType
     */
    public function setDelTekst(string $delTekst): self
    {
        // validation for constraint: string
        if (!is_null($delTekst) && !is_string($delTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delTekst, true), gettype($delTekst)), __LINE__);
        }
        $this->DelTekst = $delTekst;
        
        return $this;
    }
    /**
     * Get Indeks value
     * @return int|null
     */
    public function getIndeks(): ?int
    {
        return $this->Indeks;
    }
    /**
     * Set Indeks value
     * @param int $indeks
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType
     */
    public function setIndeks(?int $indeks = null): self
    {
        // validation for constraint: int
        if (!is_null($indeks) && !(is_int($indeks) || ctype_digit($indeks))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($indeks, true), gettype($indeks)), __LINE__);
        }
        $this->Indeks = $indeks;
        
        return $this;
    }
    /**
     * Get Indhold value
     * @return string|null
     */
    public function getIndhold(): ?string
    {
        return $this->Indhold;
    }
    /**
     * Set Indhold value
     * @param string $indhold
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType
     */
    public function setIndhold(?string $indhold = null): self
    {
        // validation for constraint: string
        if (!is_null($indhold) && !is_string($indhold)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($indhold, true), gettype($indhold)), __LINE__);
        }
        $this->Indhold = $indhold;
        
        return $this;
    }
    /**
     * Get Filstoerrelse value
     * @return int|null
     */
    public function getFilstoerrelse(): ?int
    {
        return $this->Filstoerrelse;
    }
    /**
     * Set Filstoerrelse value
     * @param int $filstoerrelse
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType
     */
    public function setFilstoerrelse(?int $filstoerrelse = null): self
    {
        // validation for constraint: int
        if (!is_null($filstoerrelse) && !(is_int($filstoerrelse) || ctype_digit($filstoerrelse))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($filstoerrelse, true), gettype($filstoerrelse)), __LINE__);
        }
        $this->Filstoerrelse = $filstoerrelse;
        
        return $this;
    }
    /**
     * Get MimeType value
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->MimeType;
    }
    /**
     * Set MimeType value
     * @param string $mimeType
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType
     */
    public function setMimeType(?string $mimeType = null): self
    {
        // validation for constraint: string
        if (!is_null($mimeType) && !is_string($mimeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeType, true), gettype($mimeType)), __LINE__);
        }
        $this->MimeType = $mimeType;
        
        return $this;
    }
    /**
     * Get ScannerID value
     * @return string|null
     */
    public function getScannerID(): ?string
    {
        return $this->ScannerID;
    }
    /**
     * Set ScannerID value
     * @param string $scannerID
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType
     */
    public function setScannerID(?string $scannerID = null): self
    {
        // validation for constraint: string
        if (!is_null($scannerID) && !is_string($scannerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scannerID, true), gettype($scannerID)), __LINE__);
        }
        $this->ScannerID = $scannerID;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DelAttributterType
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
}
