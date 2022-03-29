<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\DigitalPost;

use GuzzleHttp\Client;
use Http\Adapter\Guzzle7\Client as GuzzleAdapter;
use Http\Factory\Guzzle\RequestFactory;
use ItkDev\AzureKeyVault\Authorisation\VaultToken;
use ItkDev\AzureKeyVault\KeyVault\VaultSecret;
use ItkDev\Serviceplatformen\Certificate\AzureKeyVaultCertificateLocator;
use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\SF1600\ClassMap;
use ItkDev\Serviceplatformen\SF1600\ServiceType\Afsend;
use ItkDev\Serviceplatformen\SF1600\StructType\BilagSamlingType;
use ItkDev\Serviceplatformen\SF1600\StructType\BrevSPBodyType;
use ItkDev\Serviceplatformen\SF1600\StructType\CountryIdentificationCodeType;
use ItkDev\Serviceplatformen\SF1600\StructType\DigitalPostParametreType;
use ItkDev\Serviceplatformen\SF1600\StructType\DokumentParametreType;
use ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseIType;
use ItkDev\Serviceplatformen\SF1600\StructType\ForsendelseModtagerType;
use ItkDev\Serviceplatformen\SF1600\StructType\InvocationContextType;
use ItkDev\Serviceplatformen\SF1600\StructType\KontaktOplysningType;
use ItkDev\Serviceplatformen\SF1600\StructType\PrintAfsendBrevRequestType;
use ItkDev\Serviceplatformen\SF1600\StructType\SlutbrugerIdentitetType;
use Psr\Http\Client\ClientInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\String\ByteString;
use Symfony\Component\Uid\Uuid;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

abstract class DigitalPost
{
    private array $serviceOptions;

    /**
     * The client.
     *
     * @var \GuzzleHttp\Client
     */
    private Client $guzzleClient;

    public function __construct(ClientInterface $client = null)
    {
        $this->guzzleClient = $client ?? new Client();
    }

    /**
     * Afsend brev person.
     */
    protected function afsendBrevPerson(
        string $kanalValg,
        string $prioritet,
        string $cprNummerIdentifikator = null,
        string $personName = null,
        string $coNavn = null,
        string $streetName = null,
        string $streetBuildingIdentifier = null,
        string $floorIdentifier = null,
        string $suiteIdentifier = null,
        string $mailDeliverySublocationIdentifier = null,
        string $postCodeIdentifier = null,
        string $districtSubdivisionIdentifier = null,
        string $postOfficeBoxIdentifier = null,
        string $countryIdentificationCode = null,
        string $filFormatNavn = null,
        string $meddelelseIndholdData = null,
        string $titelTekst = null,
        string $brevDato = null,
        BilagSamlingType $bilagSamling = null
    ):  array {
        if (!$this->acquireLock()) {
            $this->waitLock();
        }

        $invocationContext = new InvocationContextType(
            $this->serviceOptions['service_agreement_uuid'],
            $this->serviceOptions['user_system_uuid'],
            $this->serviceOptions['user_uuid'],
            $this->serviceOptions['service_uuid']
        );

        $slutBrugerIdentitetType = new SlutbrugerIdentitetType($cprNummerIdentifikator);

        $countryIdentificationCodeType = new CountryIdentificationCodeType($countryIdentificationCode);

        $kontaktOplysninger = new KontaktOplysningType(
            $personName,
            $coNavn,
            $streetName,
            $streetBuildingIdentifier,
            $floorIdentifier,
            $suiteIdentifier,
            $mailDeliverySublocationIdentifier,
            $postCodeIdentifier,
            $districtSubdivisionIdentifier,
            $postOfficeBoxIdentifier,
            null,
            null,
            null,
            null,
            null,
            null,
            $countryIdentificationCodeType
        );

        $forsendelsesModtager = new ForsendelseModtagerType($slutBrugerIdentitetType, $kontaktOplysninger);

        $dokumentParametre = new DokumentParametreType($titelTekst, $this->generateUUID(), $brevDato);
        $digitalPostParametre = new DigitalPostParametreType($brevDato, $this->serviceOptions['digital_post_materiale_id']);

        $afsendelseIdentifikator = $this->generateAfsendelseIdentifikator();

        $forsendelse = new ForsendelseIType(
            $afsendelseIdentifikator,
            $this->serviceOptions['digital_post_materiale_id'],
            $forsendelsesModtager,
            $filFormatNavn,
            $meddelelseIndholdData,
            null,
            $dokumentParametre,
            null,
            null,
            $digitalPostParametre,
            null,
            $bilagSamling
        );

        $brevSPBody = new BrevSPBodyType($kanalValg, $prioritet, $forsendelse);
        $request = new PrintAfsendBrevRequestType($brevSPBody, $invocationContext);

        $certificateLocator = $this->getAzureKeyVaultCertificateLocator(
            $this->serviceOptions['azure_tenant_id'],
            $this->serviceOptions['azure_application_id'],
            $this->serviceOptions['azure_client_secret'],
            $this->serviceOptions['azure_key_vault_name'],
            $this->serviceOptions['azure_key_vault_secret'],
            $this->serviceOptions['azure_key_vault_secret_version']
        );

        $client = new Afsend([
            AbstractSoapClientBase::WSDL_URL => $this->serviceOptions['service_contract'],
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            AbstractSoapClientBase::WSDL_LOCAL_CERT => $certificateLocator->getAbsolutePathToCertificate(),
            AbstractSoapClientBase::WSDL_LOCATION => $this->serviceOptions['service_endpoint'],
        ]);

        $response = $client->afsendBrev($request);

        $this->releaseLock();

        if (false === $response) {
            $lastError = $client->getLastError();
            /** @var SoapFault $soapError */
            $soapError = reset($lastError);
            // Should maybe log this instead!
            throw new \Exception($soapError->getMessage(), $soapError->getCode());
        }

        return [
            'result' => $response->getResultat(),
            'afsendelseIdentifikator' => $afsendelseIdentifikator,
        ];
    }

