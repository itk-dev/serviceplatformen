<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Command\SF1500;

use ItkDev\Serviceplatformen\Certificate\FilesystemCertificateLocator;
use ItkDev\Serviceplatformen\Service\SF1500\SF1500;
use ItkDev\Serviceplatformen\Service\SF1500\SF1500XMLBuilder;
use ItkDev\Serviceplatformen\Service\SF1514\SF1514;
use ItkDev\Serviceplatformen\Service\SoapClient;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccessor;

class SF1500LookupCommand extends Command
{
    protected static $defaultName = 'serviceplatformen:sf1500:lookup';

    private array $inputOptions = [];

    protected function configure()
    {
        $inputOptions = [
            new InputOption('production', null, InputOption::VALUE_NONE, 'production mode'),
            new InputOption('user-id', null, InputOption::VALUE_REQUIRED, 'user id'),
            new InputOption('certificate', null, InputOption::VALUE_REQUIRED, 'path to certificate'),
            new InputOption('passphrase', null, InputOption::VALUE_OPTIONAL, 'passphrase for certificate'),
            new InputOption('authority-cvr', null, InputOption::VALUE_REQUIRED, 'authority cvr', '55133018'),
            new InputOption('sts-applies-to', null, InputOption::VALUE_REQUIRED, 'service SAML token should apply to'),
        ];
        $this->setDefinition(new InputDefinition($inputOptions));

        $this->setDescription('Helper script for testing “SF1514: Sikkerhed - Hent Token fra Security Token Service”.');

        $help = <<<HELP

user-id:
    a user id, i.e.
    ffdb7559-2ad3-4662-9fd4-d69859939b66
    
certificate:
    should be path from project root to file containing the certificate in p12 format, i.e.
    '/app/src/Command/SF1514/certificate.p12'
 
passphrase:
    the passphrase for p12 certificate, i.e.
    'XYZ'
    defaults to the empty string if not provided

sts-applies-to:
    the service SAML token should grant access to, i.e. SF1500 Organisation
    'http://stoettesystemerne.dk/service/organisation/3'

authority-cvr:
    the authority cvr for which certificate is granted, i.e. Aarhus Kommune
    '55133018'
HELP;

        $this->setHelp($help);

        // Index by option name.
        $this->inputOptions = array_combine(array_map(fn (InputOption $option) => $option->getName(), $inputOptions), $inputOptions);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);
        $options = $resolver->resolve(
            array_filter(array_filter($input->getOptions()), fn ($name) => isset($this->inputOptions[$name]), ARRAY_FILTER_USE_KEY)
        );

        $userId = $options['user-id'];

        $propertyAccessor = new PropertyAccessor();

        $certificateLocator = new FilesystemCertificateLocator($options['certificate'], $options['passphrase']);

        $soapClient = new SoapClient([
            'cache_expiration_time' => 'tomorrow 7am',
        ]);

        $options = [
            'certificate_locator' => $certificateLocator,
            'authority_cvr' => $options['authority-cvr'],
            'sts_applies_to' => $options['sts-applies-to'],
            'test_mode' => !$options['production'],
        ];

        $sf1514 = new SF1514($soapClient, $options);

        $sf1500XMLBuilder = new SF1500XMLBuilder();

        $sf1500 = new SF1500($soapClient, $sf1514, $sf1500XMLBuilder, $propertyAccessor, $options);

        // Use a lookup on name as an indicator for whether user-id exists or not.
        $name = $sf1500->getPersonName($userId);

        if (!$name) {
            $output->writeln(sprintf('Could not find any user with the id: %s', $userId));
            return static::SUCCESS;
        }

        $organisationFunktionsId = $sf1500->soegOrganisationFunktioner($userId, null, null, null);

        // Select just one of the organisation funktioner(ansættelser).
        if (is_array($organisationFunktionsId)) {
            $organisationFunktionsId = reset($organisationFunktionsId);
        }

        $output->writeln('Name: '. $sf1500->getPersonName($userId));
        $output->writeln('Phone: '. $sf1500->getPersonPhone($userId));
        $output->writeln('Email: '. $sf1500->getPersonEmail($userId));
        $output->writeln('Location: '. $sf1500->getPersonLocation($userId));

        if (!$organisationFunktionsId) {
            $output->writeln('Could not find any organisation funktion(ansættelse) for provided user id.');
        } else {
            $output->writeln('Organisation funktion: '. $organisationFunktionsId);
            $output->writeln('Organisations enhed: '. $sf1500->getOrganisationEnhed($organisationFunktionsId));
            $output->writeln('Organisations adresse: '. $sf1500->getOrganisationAddress($organisationFunktionsId));
            $output->writeln('Organisations enhed niveau 2: '. $sf1500->getOrganisationEnhedNiveauTo($organisationFunktionsId));
            $output->writeln('Magistrat: '. $sf1500->getPersonMagistrat($organisationFunktionsId));
        }

        return static::SUCCESS;
    }

    private function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired([
                'user-id',
                'certificate',
                'passphrase',
                'authority-cvr',
                'sts-applies-to',
            ])
            ->setDefaults([
                'passphrase' => '',
                'production' => false,
            ])
        ;
    }
}
