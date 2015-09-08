<?php

namespace masterofcodeBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;

class DownloadCommand extends ContainerAwareCommand
{
    /**
     * configure command line for downloading file after convert
     */
    protected function configure()
    {
        $this
            ->setName('client:downloadFile')
            ->setDescription('Download converted file')
            ->addArgument(
                'sessionId',
                InputArgument::REQUIRED,
                'Enter session id'
            )
            ->addArgument(
                'folderPath',
                InputArgument::REQUIRED,
                'Enter folder path for copy converted file'
            )
        ;
    }

    /**
     * download file with use command line
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $fs = new Filesystem();

        $session = $input->getArgument('sessionId');
        $job = $this->getContainer()
            ->get('doctrine')
            ->getRepository('masterofcodeBundle:Job')
            ->find($session);

        if (!$job) {
            $output->writeln("Printed session does not exist!");
            return;
        }

        $folderPath = $input->getArgument('folderPath');

        if (!$fs->exists($folderPath)) {
            $output->writeln("Your chosen directory is not found!");
            return;
        }

        try {
            $fs->copy($job->getDownloadPath(), $folderPath . $job->getId() . '.flac');

        } catch (Exception $e) {

            $output->writeln("System error! Incorrect address specified folder or you have no rights");
            return;
        }
        $output->writeln("File was loaded!");
    }
}