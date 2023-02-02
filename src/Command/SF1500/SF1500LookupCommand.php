<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Command\SF1500;

use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Http\Factory\Guzzle\RequestFactory;
use ItkDev\AzureKeyVault\Authorisation\VaultToken;
use ItkDev\AzureKeyVault\KeyVault\VaultSecret;
use ItkDev\Serviceplatformen\Certificate\AzureKeyVaultCertificateLocator;
use ItkDev\Serviceplatformen\Certificate\CertificateLocatorInterface;
use ItkDev\Serviceplatformen\Certificate\FilesystemCertificateLocator;
use ItkDev\Serviceplatformen\Service\Exception\InvalidArgumentException;
use ItkDev\Serviceplatformen\Service\Exception\SF1500Exception;
use ItkDev\Serviceplatformen\Service\SF1500\SF1500;
use ItkDev\Serviceplatformen\Service\SF1500\SF1500XMLBuilder;
use ItkDev\Serviceplatformen\Service\SF1514\SF1514;
use ItkDev\Serviceplatformen\Service\SoapClient;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidOptionException;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccessor;

class SF1500LookupCommand extends Command
{
    const SF1500_SERVICE_ENDPOINT = 'http://stoettesystemerne.dk/service/organisation/3';

    protected static $defaultName = 'serviceplatformen:sf1500:lookup';
    private array $inputOptions = [];

    protected function configure()
    {
        $inputOptions = [
            new InputOption('manager', null, InputOption::VALUE_NONE, 'get information on manager for provided user-id'),
            new InputOption('production', null, InputOption::VALUE_NONE, 'production mode'),
            new InputOption('user-id', null, InputOption::VALUE_REQUIRED, 'user id'),
            new InputOption('certificate', null, InputOption::VALUE_REQUIRED, 'path to certificate'),
            new InputOption('passphrase', null, InputOption::VALUE_OPTIONAL, 'passphrase for certificate', ''),
            new InputOption('authority-cvr', null, InputOption::VALUE_REQUIRED, 'authority cvr'),
            new InputOption('manager-type-id', null, InputOption::VALUE_REQUIRED, 'manager type id'),
        ];
        $this->setDefinition(new InputDefinition($inputOptions));

        $this->setDescription('Helper script for testing “SF1500: Organisation”.');

        $help = <<<HELP

user-id:
    a user id, e.g.
    'ffdb7559-2ad3-4662-9fd4-d69859939b66'

manager-type-id:
    the id associated with manager type, e.g.
    '46c73630-f7ad-4000-9624-c06131cde671'

certificate:
    The certificate option can be a file path to a PKCS #12 certificate or a url query string with options for getting the certificate from an Azure Key Vault, e.g. (newlines added for readability and proper url encoding skipped)

    tenant_id=f1d3b517-acac-4902-ae36-aaa32ed814dd
    &client_id=7d711706-4325-47a6-a8c4-b373615c2b75
    &client_secret=6e8551bf-2bb0-46bc-b449-647720120495
    &name=organisation
    &secret=test
    &version=bbcbd812-0d7c-420b-9b93-7318e3769578
    
    If using path option make sure the path is relative to project root to the certificate file, e.g.
    '/app/src/Command/SF1500/certificate.p12'
 
passphrase:
    the passphrase for p12 certificate, i.e.
    'XYZ'
    defaults to the empty string if not provided

authority-cvr:
    the authority cvr for which certificate is granted, e.g. Aarhus Kommune
    '55133018'

production:
    use --production to use production mode rather than test mode

manager:
    use --manager to get information on the manager of provided user-id

HELP;

        $this->setHelp($help);

        // Index by option name.
        $this->inputOptions = array_combine(array_map(fn (InputOption $option) => $option->getName(), $inputOptions), $inputOptions);
    }

