# Serviceplatformen

Library for interacting with services on [Serviceplatformen](https://www.serviceplatformen.dk).

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

- Git 2.25 or above.
- PHP 7.3 or above.
- Composer 1.9 or above.

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
composer check-coding-standards/phpcs
```

PHP-CS-Fixer
```
composer check-coding-standards/php-cs-fixer 
```

### Static code analysis

Phan
```
composer static-code-analysis/phan
```

## Deployment

```
composer require itk-dev/serviceplatformen
```

## Built With

* [WsdlToPhp](https://github.com/WsdlToPhp)

## Contributing

### Pull Request Process

Before creating a pull request make sure you have considered the following:
- Updating the README.md with details of changes that are relevant.
- Updating the CHANGELOG.md with new features/changes/bug fixes etc.

You may merge the Pull Request in once you have the sign-off of one other developer, or if you do not have permission to do that, you may request the reviewer to merge it for you.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