    /**
     * Afsend digital post person.
     */
    public function afsendDigitalPostPerson(
        string $kanalValg = null,
        string $prioritet = null,
        string $cprNummerIdentifikator = null,
        string $filFormatNavn = null,
        string $meddelelseIndholdData = null,
        string $titelTekst = null,
        BilagSamlingType $bilagSamling = null
    ): array {
        if (!$this->acquireLock()) {
            $this->waitLock();
        }

        $invocationContext = new InvocationContextType(
            $this->serviceOptions['service_agreement_uuid'],
            $this->serviceOptions['user_system_uuid'],
            $this->serviceOptions['user_uuid'],
            $this->serviceOptions['service_uuid']
        );

        $slutBrugerIdentitetType = new SlutbrugerIdentitetType($cprNummerIdentifikator);

        $forsendelsesModtager = new ForsendelseModtagerType($slutBrugerIdentitetType);

        $dokumentParametre = new DokumentParametreType($titelTekst);
        $digitalPostParametre = new DigitalPostParametreType(null, $this->serviceOptions['digital_post_materiale_id']);

        $afsendelseIdentifikator = $this->generateAfsendelseIdentifikator();

        $forsendelse = new ForsendelseIType(
            $afsendelseIdentifikator,
            null,
            $forsendelsesModtager,
            $filFormatNavn,
            $meddelelseIndholdData,
            null,
            $dokumentParametre,
            null,
            null,
            $digitalPostParametre,
            null,
            $bilagSamling
        );

        $brevSPBody = new BrevSPBodyType($kanalValg, $prioritet, $forsendelse);
        $request = new PrintAfsendBrevRequestType($brevSPBody, $invocationContext);

        $certificateLocator = $this->getAzureKeyVaultCertificateLocator(
            $this->serviceOptions['azure_tenant_id'],
            $this->serviceOptions['azure_application_id'],
            $this->serviceOptions['azure_client_secret'],
            $this->serviceOptions['azure_key_vault_name'],
            $this->serviceOptions['azure_key_vault_secret'],
            $this->serviceOptions['azure_key_vault_secret_version']
        );

        $client = new Afsend([
            AbstractSoapClientBase::WSDL_URL => $this->serviceOptions['service_contract'],
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            AbstractSoapClientBase::WSDL_LOCAL_CERT => $certificateLocator->getAbsolutePathToCertificate(),
            AbstractSoapClientBase::WSDL_LOCATION => $this->serviceOptions['service_endpoint'],
        ]);

        $response = $client->afsendBrev($request);

        $this->releaseLock();

        if (false === $response) {
            $lastError = $client->getLastError();
            /** @var SoapFault $soapError */
            $soapError = $lastError['Drupal\os2forms_digital_post\Client\ServiceType\Afsend::afsendBrev'];
            // Should maybe log this instead!
            throw new \Exception($soapError->getMessage(), $soapError->getCode());
        }

        return [
            'result' => $response->getResultat(),
            'afsendelseIdentifikator' => $afsendelseIdentifikator,
        ];
    }

