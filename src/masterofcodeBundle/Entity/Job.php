<?php

namespace masterofcodeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 */
class Job
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $path;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $mime;

    /**
     * @var \DateTime
     */
    private $startTime;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Job
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Get download path
     *
     * @return string
     */
    public function getDownloadPath()
    {
        return __DIR__.'/../Resources/userData/' . $this->getId() . '.flac';
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Job
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set mime
     *
     * @param string $mime
     * @return Job
     */
    public function setMime($mime)
    {
        $this->mime = $mime;

        return $this;
    }

    /**
     * Get mime
     *
     * @return string 
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * Set last update
     *
     * @param \DateTime $startTime
     * @return Job
     */
    public function setLastUpdate()
    {
        $this->startTime = new \DateTime("now");

        return $this;
    }

    /**
     * Get last update
     *
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->startTime->format('d/m/Y H:i:s');
    }

    /**
     * Get get message of status
     *
     * @return string
     */
    public function getStatusMessage()
    {
        $statuses = [
            0 => 'Wait',
            1 => 'In progress',
            2 => 'Done',
            3 => 'Error'
        ];

        return $statuses[$this->getStatus()];
    }
}
