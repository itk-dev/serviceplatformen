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

class MemoDocumentNormalizer
{
    public const MEMO_NAMESPACE = 'https://DigitalPost.dk/MeMo-1';

    public function normalizeDocument(DOMDocument $document): DOMDocument
    {
        // Apparently SF1601 doesn't understand XML correctly so we have to change
        //
        //   <Message xmlns="https://DigitalPost.dk/MeMo-1" memoVersion="1.1" memoSchVersion="1.1.0"/>
        //
        // into
        //
        //   <memo:Message xmlns:memo="https://DigitalPost.dk/MeMo-1" memoVersion="1.1" memoSchVersion="1.1.0"/>
        $xml = $document->saveXML();
        // Add memo prefix to all elements.
        $xml = preg_replace('@<(/)?([a-z][^>]*)>@i', '<\1memo:\2>', $xml);
        // Declare the namespace prefix on document element.
        $xml = str_replace('<memo:Message ', sprintf('<memo:Message xmlns:memo="%s" ', static::MEMO_NAMESPACE), $xml);
        // Remove namespace declaration.
        $xml = str_replace(sprintf(' xmlns="%s"', static::MEMO_NAMESPACE), '', $xml);

        $document->loadXML($xml);

        // Format date times.
        $xpath = new DOMXPath($document);
        $xpath->registerNamespace('memo', static::MEMO_NAMESPACE);
        /** @var \DOMElement[] $nodes */
        $nodes = $xpath->query('//memo:createdDateTime');
        foreach ($nodes as $node) {
            $node->nodeValue = Serializer::formatDateTimeZulu(new \DateTimeImmutable($node->nodeValue));
        }

        return $document;
    }
}
