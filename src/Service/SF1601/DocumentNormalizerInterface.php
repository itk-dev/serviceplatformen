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

interface DocumentNormalizerInterface
{
    public function normalizeDocument(DOMDocument $document): DOMDocument;
}
