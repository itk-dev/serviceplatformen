<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Tests\Unit\Service\SF1601;

use DataGovDk\Model\Core\ProductionUnit;
use DigitalPost\MeMo\AttentionData;
use DigitalPost\MeMo\ContentData;
use DigitalPost\MeMo\Message;
use DigitalPost\MeMo\MessageHeader;
use DigitalPost\MeMo\Recipient;
use ItkDev\Serviceplatformen\Service\SF1601\Serializer;
use MotorregisterSkatDk\MotorVehicle;
use PHPUnit\Framework\TestCase;

class SerializerTest extends TestCase
{
    public function testSerializeEmptyMessage()
    {
        $message = new Message();

        $expected = $this->expected(__FUNCTION__);
        $actual = (new Serializer())->serialize($message);

        $this->assertXmlStringEqualsXmlString($expected, $actual, __METHOD__);
    }

    public function testNamespaces()
    {
        $message = (new Message())
            ->setMessageHeader(
                (new MessageHeader())
                    ->setReplyByDateTime(new \DateTime('2001-01-01'))
                    ->setRecipient(
                        (new Recipient())
                        ->setAttentionData(
                            (new AttentionData())
                                ->setProductionUnit(
                                    (new ProductionUnit())
                                        ->setProductionUnitNumber(1234567890)
                                )
                        )
                    )
                    ->setContentData(
                        (new ContentData())
                        ->setMotorVehicle(
                            (new MotorVehicle())
                            ->setLicenseNumber('AB12345')
                        )
                    )
            )
        ;

        $expected = $this->expected(__FUNCTION__);
        $actual = (new Serializer())->serialize($message);

        $this->assertXmlStringEqualsXmlString($expected, $actual, __METHOD__);
    }

    public function _testMeMoScenarie1Eksempel()
    {
        $message = new Message();

        $expected = $this->expected(__FUNCTION__);
        $actual = (new Serializer())->serialize($message);

        $this->assertXmlStringEqualsXmlString($expected, $actual, __METHOD__);
    }

    private function expected(string $name)
    {
        $path = preg_replace('@([^\\\\]+\\\\)+@', '', static::class);

//        var_export(['path' => $path, static::class]);

        return file_get_contents(__DIR__.'/'.$path.'/'.$name.'.xml');
    }
}
