<?php

namespace masterofcodeBundle\Command;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;
use FFMpeg\FFMpeg;
use FFMpeg\Format\Audio\Flac;
use masterofcodeBundle\Entity\Job;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ConvertCommand implements ConsumerInterface
{
    /**
     * @var EntityManager $container
     */
    private $container;

    public function __construct($entityManager)
    {
        $this->container = $entityManager;
    }

    /**
     * The event handler function for callback function.
     * Convert audion file
     * @param AMQPMessage $msg
     */
    public function execute(AMQPMessage $msg)
    {
        $session = (int)unserialize($msg->body)['session'];

        $job = $this->container
            ->getRepository('masterofcodeBundle:Job')
            ->find($session);

        if (!$job) {
            throw new NotFoundHttpException("System error: cannot use given session id");
        }

        $this->setStatus($job, 1);

        try {
            $format = new Flac();
            $format ->setAudioChannels(2)
                ->setAudioKiloBitrate(128);

            $audio = FFMpeg::create()
                ->open($job->getPath());
            $audio->save($format, $job->getDownloadPath());

        } catch (Exception $e) {

            $this->setStatus($job, 3);
            throw new NotFoundHttpException("System error: cannot convert file.");
        }

        $this->setStatus($job, 2);

        echo 'File ' . $job->getPath() . ' has been converted! Session #' . $job->getId()  . "\n";
    }

    /**
     * set status for session
     * @param Job $job
     * @param integer $status
     */
    private function setStatus(Job $job, $status)
    {
        $job->setStatus($status);
        $job->setLastUpdate();

        $em = $this->container;
        $em->persist($job);
        $em->flush();
    }
}