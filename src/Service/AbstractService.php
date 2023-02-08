<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service;

use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\Request\RequestGeneratorInterface;
use ItkDev\Serviceplatformen\Service\Exception\ServiceException;
use SoapClient;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class AbstractService
 */
abstract class AbstractService
{
    private RequestGeneratorInterface $requestGenerator;
    private array $soapClientOptions;

    /**
     * AbstractService constructor.
     *
     * @param SoapClient $soapClient
     * @param RequestGeneratorInterface $requestGenerator
     */
    public function __construct(array $soapClientOptions, RequestGeneratorInterface $requestGenerator)
    {
        $this->soapClientOptions = $this->resolveSoapClientOptions($soapClientOptions);
        $this->requestGenerator = $requestGenerator;
    }


    /**
     * Performs a call to the provided operation with the message in the right context.
     *
     * @param string $operation the operation on the service to call.
     * @param array $message the message to be passed to the operation.
     *
     * @return object the raw response.
     *
     * @throws ServiceException is thrown on SoapFaults.
     */
    public function makeCall(string $operation, array $message): object
    {
        $request = $this->requestGenerator->makeRequest($message);

        $wsdl = $this->soapClientOptions['wsdl'];
        $certificateLocator = $this->soapClientOptions['certificate_locator'] ?? null;
        assert($certificateLocator instanceof CertificateLocatorInterface);
        $localCertFilename = tempnam(sys_get_temp_dir(), 'cert');
        file_put_contents($localCertFilename, $certificateLocator->getCertificate());

        $soapClient = new SoapClient($wsdl, $this->soapClientOptions['options']
            + [
                'local_cert' => $localCertFilename,
                'passphrase' => $certificateLocator->getPassphrase()
            ]);

        try {
            return call_user_func_array([$soapClient, $operation], [$request]);
        } catch (\SoapFault $exception) {
            throw new ServiceException($exception->getMessage(), $exception->getCode());
        } finally {
            // Remove the certificate from disk.
            if (file_exists($localCertFilename)) {
                unlink($localCertFilename);
            }
        }
    }

    private function resolveSoapClientOptions(array $option): array
    {
        return (new OptionsResolver())
            ->setRequired('wsdl')
            ->setRequired('certificate_locator')
            ->setAllowedTypes('certificate_locator', CertificateLocatorInterface::class)
            ->setRequired('options')
            ->setAllowedTypes('options', 'array')
            ->resolve($option);
    }
}
