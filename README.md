# Serviceplatformen

Library for interacting with services on [Serviceplatformen](https://www.serviceplatformen.dk).

## Supported services

* [CPR replika opslag (SF1520_3.6): https://digitaliseringskataloget.dk/integration/sf1520?version=3.6](https://digitaliseringskataloget.dk/integration/sf1520?version=3.6)
* [CVR-Online (SF1530_2.4): https://digitaliseringskataloget.dk/integration/sf1530](https://digitaliseringskataloget.dk/integration/sf1530)

## Updating resources and classes

We use
[WsdlToPhp/PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator) to
generate PHP classes for talking to SOAP services. To update
[resources](./resources) and [generated classes](./generated-classes), run

```sh
docker run --rm --volume $PWD:/app -it itkdev/php7.4-fpm:latest composer2 install
# Update WSDL resources.
docker run --rm --volume $PWD:/app -it itkdev/php7.4-fpm:latest bin/generate resources
# Generate PHP classes from WSDL resources.
docker run --rm --volume $PWD:/app -it itkdev/php7.4-fpm:latest bin/generate classes
```

## Getting Started

These instructions will get you a copy of the project up and running on your
local machine for development and testing purposes. See deployment for notes on
how to deploy the project on a live system.

### Prerequisites

* Git 2.25 or above.
* PHP 7.3 or above.
* Composer 1.9 or above.

### Installing

Clone the repository:

```sh
git clone https://github.com/itk-dev/serviceplatformen
```

Install the dependencies:

```sh
cd serviceplatformen

composer install
```

## Running the tests

Unit tests:

```sh
composer tests/unit
```

End to end tests:

```sh
composer tests/end-to-end
```

### And coding style tests

PHP_CodeSniffer

```sh
composer coding-standards-check/phpcs
```

PHP-CS-Fixer

```sh
composer coding-standards-check/php-cs-fixer
```

### Static code analysis

Phan

```sh
composer static-code-analysis/phan
```

## Deployment

```sh
composer require itk-dev/serviceplatformen
```

## Usage

### Certificate stored on local filesystem

```php
<?php

require_once 'vendor/autoload.php';

use ItkDev\Serviceplatformen\Certificate\FilesystemCertificateLocator;
use ItkDev\Serviceplatformen\Request\InvocationContextRequestGenerator;
use ItkDev\Serviceplatformen\Service\PersonBaseDataExtendedService;

$certificateLocator = new FilesystemCertificateLocator(__DIR__.'path_to_certificate.pem', 'passphrase if any');

$pathToWsdl = __DIR__.'/resources/person-base-data-extended-service-contract/wsdl/context/PersonBaseDataExtendedService.wsdl';

$options = [
    'local_cert' => $certificateLocator->getAbsolutePathToCertificate(),
    'passphrase' => $certificateLocator->getPassphrase(),
    'location' => 'https://url.to.service.endpoint'
];

$soapClient = new SoapClient($pathToWsdl, $options);

$requestGenerator = new InvocationContextRequestGenerator(
    'xxxx', // Service agreement UUID
    'xxxx', // User system UUID
    'xxxx', // Service UUID
    'xxxx' // User UUID
);

$service = new PersonBaseDataExtendedService($soapClient, $requestGenerator);

$response = $service->personLookup('1234567891');

var_dump($response);
```

### Certificate stored in Azure Key Vault

See [Storing certificates in the
vault](https://github.com/itk-dev/AzureKeyVaultPhp#storing-certificates-in-the-vault)
for details on storing a certificate in the Azure Key Vault.

```php
<?php

require_once 'vendor/autoload.php';

use ItkDev\AzureKeyVault\Authorisation\VaultToken;
use ItkDev\AzureKeyVault\KeyVault\VaultSecret;
use ItkDev\Serviceplatformen\Certificate\AzureKeyVaultCertificateLocator;
use ItkDev\Serviceplatformen\Request\InvocationContextRequestGenerator;
use ItkDev\Serviceplatformen\Service\PersonBaseDataExtendedService;

$vaultToken = new VaultToken(
    $httpClient, // PSR-18 compatible http client
    $requestFactory // PSR-17 compatible request factory
);

$token = $vaultToken->getToken(
    'xxxx', // Azure tenant id
    'xxxx', // Client id (azure application id)
    'xxxx' // Client secret
);

$vault = new VaultSecret(
    $httpClient, // PSR-18 compatible http client
    $requestFactory, // PSR-17 compatible request factory
    'testVault', // Name of vault
    $token->getAccessToken()
);

$certificateLocator = new AzureKeyVaultCertificateLocator(
    $vault,
    'xxxx', // Name of the certificate
    'xxxx', // Version of the certificate
    'yyyy' // optional passphrase for the certificate
);

$pathToWsdl = __DIR__.'/resources/person-base-data-extended-service-contract/wsdl/context/PersonBaseDataExtendedService.wsdl';

$options = [
    'local_cert' => $certificateLocator->getAbsolutePathToCertificate(),
    'passphrase' => $certificateLocator->getPassphrase(),
    'location' => 'https://url.to.service.endpoint'
];

$soapClient = new SoapClient($pathToWsdl, $options);

$requestGenerator = new InvocationContextRequestGenerator(
    'xxxx', // Service agreement UUID
    'xxxx', // User system UUID
    'xxxx', // Service UUID
    'xxxx' // User UUID
);

$service = new PersonBaseDataExtendedService($soapClient, $requestGenerator);

$response = $service->personLookup('1234567891');

var_dump($response);
```

## Contributing

### Pull Request Process

Before creating a pull request make sure you have considered the following:

* Updating the README.md with details of changes that are relevant.
* Updating the CHANGELOG.md with new features/changes/bug fixes etc.

You may merge the Pull Request in once you have the sign-off of one other
developer, or if you do not have permission to do that, you may request the
reviewer to merge it for you.

### Coding standards

```sh
docker run --rm --volume ${PWD}:/app itkdev/php7.4-fpm:latest composer coding-standards-check
```

Apply coding standards:

```sh
docker run --rm --volume ${PWD}:/app itkdev/php7.4-fpm:latest composer coding-standards-apply
```

```sh
docker run --volume ${PWD}:/app --workdir /app node:16 yarn install
docker run --volume ${PWD}:/app --workdir /app node:16 yarn coding-standards-check
```

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available,
see the [tags on this repository](https://github.com/your/project/tags).

## License

This project is licensed under the MIT License - see the
[LICENSE.md](LICENSE.md) file for details
