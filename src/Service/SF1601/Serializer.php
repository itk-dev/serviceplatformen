<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1601;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

class Serializer
{
    // Must match xsd2php.destinations_jms in xsd2php-config.yml
    private const NAMESPACE2METADATA = [
        'DigitalPost\MeMo' =>                                                                            'lib/metadata/DigitalPost/MeMo',
        'DataGovDk\Model\DataTypes' =>                                                                   'lib/metadata/DataGovDk/Model/DataTypes',
        'DataGovDk\Model\Core' =>                                                                        'lib/metadata/DataGovDk/Model/Core',
        'WwwGs1Dk\Gs1Standarder\Identifikation\GlnGlobalLocationNumber' =>                               'lib/metadata/WwwGs1Dk/Gs1Standarder/Identifikation/GlnGlobalLocationNumber',
        'ServicesNsiDk\En\Services\SOR' =>                                                               'lib/metadata/ServicesNsiDk/En/Services/SOR',
        'MotorregisterSkatDk' =>                                                                         'lib/metadata/MotorregisterSkatDk',
        'KleOnlineDk' =>                                                                                 'lib/metadata/KleOnlineDk',
        'WwwFormOnlineDk' =>                                                                             'lib/metadata/WwwFormOnlineDk',
        'WwwDstDk\Da\TilSalg\Forskningsservice\Dokumentation\Hoejkvalitetsvariable\Elevregister2\Udd' => 'lib/metadata/WwwDstDk/Da/TilSalg/Forskningsservice/Dokumentation/Hoejkvalitetsvariable/Elevregister2/Udd',
    ];

    private SerializerInterface $serializer;

    /**
     * Serialize data as XML.
     *
     * @param $data
     */
    public function serialize($data): string
    {
        return $this->serializer()->serialize($data, 'xml');
    }

    private function serializer(): SerializerInterface
    {
        if (!isset($this->serializer)) {
            $serializerBuilder = SerializerBuilder::create();

            foreach (self::NAMESPACE2METADATA as $namespacePrefix => $dir) {
                $serializerBuilder->addMetadataDir(__DIR__.'/../../../'.$dir, $namespacePrefix);
            }

            $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
                $serializerBuilder->addDefaultHandlers();
                $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
                $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
            });

            $this->serializer = $serializerBuilder->build();
        }

        return $this->serializer;
    }
}
