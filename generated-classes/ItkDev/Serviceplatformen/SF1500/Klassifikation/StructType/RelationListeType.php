<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelationListeType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:klassifikationrelationliste:ADD:2.0.0
 * @subpackage Structs
 */
class RelationListeType extends AbstractStructBase
{
    /**
     * The Ansvarlig
     * Meta information extracted from the WSDL
     * - content: ansvarlig
     * - minOccurs: 0
     * - ref: sd:Ansvarlig
     * @var \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType $Ansvarlig = null;
    /**
     * The Ejer
     * Meta information extracted from the WSDL
     * - content: ejer
     * - minOccurs: 0
     * - ref: sd:Ejer
     * @var \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType $Ejer = null;
    /**
     * Constructor method for RelationListeType
     * @uses RelationListeType::setAnsvarlig()
     * @uses RelationListeType::setEjer()
     * @param \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType $ansvarlig
     * @param \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType $ejer
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType $ansvarlig = null, ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType $ejer = null)
    {
        $this
            ->setAnsvarlig($ansvarlig)
            ->setEjer($ejer);
    }
    /**
     * Get Ansvarlig value
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType|null
     */
    public function getAnsvarlig(): ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType
    {
        return $this->Ansvarlig;
    }
    /**
     * Set Ansvarlig value
     * @param \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType $ansvarlig
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\RelationListeType
     */
    public function setAnsvarlig(?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType $ansvarlig = null): self
    {
        $this->Ansvarlig = $ansvarlig;
        
        return $this;
    }
    /**
     * Get Ejer value
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType|null
     */
    public function getEjer(): ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType
    {
        return $this->Ejer;
    }
    /**
     * Set Ejer value
     * @param \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType $ejer
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\RelationListeType
     */
    public function setEjer(?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\AktoerRelationType $ejer = null): self
    {
        $this->Ejer = $ejer;
        
        return $this;
    }
}