    /**
     * Afsend digital post eller brev til CVR-nummer.
     */
    protected function afsendBrevCVR(
        string $kanalValg,
        string $prioritet,
        string $cvrNummerIdentifikator = null,
        string $personName = null,
        string $coNavn = null,
        string $streetName = null,
        string $streetBuildingIdentifier = null,
        string $floorIdentifier = null,
        string $suiteIdentifier = null,
        string $mailDeliverySublocationIdentifier = null,
        string $postCodeIdentifier = null,
        string $districtSubdivisionIdentifier = null,
        string $postOfficeBoxIdentifier = null,
        string $countryIdentificationCode = null,
        string $filFormatNavn = null,
        string $meddelelseIndholdData = null,
        string $titelTekst = null,
        string $brevDato = null,
        BilagSamlingType $bilagSamling = null
    ):  array {
        if (!$this->acquireLock()) {
            $this->waitLock();
        }

        $invocationContext = new InvocationContextType(
            $this->serviceOptions['service_agreement_uuid'],
            $this->serviceOptions['user_system_uuid'],
            $this->serviceOptions['user_uuid'],
            $this->serviceOptions['service_uuid']
        );

        $slutBrugerIdentitetType = (new SlutbrugerIdentitetType())
            ->setCVRnummerIdentifikator($cvrNummerIdentifikator);

        $countryIdentificationCodeType = new CountryIdentificationCodeType($countryIdentificationCode);

        $kontaktOplysninger = new KontaktOplysningType(
            $personName,
            $coNavn,
            $streetName,
            $streetBuildingIdentifier,
            $floorIdentifier,
            $suiteIdentifier,
            $mailDeliverySublocationIdentifier,
            $postCodeIdentifier,
            $districtSubdivisionIdentifier,
            $postOfficeBoxIdentifier,
            null,
            null,
            null,
            null,
            null,
            null,
            $countryIdentificationCodeType
        );

        $forsendelsesModtager = new ForsendelseModtagerType($slutBrugerIdentitetType, $kontaktOplysninger);

        $dokumentParametre = new DokumentParametreType($titelTekst, $this->generateUUID(), $brevDato);
        $digitalPostParametre = new DigitalPostParametreType($brevDato, $this->serviceOptions['digital_post_materiale_id']);

        $afsendelseIdentifikator = $this->generateAfsendelseIdentifikator();

        $forsendelse = new ForsendelseIType(
            $afsendelseIdentifikator,
            $this->serviceOptions['digital_post_materiale_id'],
            $forsendelsesModtager,
            $filFormatNavn,
            $meddelelseIndholdData,
            null,
            $dokumentParametre,
            null,
            null,
            $digitalPostParametre,
            null,
            $bilagSamling
        );

        $brevSPBody = new BrevSPBodyType($kanalValg, $prioritet, $forsendelse);
        $request = new PrintAfsendBrevRequestType($brevSPBody, $invocationContext);

        $certificateLocator = $this->getAzureKeyVaultCertificateLocator(
            $this->serviceOptions['azure_tenant_id'],
            $this->serviceOptions['azure_application_id'],
            $this->serviceOptions['azure_client_secret'],
            $this->serviceOptions['azure_key_vault_name'],
            $this->serviceOptions['azure_key_vault_secret'],
            $this->serviceOptions['azure_key_vault_secret_version']
        );

        $client = new Afsend([
            AbstractSoapClientBase::WSDL_URL => $this->serviceOptions['service_contract'],
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            AbstractSoapClientBase::WSDL_LOCAL_CERT => $certificateLocator->getAbsolutePathToCertificate(),
            AbstractSoapClientBase::WSDL_LOCATION => $this->serviceOptions['service_endpoint'],
        ]);

        $response = $client->afsendBrev($request);

        $this->releaseLock();

        if (false === $response) {
            $lastError = $client->getLastError();
            /** @var SoapFault $soapError */
            $soapError = reset($lastError);
            // Should maybe log this instead!
            throw new \Exception($soapError->getMessage(), $soapError->getCode());
        }

        return [
            'result' => $response->getResultat(),
            'afsendelseIdentifikator' => $afsendelseIdentifikator,
        ];
    }

