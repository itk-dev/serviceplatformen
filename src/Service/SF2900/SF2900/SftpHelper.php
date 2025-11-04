<?php

namespace ItkDev\Serviceplatformen\Service\SF2900\SF2900;

use ItkDev\Serviceplatformen\Service\Exception\SftpException;
use phpseclib3\Crypt\PublicKeyLoader;
use phpseclib3\Net\SFTP;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SftpHelper
{
    public const string INCOMING_FOLDER = '/IN/';
    public const string OUTGOING_FOLDER = '/OUT/';

    private readonly array $options;

    public function __construct(array $options)
    {
        $this->options = static::resolveOptions(new OptionsResolver())
            ->resolve($options);
    }

    /**
     * Put file contents in outgoing folder on SFTP server.
     */
    public function putFile(string $file, ?string $filename = null): string
    {
        if (!is_readable($file)) {
            throw new SftpException(sprintf('Cannot read file %s', $file));
        }
        $contents = file_get_contents($file);

        return $this->putContents($contents, $filename ?? basename($file));
    }

    /**
     * Put contents in outgoing folder on SFTP server.
     */
    public function putContents(string $contents, string $filename): string
    {
        $sftp = $this->getSftp();
        $uniqueFilename = uniqid('sf2900_').'_'.$filename;
        if (!$sftp->put($uniqueFilename, $contents)) {
            throw new SftpException(sprintf('Error putting file %s: %s', $filename, $sftp->getLastError()));
        }

        return $uniqueFilename;
    }

    public function getFiles(string $dir, bool $recursive = false): array
    {
        $sftp = $this->getSftp();
        $sftp->chdir($dir);
        $files = $sftp->nlist(recursive: $recursive);
        if (false === $files) {
            throw new SftpException(sprintf('Cannot list files: %s', $sftp->getLastError()));
        }

        return $files;
    }

    public static function resolveOptions(OptionsResolver $resolver): OptionsResolver
    {
        $resolver
            ->setRequired('host')
            ->setAllowedTypes('host', 'string')
            ->setDefault('port', 22)
            ->setAllowedTypes('port', 'int')
            ->setRequired('username')
            ->setAllowedTypes('username', 'string')
            ->setRequired('private-key')
            ->setAllowedTypes('private-key', 'string')
            ->setAllowedValues('private-key', static fn (string $filename) => is_file($filename))
            ->setDefault('private-key-password', null)
            ->setAllowedTypes('private-key-password', 'string|null');

        return $resolver;
    }

    private function getSftp(): SFTP
    {
        $username = $this->options['username'];
        if (empty($username)) {
            throw new SftpException('SFTP username is required.');
        }
        $privateKey = $this->options['private-key'];
        if (empty($privateKey)) {
            throw new SftpException('Private SFTP key is required.');
        }
        $privateKeyPassword = $this->options['private-key-password'];

        // https://digitaliseringskataloget.dk/files/integration-files/120720221330/Kom%20godt%20i%20gang%20-%20filudveksling%20%28SFTP%29.pdf#page=6
        $key = PublicKeyLoader::load(file_get_contents($privateKey), $privateKeyPassword);

        $host = $this->options['host'];
        $sftp = new SFTP($host, $this->options['port']);
        if (!$sftp->login($username, $key)) {
            throw new SftpException(sprintf('Cannot log in to SFTP host %s: %s', $host, $sftp->getLastError()));
        }

        $dir = self::OUTGOING_FOLDER;
        if (!$sftp->chdir($dir)) {
            throw new SftpException(sprintf('Cannot change SFTP directory to %s: %s', $dir, $sftp->getLastError()));
        }

        return $sftp;
    }
}
