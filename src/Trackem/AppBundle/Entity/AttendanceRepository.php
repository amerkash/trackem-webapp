<?php

namespace Trackem\AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AttendanceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AttendanceRepository extends EntityRepository
{
    // Find attendance given a session ID
    public function findAttendanceWhereConference($sessionId) {

        return $this->getEntityManager()->createQuery(
            '
                SELECT 
                    attendance
                FROM 
                    AppBundle:Attendance attendance
                WHERE 
                    attendance.sessionAttended= :sessionId
                ORDER BY 
                    attendance.dateOfAttendance
            '
        )
            ->setParameter('sessionId', $sessionId)
            ->getResult();
    }

    // Find attendance given an event ID
    public function findAttendanceWhereEvent($eventId) {

        return $this->getEntityManager()->createQuery(
            '
                SELECT 
                    attendance
                FROM 
                    AppBundle:Attendance attendance
                WHERE 
                    attendance.eventAttended= :eventId
                ORDER BY 
                    attendance.dateOfAttendance
            '
        )
            ->setParameter('eventId', $eventId)
            ->getResult();
    }

    // Find attendance given a user ID
    public function findAttendanceWhereUser($userId) {

        return $this->getEntityManager()->createQuery(
            '
                SELECT 
                    attendance
                FROM 
                    AppBundle:Attendance attendance
                WHERE 
                    attendance.userAttended= :userId
                ORDER BY 
                    attendance.dateOfAttendance
            '
        )
            ->setParameter('userId', $userId)
            ->getResult();
    }

    // Find valid attendance given a conference ID, start and end dates
    public function findAttendanceWhereConferenceBetweenDates($conferenceId, $startDate, $endDate) {

        return $this->getEntityManager()->createQuery(
            '
                SELECT 
                    attendance
                FROM 
                    AppBundle:Attendance attendance
                WHERE 
                    attendance.conferenceAttended= :conferenceId
                    AND 
                    attendance.dateOfAttendance>= :startDate
                    AND 
                    attendance.dateOfAttendance<= :endDate
                ORDER BY 
                    attendance.dateOfAttendance
            '
        )
            ->setParameter('conferenceId', $conferenceId)
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->getResult();
    }

    // Find invalid attendance given a conference ID, start and end dates
    public function findAttendanceNotValid($conferenceId, $startDate, $endDate) {

        return $this->getEntityManager()->createQuery(
            '
                SELECT 
                    attendance
                FROM 
                    AppBundle:Attendance attendance
                WHERE 
                    attendance.conferenceAttended= :conferenceId
                    AND 
                    (attendance.dateOfAttendance<= :startDate
                    OR 
                    attendance.dateOfAttendance>= :endDate)
                ORDER BY 
                    attendance.dateOfAttendance
            '
        )
            ->setParameter('conferenceId', $conferenceId)
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->getResult();
    }

}
