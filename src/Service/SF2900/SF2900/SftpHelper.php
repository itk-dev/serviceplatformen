<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service\SF2900\SF2900;

use ItkDev\Serviceplatformen\Service\Exception\SftpException;
use phpseclib3\Crypt\PublicKeyLoader;
use phpseclib3\Net\SFTP;

class SftpHelper
{
    public const string INCOMING_FOLDER = '/IN/';
    public const string OUTGOING_FOLDER = '/OUT/';

    public function __construct(
        // These options have been resolved by the parent SF2900 instance.
        private readonly array $options,
    ) {
    }

    /**
     * Put file contents in outgoing folder on SFTP server.
     */
    public function putFile(string $file, ?string $filename = null, ?string $sftpFilename = null): string
    {
        if (!is_readable($file)) {
            throw new SftpException(sprintf('Cannot read file %s', $file));
        }
        $contents = file_get_contents($file);

        return $this->putContents($contents, $filename ?? basename($file), $sftpFilename);
    }

    /**
     * Put contents in outgoing folder on SFTP server.
     */
    public function putContents(string $contents, string $filename, ?string $sftpFilename = null): string
    {
        $sftp = $this->getSftp();
        $sftpFilename ??= uniqid('sf2900_').'_'.$filename;
        if (!$sftp->put($sftpFilename, $contents)) {
            throw new SftpException(sprintf('Error putting file %s: %s', $filename, $sftp->getLastError()));
        }

        return $sftpFilename;
    }

    /**
     * Get contents from ingoing folder on SFTP server.
     */
    public function getContents(string $filename, string $dir = self::INCOMING_FOLDER, bool $delete = false, bool|string $localFile = false): string
    {
        $sftp = $this->getSftp($dir);
        $contents = $sftp->get($filename, local_file: $localFile);
        if (false === $contents) {
            throw new SftpException(sprintf('Error getting contents of file %s: %s', $filename, $sftp->getLastError()));
        }

        if ($delete) {
            $this->delete($filename, $dir);
        }

        return $contents;
    }

    public function delete(string $filename, string $dir = self::INCOMING_FOLDER)
    {
        $sftp = $this->getSftp($dir);
        if (!$sftp->delete($filename)) {
            throw new SftpException(sprintf('Error deleting file %s: %s', $filename, $sftp->getLastError()));
        }
    }

    public function getFiles(string $dir, bool $recursive = false, bool $raw = false): array
    {
        $sftp = $this->getSftp($dir);
        $files = $raw ? $sftp->rawlist(recursive: $recursive) : $sftp->nlist(recursive: $recursive);
        if (false === $files) {
            throw new SftpException(sprintf('Cannot list files: %s', $sftp->getLastError()));
        }

        return $files;
    }

    private function getSftp(string $dir = self::OUTGOING_FOLDER): SFTP
    {
        $username = $this->options['username'];
        if (empty($username)) {
            throw new SftpException('SFTP username is required.');
        }
        $privateKey = $this->options['private_key'];
        if (empty($privateKey)) {
            throw new SftpException('Private SFTP key is required.');
        }
        $privateKeyPassword = $this->options['private_key_passphrase'];

        // https://digitaliseringskataloget.dk/files/integration-files/120720221330/Kom%20godt%20i%20gang%20-%20filudveksling%20%28SFTP%29.pdf#page=6
        $key = PublicKeyLoader::load($privateKey, $privateKeyPassword ?? '');

        $host = $this->options['host'];
        $sftp = new SFTP($host, $this->options['port']);
        if (!$sftp->login($username, $key)) {
            throw new SftpException(sprintf('Cannot log in to SFTP host %s: %s', $host, $sftp->getLastError()));
        }

        if (!$sftp->chdir($dir)) {
            throw new SftpException(sprintf('Cannot change SFTP directory to %s: %s', $dir, $sftp->getLastError()));
        }

        return $sftp;
    }
}
