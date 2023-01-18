<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1601\Xsd\XsdToPhpRuntime\Jms\Handler;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use ItkDev\Serviceplatformen\Service\SF1601\Serializer;
use JMS\Serializer\Context;
use JMS\Serializer\XmlSerializationVisitor;

class MeMoXmlSchemaDateHandler extends XmlSchemaDateHandler
{
    public function serializeDateTime(XmlSerializationVisitor $visitor, \DateTime $date, array $type, Context $context)
    {
        $v = Serializer::formatDateTimeZulu($date);

        return $visitor->visitSimpleString($v, $type);
    }
}
