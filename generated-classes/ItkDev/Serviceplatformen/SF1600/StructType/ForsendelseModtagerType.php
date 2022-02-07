<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ForsendelseModtagerType StructType
 * @subpackage Structs
 */
class ForsendelseModtagerType extends AbstractStructBase
{
    /**
     * The AfsendelseModtager
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: dkal:AfsendelseModtager
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType $AfsendelseModtager = null;
    /**
     * The ModtagerAdresse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: fjernprint:ModtagerAdresse
     * @var \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType $ModtagerAdresse = null;
    /**
     * Constructor method for ForsendelseModtagerType
     * @uses ForsendelseModtagerType::setAfsendelseModtager()
     * @uses ForsendelseModtagerType::setModtagerAdresse()
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType $afsendelseModtager
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType $modtagerAdresse
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType $afsendelseModtager = null, ?\ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType $modtagerAdresse = null)
    {
        $this
            ->setAfsendelseModtager($afsendelseModtager)
            ->setModtagerAdresse($modtagerAdresse);
    }
    /**
     * Get AfsendelseModtager value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType|null
     */
    public function getAfsendelseModtager(): ?\ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType
    {
        return $this->AfsendelseModtager;
    }
    /**
     * Set AfsendelseModtager value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType $afsendelseModtager
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseModtagerType
     */
    public function setAfsendelseModtager(?\ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType $afsendelseModtager = null): self
    {
        $this->AfsendelseModtager = $afsendelseModtager;
        
        return $this;
    }
    /**
     * Get ModtagerAdresse value
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType|null
     */
    public function getModtagerAdresse(): ?\ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType
    {
        return $this->ModtagerAdresse;
    }
    /**
     * Set ModtagerAdresse value
     * @param \ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType $modtagerAdresse
     * @return \ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseModtagerType
     */
    public function setModtagerAdresse(?\ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType $modtagerAdresse = null): self
    {
        $this->ModtagerAdresse = $modtagerAdresse;
        
        return $this;
    }
}
