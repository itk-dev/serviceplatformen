<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ForsendelseAfsenderType StructType
 * @subpackage Structs
 */
class ForsendelseAfsenderType extends AbstractStructBase
{
    /**
     * The AfsenderAdresse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: fjernprint:AfsenderAdresse
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType $AfsenderAdresse = null;
    /**
     * Constructor method for ForsendelseAfsenderType
     * @uses ForsendelseAfsenderType::setAfsenderAdresse()
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType $afsenderAdresse
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType $afsenderAdresse = null)
    {
        $this
            ->setAfsenderAdresse($afsenderAdresse);
    }
    /**
     * Get AfsenderAdresse value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType|null
     */
    public function getAfsenderAdresse(): ?\ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
    {
        return $this->AfsenderAdresse;
    }
    /**
     * Set AfsenderAdresse value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType $afsenderAdresse
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseAfsenderType
     */
    public function setAfsenderAdresse(?\ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType $afsenderAdresse = null): self
    {
        $this->AfsenderAdresse = $afsenderAdresse;
        
        return $this;
    }
}