    /**
     * @throws SF1500Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);
        $options = $resolver->resolve(
            array_filter(array_filter($input->getOptions()), fn ($name) => isset($this->inputOptions[$name]), ARRAY_FILTER_USE_KEY)
        );

        $userId = $options['user-id'];

        $propertyAccessor = new PropertyAccessor();

        $certificateLocator = $this->getCertificateLocator($options['certificate'], $options['passphrase']);

        $soapClient = new SoapClient([
            'cache_expiration_time' => ['7am', 'tomorrow 7am'],
        ]);

        $serviceOptions = [
            'certificate_locator' => $certificateLocator,
            'authority_cvr' => $options['authority-cvr'],
            'sts_applies_to' => self::SF1500_SERVICE_ENDPOINT,
            'test_mode' => !$options['production'],
        ];

        $sf1514 = new SF1514($soapClient, $serviceOptions);

        $sf1500XMLBuilder = new SF1500XMLBuilder();

        unset($serviceOptions['sts_applies_to']);

        $sf1500 = new SF1500($soapClient, $sf1514, $sf1500XMLBuilder, $propertyAccessor, $serviceOptions);

        // Use a lookup on name as an indicator for whether user-id exists or not.
        $name = $sf1500->getPersonName($userId);

        if (!$name) {
            throw new InvalidArgumentException(sprintf('Invalid user id: %s', $userId));
        }

        if ($options['manager']) {
            // Convert user-id into manager.
            $managerInfos = $sf1500->getManagerBrugerAndFunktionsIdFromUserId($userId, $options['manager-type-id']);

            if (null !== $managerInfos) {
                $output->writeln(sprintf('Finding information on managers of: %s', $name));

                $count = 1;
                foreach ($managerInfos as $managerInfo) {
                    if (null === $managerInfo) {
                        // User funktion does not have an immediate manager.
                        continue;
                    }
                    $output->writeln(sprintf('Printing data for manager %s', $count));
                    $userId = $managerInfo['brugerId'];
                    $organisationFunktionsId = $managerInfo['funktionsId'];

                    $this->outputData($output, $sf1500, $userId, $organisationFunktionsId);
                    $count++;
                }

                return static::SUCCESS;
            } else {
                $output->writeln(sprintf('Cannot find a manager for: %s', $name));
                return static::SUCCESS;
            }
        }

        $organisationFunktionsIds = $sf1500->getOrganisationFunktionerFromUserId($userId);

        if (empty($organisationFunktionsIds)) {
            $output->writeln('Cannot find any organisation funktion(ansættelse) for provided user id.');
            return static::SUCCESS;
        }

        $this->outputData($output, $sf1500, $userId, $organisationFunktionsIds);

        return static::SUCCESS;
    }

    private function outputData(OutputInterface $output, SF1500 $sf1500, string $userId, array $funktiondIds)
    {
        $output->writeln('Name: '. $sf1500->getPersonName($userId));
        $output->writeln('Phone: '. $sf1500->getPersonPhone($userId));
        $output->writeln('Email: '. $sf1500->getPersonEmail($userId));
        $output->writeln('Az: '. $sf1500->getPersonAZIdent($userId));
        $output->writeln('Location: '. $sf1500->getPersonLocation($userId));

        $count = 1;
        foreach ($funktiondIds as $funktionsId) {
            $output->writeln(sprintf('Printing data for organisation funktion %s', $count));
            $this->outputFunktionsData($output, $sf1500, $funktionsId);
            $count++;
        }
    }


    private function outputFunktionsData(OutputInterface $output, SF1500 $sf1500, string $funktionsId)
    {
        $output->writeln('Organisation funktion: '. $funktionsId);
        $output->writeln('Organisation funktions navn: '. $sf1500->getFunktionsNavn($funktionsId));
        $output->writeln('Organisations enhed: '. $sf1500->getOrganisationEnhed($funktionsId));
        $output->writeln('Organisations adresse: '. $sf1500->getOrganisationAddress($funktionsId));
        $output->writeln('Organisations enhed niveau 2: '. $sf1500->getOrganisationEnhedNiveauTo($funktionsId));
        $output->writeln('Magistrat: '. $sf1500->getPersonMagistrat($funktionsId));
    }

    private function getCertificateLocator(string $spec, string $passphrase): CertificateLocatorInterface
    {
        if (false !== strpos($spec, '=')) {
            parse_str($spec, $options);
            $resolver = $this->getCertificateOptionsResolver();
            $options = $resolver->resolve($options);

            $httpClient = new GuzzleAdapter(new Client());
            $requestFactory = new RequestFactory();

            $vaultToken = new VaultToken($httpClient, $requestFactory);

            $token = $vaultToken->getToken(
                $options['tenant-id'],
                $options['client-id'],
                $options['client-secret'],
            );

            $vault = new VaultSecret(
                $httpClient,
                $requestFactory,
                $options['name'],
                $token->getAccessToken()
            );

            return new AzureKeyVaultCertificateLocator(
                $vault,
                $options['secret'],
                $options['version'],
                $passphrase
            );
        } else {
            $certificatepath = realpath($spec) ?: null;
            if (null === $certificatepath) {
                throw new InvalidOptionException(sprintf('Invalid path %s', $spec));
            }
            return new FilesystemCertificateLocator($certificatepath, $passphrase);
        }
    }

    private function getCertificateOptionsResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver
            ->setRequired([
                'tenant-id',
                'client-id',
                'client-secret',
                'name',
                'secret',
                'version',
            ])
            ->setInfo('tenant-id', 'The tenant id')
            ->setInfo('client-id', 'The client id')
            ->setInfo('client-secret', 'The client secret')
            ->setInfo('name', 'The certificate name')
            ->setInfo('secret', 'The certificate secret')
            ->setInfo('version', 'The certificate version')
        ;

        return $resolver;
    }

    private function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired([
                'user-id',
                'certificate',
                'passphrase',
                'authority-cvr',
                'manager-type-id',
            ])
            ->setDefaults([
                'passphrase' => '',
                'production' => false,
                'manager' => false,
            ])
        ;
    }
}
