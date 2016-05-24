<?php

namespace Trackem\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity(repositoryClass="Trackem\AppBundle\Entity\SessionRepository")
 */
class Session
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="BelongToEvent", type="string", length=255)
     */
    private $belongToEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateStarted", type="datetime")
     */
    private $dateStarted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnded", type="datetime")
     */
    private $dateEnded;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Status", type="boolean")
     */
    private $status;


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
     * Set belongToEvent
     *
     * @param string $belongToEvent
     * @return Session
     */
    public function setBelongToEvent($belongToEvent)
    {
        $this->belongToEvent = $belongToEvent;

        return $this;
    }

    /**
     * Get belongToEvent
     *
     * @return string 
     */
    public function getBelongToEvent()
    {
        return $this->belongToEvent;
    }

    /**
     * Set dateStarted
     *
     * @param \DateTime $dateStarted
     * @return Session
     */
    public function setDateStarted($dateStarted)
    {
        $this->dateStarted = $dateStarted;

        return $this;
    }

    /**
     * Get dateStarted
     *
     * @return \DateTime 
     */
    public function getDateStarted()
    {
        return $this->dateStarted;
    }

    /**
     * Set dateEnded
     *
     * @param \DateTime $dateEnded
     * @return Session
     */
    public function setDateEnded($dateEnded)
    {
        $this->dateEnded = $dateEnded;

        return $this;
    }

    /**
     * Get dateEnded
     *
     * @return \DateTime 
     */
    public function getDateEnded()
    {
        return $this->dateEnded;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Session
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
