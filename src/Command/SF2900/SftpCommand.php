<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\Command\SF2900;

use Composer\Console\Input\InputArgument;
use Composer\Console\Input\InputOption;
use phpseclib3\Crypt\PublicKeyLoader;
use phpseclib3\Net\SFTP;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'serviceplatformen:sf2900:sftp', description: 'Helper script for SFTP.')]
final class SftpCommand extends Command
{
    protected function configure()
    {
        $this
            ->addArgument('action', InputArgument::REQUIRED, 'The action.', suggestedValues: ['ls'])
            ->addOption('username', null, InputOption::VALUE_REQUIRED, 'Username')
            ->addOption('private-key', null, InputOption::VALUE_REQUIRED, 'Private key')
            ->addOption('private-key-password', null, InputOption::VALUE_REQUIRED, 'Optional private key password')
        ;
    }

    public function execute(
        InputInterface $input,
        OutputInterface $output,
    ): int {
        $io = new SymfonyStyle($input, $output);

        $action = $input->getArgument('action');
        $username = $input->getOption('username');
        if (empty($username)) {
            throw new \InvalidArgumentException('Username is required.');
        }
        $privateKey = $input->getOption('private-key');
        if (empty($privateKey)) {
            throw new \InvalidArgumentException('Private key is required.');
        }
        $privateKeyPassword = $input->getOption('private-key-password');

        // https://digitaliseringskataloget.dk/files/integration-files/120720221330/Kom%20godt%20i%20gang%20-%20filudveksling%20%28SFTP%29.pdf#page=6
        $key = PublicKeyLoader::load(file_get_contents($privateKey), $privateKeyPassword);

        $sftp = new SFTP('sftpexttest.serviceplatformen.dk');
        if (!$sftp->login($username, $key)) {
            throw new RuntimeException(sprintf('Cannot log in to SFTP server: %s', $sftp->getLastError()));
        }

        $dir = 'OUT';
        $sftp->chdir($dir);

        $filename = 'rimi-itk.txt';
        if (!$sftp->put($filename, 'Hmm …')) {
            throw new RuntimeException(sprintf('Error putting file %s: %s', $filename, $sftp->getLastError()));
        }

        $files = $sftp->nlist();
        foreach ($files as $file) {
            $io->writeln($file);
        }

        $content = $sftp->get($filename);
        if (false === $content) {
            throw new RuntimeException(sprintf('Error getting file %s: %s', $filename, $sftp->getLastError()));
        }

        $io->writeln($content);

        return Command::SUCCESS;
    }

    private function ls(InputInterface $input, OutputInterface $output): int
    {
        $sftp = new SFTP('localhost');
        $username = '???';
        $key = PublicKeyLoader::load(file_get_contents('privatekey'));

        $sftp->login($username);

        return Command::SUCCESS;
    }
}
