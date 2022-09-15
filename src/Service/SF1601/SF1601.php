<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF1601;

use ItkDev\Serviceplatformen\Service\AbstractRESTService;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SF1601 extends AbstractRESTService
{
    protected function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults([
            'svc_entity_id' => 'http://entityid.kombit.dk/service/kombipostafsend/1',
            'svc_endpoint' => static function (Options $options) {
                return $options['test_mode']
                    ? 'https://exttest.serviceplatformen.dk/service/KombiPostAfsend_1/kombi'
                    : 'https://prod.serviceplatformen.dk/services/KombiPostAfsend_1/kombi';
            },
        ]);
    }

    public function kombiPostAfsend(string $transactionId, array $data)
    {
        $body = <<<'XML'
<kombi_request>
 <KombiValgKode>Digital Post</KombiValgKode>
 <memo:Message xmlns:memo="https://DigitalPost.dk/MeMo-1" memoVersion="1.1" memoSchVersion="1.1.0">
  <memo:MessageHeader>
   <memo:messageType>DIGITALPOST</memo:messageType>
   <memo:messageUUID>e4cf3010-d051-43f2-8aa2-c86b05f3af17</memo:messageUUID>
   <memo:label>ITK Development</memo:label>
   <memo:mandatory>false</memo:mandatory>
   <memo:legalNotification>false</memo:legalNotification>
   <memo:Sender>
    <memo:senderID>55133018</memo:senderID>
    <memo:idType>CVR</memo:idType>
    <memo:label>ITK</memo:label>
   </memo:Sender>
   <memo:Recipient>
    <memo:recipientID>2611740000</memo:recipientID>
    <memo:idType>CPR</memo:idType>
   </memo:Recipient>
  </memo:MessageHeader>
  <memo:MessageBody>
   <memo:createdDateTime>2021-12-09T10:31:35Z</memo:createdDateTime>
   <memo:MainDocument>
    <memo:File>
     <memo:encodingFormat>text/plain</memo:encodingFormat>
     <memo:filename>Message.txt</memo:filename>
     <memo:language>da</memo:language>
     <memo:content>RW4gbnllIGJlc2tlZA0KTWVkIGxpbmplc2tpZnQNClZpcmtlciBkZXQ/</memo:content>
    </memo:File>
   </memo:MainDocument>
  </memo:MessageBody>
 </memo:Message>
</kombi_request>
XML;

        $response = $this->call('POST', $this->getOption('svc_endpoint'), [
                'headers' => [
                    'content-type' => 'application/xml',
                    'accept' => 'application/xml',
                ],
                'body' => $body,
                'transactionId' => $transactionId,
            ] + $data);

        return $response;
    }
}
