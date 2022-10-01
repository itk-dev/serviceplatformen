<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1601;

use DOMDocument;
use DOMXPath;

class MemoDocumentNormalizer implements DocumentNormalizerInterface
{
    public const MEMO_NAMESPACE_URI = 'https://DigitalPost.dk/MeMo-1';
    public const MEMO_NAMESPACE_PREFIX = 'memo';

    public function normalizeDocument(DOMDocument $document): DOMDocument
    {
        // Apparently SF1601 doesn't understand XML correctly so we have to change
        //
        //   <Message xmlns="https://DigitalPost.dk/MeMo-1" memoVersion="1.1" memoSchVersion="1.1.0"/>
        //
        // into
        //
        //   <memo:Message xmlns:memo="https://DigitalPost.dk/MeMo-1" memoVersion="1.1" memoSchVersion="1.1.0"/>
        //
        // Furthermore, the namespace prefix must apparently be exactly "memo".
        $xml = $document->saveXML();
        // Add memo prefix to all elements.
        $xml = preg_replace('@<(/)?([a-z][^>]*)>@i', sprintf('<\1%s:\2>', static::MEMO_NAMESPACE_PREFIX), $xml);
        // Declare the namespace prefix on document element.
        $xml = str_replace(sprintf('<%s:Message ', static::MEMO_NAMESPACE_PREFIX), sprintf('<%1$s:Message xmlns:%1$s="%2$s" ', static::MEMO_NAMESPACE_PREFIX, static::MEMO_NAMESPACE_URI), $xml);
        // Remove namespace declaration.
        $xml = str_replace(sprintf(' xmlns="%s"', static::MEMO_NAMESPACE_URI), '', $xml);
        $document->loadXML($xml);

        // Format date times.
        $xpath = new DOMXPath($document);
        $xpath->registerNamespace(static::MEMO_NAMESPACE_PREFIX, static::MEMO_NAMESPACE_URI);
        /** @var \DOMElement[] $nodes */
        $nodes = $xpath->query(sprintf('//%s:createdDateTime', static::MEMO_NAMESPACE_PREFIX));
        foreach ($nodes as $node) {
            $node->nodeValue = Serializer::formatDateTimeZulu(new \DateTimeImmutable($node->nodeValue));
        }

        return $document;
    }
}
