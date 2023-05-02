<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LaesOutputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:klassifikationlaesoutput:ADD:2.0.0
 * @subpackage Structs
 */
class LaesOutputType extends BasicOutputType
{
    /**
     * The FiltreretOejebliksbillede
     * Meta information extracted from the WSDL
     * - content: filtreretoejebliksbillede
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\FiltreretOejebliksbilledeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\FiltreretOejebliksbilledeType $FiltreretOejebliksbillede = null;
    /**
     * Constructor method for LaesOutputType
     * @uses LaesOutputType::setFiltreretOejebliksbillede()
     * @param \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\FiltreretOejebliksbilledeType $filtreretOejebliksbillede = null)
    {
        $this
            ->setFiltreretOejebliksbillede($filtreretOejebliksbillede);
    }
    /**
     * Get FiltreretOejebliksbillede value
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\FiltreretOejebliksbilledeType|null
     */
    public function getFiltreretOejebliksbillede(): ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\FiltreretOejebliksbilledeType
    {
        return $this->FiltreretOejebliksbillede;
    }
    /**
     * Set FiltreretOejebliksbillede value
     * @param \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\LaesOutputType
     */
    public function setFiltreretOejebliksbillede(?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\FiltreretOejebliksbilledeType $filtreretOejebliksbillede = null): self
    {
        $this->FiltreretOejebliksbillede = $filtreretOejebliksbillede;
        
        return $this;
    }
}