    protected function setServiceOptions(array $options): self
    {
        $resolver = new OptionsResolver();
        $this->configureServiceOptions($resolver);
        $this->serviceOptions = $resolver->resolve($options);

        return $this;
    }

    /**
     * Get absolute path to certificate.
     */
    private function getAzureKeyVaultCertificateLocator(
        string $tenantId,
        string $applicationId,
        string $clientSecret,
        string $keyVaultName,
        string $keyVaultSecret,
        string $keyVaultSecretVersion
    ): CertificateLocatorInterface {
        $httpClient = new GuzzleAdapter($this->guzzleClient);
        $requestFactory = new RequestFactory();

        $vaultToken = new VaultToken($httpClient, $requestFactory);

        $token = $vaultToken->getToken(
            $tenantId,
            $applicationId,
            $clientSecret
        );

        $vault = new VaultSecret(
            $httpClient,
            $requestFactory,
            $keyVaultName,
            $token->getAccessToken()
        );

        return new AzureKeyVaultCertificateLocator(
            $vault,
            $keyVaultSecret,
            $keyVaultSecretVersion
        );
    }


    /**
     * Generate AfsendelsesIdentifikator.
     *
     * The identifier is a 30-letter id consisting of
     * - the SystemIdentifikator (6 letters) followed by
     * - the AfsenderSystem (3 letters) and, finally,
     * - a 21-letter serial number.
     */
    private function generateAfsendelseIdentifikator(): string
    {
        $serialNumber = $this->generateNextSerialNumber();
        if (strlen($serialNumber) > 21) {
            throw new \RuntimeException(sprintf('The digital post serial contains more the 21 characters: %s', $serialNumber));
        }
        return str_pad($this->serviceOptions['digital_post_system_id'], 6, '0', STR_PAD_LEFT)
            . $this->serviceOptions['digital_post_afsender_system']
            . str_pad($serialNumber, 21, '0', STR_PAD_LEFT);
    }

    protected function generateNextSerialNumber(): string
    {
        return ByteString::fromRandom(21)->toString();
    }

    protected function generateUUID(): string
    {
        return Uuid::v4()->toRfc4122();
    }

    /**
     * Acquire lock.
     */
    abstract protected function acquireLock(): bool;

    /**
     * Release lock.
     */
    abstract protected function releaseLock();

    /**
     * Wait lock.
     */
    abstract protected function waitLock(): bool;

    private function configureServiceOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired([
                'digital_post_system_id',
                'digital_post_afsender_system',
                'digital_post_materiale_id',
                'digital_post_forsendelses_type',
                'azure_tenant_id',
                'azure_application_id',
                'azure_client_secret',
                'azure_key_vault_name',
                'azure_key_vault_secret',
                'azure_key_vault_secret_version',
                'service_agreement_uuid',
                'user_system_uuid',
                'user_uuid',
                'service_uuid',
                'service_endpoint',
                'service_contract',
            ])
            ->setDefaults([
                'service_uuid' => 'fd885b8b-4a3f-46cb-b367-6c9dda1c78f6',
                'service_endpoint' => 'https://prod.serviceplatformen.dk/service/Print/Print/2',
                'service_contract' => realpath(__DIR__.'/../../resources/sf1600/wsdl/context/PrintService.wsdl'),
            ])
            ->setAllowedValues('service_contract', static function ($value) {
                return is_string($value) && file_exists($value);
            })
        ;
    }
}
