<?php

namespace Trackem\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attendance
 *
 * @ORM\Table(name="attendance")
 * @ORM\Entity(repositoryClass="Trackem\AppBundle\Entity\AttendanceRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Attendance
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
     * @ORM\Column(name="UserAttended", type="string", length=255)
     */
    private $userAttended;

    /**
     * @var string
     *
     * @ORM\Column(name="SessionAttended", type="string", length=255)
     */
    private $sessionAttended;

    /**
     * @var string
     *
     * @ORM\Column(name="EventAttended", type="string", length=255)
     */
    private $eventAttended;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateOfAttendance", type="datetime")
     */
    private $dateOfAttendance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EligibleAttendance", type="boolean", nullable=true)
     */
    private $eligibleAttendance;


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
     * Set userAttended
     *
     * @param string $userAttended
     * @return Attendance
     */
    public function setUserAttended($userAttended)
    {
        $this->userAttended = $userAttended;

        return $this;
    }

    /**
     * Get userAttended
     *
     * @return string 
     */
    public function getUserAttended()
    {
        return $this->userAttended;
    }

    /**
     * Set sessionAttended
     *
     * @param string $sessionAttended
     * @return Attendance
     */
    public function setSessionAttended($sessionAttended)
    {
        $this->sessionAttended = $sessionAttended;

        return $this;
    }

    /**
     * Get sessionAttended
     *
     * @return string 
     */
    public function getSessionAttended()
    {
        return $this->sessionAttended;
    }

    /**
     * Set eventAttended
     *
     * @param string $eventAttended
     * @return Attendance
     */
    public function setEventAttended($eventAttended)
    {
        $this->eventAttended = $eventAttended;

        return $this;
    }

    /**
     * Get eventAttended
     *
     * @return string 
     */
    public function getEventAttended()
    {
        return $this->eventAttended;
    }

    /**
     * Set dateOfAttendance
     *
     * @ORM\PrePersist
     * @return Attendance
     */
    public function setDateOfAttendance()
    {
        if(!isset($this->dateOfAttendance))
           $this->dateOfAttendance = new \DateTime();

        return $this;
    }

    /**
     * Get dateOfAttendance
     *
     * @return \DateTime 
     */
    public function getDateOfAttendance()
    {
        return $this->dateOfAttendance;
    }

    /**
     * Set eligibleAttendance
     *
     * @param boolean $eligibleAttendance
     * @return Attendance
     */
    public function setEligibleAttendance($eligibleAttendance)
    {
        $this->eligibleAttendance = $eligibleAttendance;

        return $this;
    }

    /**
     * Get eligibleAttendance
     *
     * @return boolean 
     */
    public function getEligibleAttendance()
    {
        return $this->eligibleAttendance;
    }
}
