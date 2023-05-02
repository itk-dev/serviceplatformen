<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LaesOutputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:organisationlaesoutput:ADD:2.0.0 | urn:oio:sagdok:organisationenhedlaesoutput:ADD:2.0.0 | urn:oio:sagdok:organisationfunktionlaesoutput:ADD:2.0.0 | urn:oio:sts:adresselaesoutput:ADD:2.0.0 |
 * urn:oio:sts:personlaesoutput:ADD:2.0.0 | urn:oio:sagdok:brugerlaesoutput:ADD:2.0.0 | urn:oio:sagdok:interessefaellesskablaesoutput:ADD:2.0.0 | urn:oio:sagdok:itsystemlaesoutput:ADD:2.0.0 | urn:oio:sts:myndighedlaesoutput:ADD:2.0.0 |
 * urn:oio:sts:virksomhedlaesoutput:ADD:2.0.0
 * @subpackage Structs
 */
class LaesOutputType extends BasicOutputType
{
    /**
     * The FiltreretOejebliksbillede
     * Meta information extracted from the WSDL
     * - content: filtreretoejebliksbillede
     * - minOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType $FiltreretOejebliksbillede = null;
    /**
     * Constructor method for LaesOutputType
     * @uses LaesOutputType::setFiltreretOejebliksbillede()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType $filtreretOejebliksbillede = null)
    {
        $this
            ->setFiltreretOejebliksbillede($filtreretOejebliksbillede);
    }
    /**
     * Get FiltreretOejebliksbillede value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType|null
     */
    public function getFiltreretOejebliksbillede(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType
    {
        return $this->FiltreretOejebliksbillede;
    }
    /**
     * Set FiltreretOejebliksbillede value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\LaesOutputType
     */
    public function setFiltreretOejebliksbillede(?\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\FiltreretOejebliksbilledeType $filtreretOejebliksbillede = null): self
    {
        $this->FiltreretOejebliksbillede = $filtreretOejebliksbillede;
        
        return $this;
    }
}
