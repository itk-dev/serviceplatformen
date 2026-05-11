<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF2900;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\Uid\Uuid;

class Serializer
{
    // Must match xsd2php.destinations_jms in xsd2php-config.yml
    private const NAMESPACE2METADATA = [
        'Digitaliseringskataloget\\Sftp' => 'lib/metadata/digitaliseringskataloget/Sftp',
    ];

    private SerializerInterface $serializer;

    /**
     * Serialize data as XML.
     */
    public function serialize($data): string
    {
        $xml = $this->serializer()->serialize($data, 'xml');

        return $this->normalizeXml($xml);
    }

    /**
     * Unserialize an XML string.
     *
     * @template T
     *
     * @param class-string<T> $type
     *
     * @return T
     */
    public function deserialize(string $xml, string $type): mixed
    {
        return $this->serializer()->deserialize($xml, $type, 'xml');
    }

    /**
     * Format date time as Zulu time.
     *
     * @see https://stackoverflow.com/a/57701653/2502647
     */
    public static function formatDateTimeZulu(\DateTimeInterface $dateTime): string
    {
        return (new \DateTimeImmutable($dateTime->format(\DateTimeInterface::ATOM), new \DateTimeZone('UTC')))
            ->format('Y-m-d\TH:i:s\Z');
    }

    public static function createUuid(): string
    {
        return Uuid::v4()->toRfc4122();
    }

    /**
     * Helper function to load XML into a DOM document.
     *
     * We need to be able to handle very long node values (base64 encoded PDF files).
     */
    public static function loadXML(string $xml, ?\DOMDocument $document = null): \DOMDocument
    {
        $document ??= new \DOMDocument();

        $document->loadXML($xml, LIBXML_PARSEHUGE);

        return $document;
    }

    private function normalizeXml(string $xml): string
    {
        $document = static::loadXML($xml);

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
                $handler->registerSubscribingHandler(new XmlSchemaDateHandler());
            });

            $this->serializer = $serializerBuilder->build();
        }

        return $this->serializer;
    }
}
