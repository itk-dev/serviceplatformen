<?php

/*
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Request;

/**
 * Interface RequestGeneratorInterface
 */
interface RequestGeneratorInterface
{
    /**
     * Returns a final request ready for use in a SoapClient call.
     *
     * @param array $message the message needed to be merged into the final request
     *
     * @return array the final request
     */
    public function makeRequest(array $message): array;
}
