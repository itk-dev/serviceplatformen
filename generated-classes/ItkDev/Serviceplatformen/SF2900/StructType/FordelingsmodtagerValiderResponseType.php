<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FordelingsmodtagerValiderResponseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FordelingsmodtagerValiderResponseType extends AbstractStructBase
{
    /**
     * The RoutingListe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResposneListeType
     */
    protected \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResposneListeType $RoutingListe;
    /**
     * Constructor method for FordelingsmodtagerValiderResponseType
     * @uses FordelingsmodtagerValiderResponseType::setRoutingListe()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResposneListeType $routingListe
     */
    public function __construct(\ItkDev\Serviceplatformen\SF2900\StructType\RoutingResposneListeType $routingListe)
    {
        $this
            ->setRoutingListe($routingListe);
    }
    /**
     * Get RoutingListe value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResposneListeType
     */
    public function getRoutingListe(): \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResposneListeType
    {
        return $this->RoutingListe;
    }
    /**
     * Set RoutingListe value
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\RoutingResposneListeType $routingListe
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\FordelingsmodtagerValiderResponseType
     */
    public function setRoutingListe(\ItkDev\Serviceplatformen\SF2900\StructType\RoutingResposneListeType $routingListe): self
    {
        $this->RoutingListe = $routingListe;
        
        return $this;
    }
}
