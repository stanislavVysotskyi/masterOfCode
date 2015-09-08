<?php

namespace masterofcodeBundle\Command;

use masterofcodeBundle\Entity\Job;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;

class SetCommand extends ContainerAwareCommand
{
    /**
     * configure command line for setting file for convert
     */
    protected function configure()
    {
        $this
            ->setName('client:setFile')
            ->setDescription('Set file for conversion')
            ->addArgument(
                'filePath',
                InputArgument::REQUIRED,
                'Enter file path for use file'
            )
        ;
    }

    /**
     * Convert audio file to flac format (with use rabbitMQ server)
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $fs = new Filesystem();
        $filePath = $input->getArgument('filePath');

        if ($fs->exists($filePath)) {
            $mimes = [
                'audio/mpeg',
                'audio/mp4',
                'audio/vnd.wav'
            ];

            $fileMime = mime_content_type($filePath);

            if (in_array($fileMime, $mimes)) {
                $job = new Job();
                $job->setPath($filePath);
                $job->setMime($fileMime);
                $job->setLastUpdate();
                $job->setStatus(0);

                $em = $this->getContainer()->get('doctrine')->getManager();
                $em->persist($job);
                $em->flush();

                $producer = $this->getContainer()->get('old_sound_rabbit_mq.test_producer');
                $producer->publish(serialize(array('session'=>$job->getId())));

                $message = 'Your file has been sent to the processing! Session id: ' . $job->getId();
            } else {
                $message = 'Your selected file is not supported!';
            }
        } else {
            $message = 'File not found!!!';
        }

        $output->writeln($message);
    }
}