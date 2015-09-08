<?php

namespace masterofcodeBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class StatusCommand extends ContainerAwareCommand
{
    /**
     * configure command line for getting status of session
     */
    protected function configure()
    {
        $this
            ->setName('client:getStatus')
            ->setDescription('Get status of entered session')
            ->addArgument(
                'sessionId',
                InputArgument::REQUIRED,
                'Enter session id'
            )
        ;
    }

    /**
     * get info about session status
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $session = $input->getArgument('sessionId');

        $job = $this->getContainer()
            ->get('doctrine')
            ->getRepository('masterofcodeBundle:Job')
            ->find($session);

        $output->writeln(
            $job ? 'The status of your conversion: ' . $job->getStatusMessage() . ' (last update: ' . $job->getLastUpdate() . ')'
                : 'Printed session does not exist!'
        );
    }
}