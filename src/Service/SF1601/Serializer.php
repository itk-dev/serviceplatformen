<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1601;

use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;
use DOMDocument;
use DOMXPath;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use ItkDev\Serviceplatformen\Service\SF1601\Xsd\XsdToPhpRuntime\Jms\Handler\MeMoXmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\Uid\Uuid;

class Serializer
{
    // Must match xsd2php.destinations_jms in xsd2php-config.yml
    private const NAMESPACE2METADATA = [
        'DigitalPost\MeMo' =>                                                                            'lib/metadata/DigitalPost/MeMo',
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
        $xml = $this->serializer()->serialize($data, 'xml');

        return $this->normalizeXml($xml);
    }

    /**
     * Format date time as Zulu time.
     *
     * @see https://stackoverflow.com/a/57701653/2502647
     *
     * @param DateTimeInterface $dateTime
     * @return string
     */
    public static function formatDateTimeZulu(DateTimeInterface $dateTime): string
    {
        return (new DateTimeImmutable($dateTime->format(DateTimeInterface::ATOM), new DateTimeZone('UTC')))
            ->format('Y-m-d\TH:i:s\Z');
    }

    public static function createUuid(): string
    {
        return Uuid::v4()->toRfc4122();
    }

    private function normalizeXml(string $xml): string
    {
        $document = new DOMDocument();
        $document->loadXML($xml);

        return $document->saveXML();
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
                $handler->registerSubscribingHandler(new BaseTypesHandler());
                $handler->registerSubscribingHandler(new MeMoXmlSchemaDateHandler());
            });

            $this->serializer = $serializerBuilder->build();
        }

        return $this->serializer;
    }
}
