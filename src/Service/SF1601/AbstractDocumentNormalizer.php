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

abstract class AbstractDocumentNormalizer
{
    abstract public function normalizeDocument(DOMDocument $document): DOMDocument;
}
