<?php

namespace Trackem\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Validator\Constraints\DateTime;
use Trackem\AppBundle\Entity\Attendance;
use Trackem\AppBundle\Entity\Conference;
use Trackem\AppBundle\Entity\Event;
use Trackem\AppBundle\Entity\User;

class DefaultController extends Controller
{

    /**
     * Lists all Attendance entities.
     *
     * @Route("/", name="")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:User');
        $users = $repository->findUserByEmail('amer.kachmar@live.com');


        dump($users);
        die();

        return $this->render('AppBundle:Default:index.html.twig');


//        $this->fillUsers();
//        $this->fillAttendance();
//        $this->fillConference();
//        $this->fillEvent();


        
    }

//    public function fillUsers() {
//
//        $em = $this->getDoctrine()->getManager();
//
//        $user1 = new User();
//        $user1   ->setFirstName('Amer')
//            ->setLastName('Kachmar')
//            ->setEmailAddress('amer.kachmar@live.com')
//            ->setPassword('121212')
//            ->setPhoneNumber('70846445');
//
//        $user2 = new User();
//        $user2   ->setFirstName('Sergio')
//            ->setLastName('Ramos')
//            ->setEmailAddress('sergio.ramos@rmcf.com')
//            ->setPassword('sr4444')
//            ->setPhoneNumber('70332233');
//
//        $user3 = new User();
//        $user3   ->setFirstName('Eden')
//            ->setLastName('Hazard')
//            ->setEmailAddress('den.hazard@cfc.com')
//            ->setPassword('eh1010')
//            ->setPhoneNumber('03030303');
//
//        $user4 = new User();
//        $user4   ->setFirstName('Bastian')
//            ->setLastName('Schweinsteiger')
//            ->setEmailAddress('bastian.schweinsteiger@fcb.com')
//            ->setPassword('bs3333')
//            ->setPhoneNumber('71717122');
//
//        $user5 = new User();
//        $user5   ->setFirstName('Joe')
//            ->setLastName('Hart')
//            ->setEmailAddress('joe.hart@mcfc.com')
//            ->setPassword('jh1111')
//            ->setPhoneNumber('08081122');
//
//
//        $em->persist($user1);
//        $em->persist($user2);
//        $em->persist($user3);
//        $em->persist($user4);
//        $em->persist($user5);
//
//        $em->flush();
//    }
//
//    public function fillAttendance() {
//
//        $em = $this->getDoctrine()->getManager();
//
//        $attendance1 = new Attendance();
//        $attendance1   ->setUserAttended('1')
//                        ->setConferenceAttended('1')
//                        ->setEventAttended('1')
//                        ->setDateOfAttendance(new \DateTime("2016-05-26 09:23:00"));
//
//        $attendance2 = new Attendance();
//        $attendance2   ->setUserAttended('2')
//            ->setConferenceAttended('1')
//            ->setEventAttended('1')
//            ->setDateOfAttendance(new \DateTime("2016-05-27 08:44:00"));
//
//        $attendance3 = new Attendance();
//        $attendance3   ->setUserAttended('2')
//            ->setConferenceAttended('3')
//            ->setEventAttended('2')
//            ->setDateOfAttendance(new \DateTime("2016-05-28 17:37:00"));
//
//        $attendance4 = new Attendance();
//        $attendance4   ->setUserAttended('3')
//            ->setConferenceAttended('1')
//            ->setEventAttended('1')
//            ->setDateOfAttendance(new \DateTime("2016-05-31 13:29:00"));
//
//        $attendance5 = new Attendance();
//        $attendance5   ->setUserAttended('3')
//            ->setConferenceAttended('4')
//            ->setEventAttended('1')
//            ->setDateOfAttendance(new \DateTime("2016-05-26 07:31:00"));
//
//        $attendance6 = new Attendance();
//        $attendance6   ->setUserAttended('4')
//            ->setConferenceAttended('1')
//            ->setEventAttended('1')
//            ->setDateOfAttendance(new \DateTime("2016-05-28 12:23:00"));
//
//        $attendance7 = new Attendance();
//        $attendance7   ->setUserAttended('4')
//            ->setConferenceAttended('2')
//            ->setEventAttended('2')
//            ->setDateOfAttendance(new \DateTime("2016-05-30 08:21:00"));
//
//        $attendance8 = new Attendance();
//        $attendance8   ->setUserAttended('5')
//            ->setConferenceAttended('4')
//            ->setEventAttended('1')
//            ->setDateOfAttendance(new \DateTime("2016-05-29 17:42:00"));
//
//        $attendance9 = new Attendance();
//        $attendance9   ->setUserAttended('5')
//            ->setConferenceAttended('3')
//            ->setEventAttended('2')
//            ->setDateOfAttendance(new \DateTime("2016-05-23 12:30:00"));
//
//
//        $em->persist($attendance1);
//        $em->persist($attendance2);
//        $em->persist($attendance3);
//        $em->persist($attendance4);
//        $em->persist($attendance5);
//        $em->persist($attendance6);
//        $em->persist($attendance7);
//        $em->persist($attendance8);
//        $em->persist($attendance9);
//
//        $em->flush();
//    }
//
//    public function fillConference() {
//
//        $em = $this->getDoctrine()->getManager();
//
//        $conference1 = new Conference();
//        $conference1   ->setBelongToEvent('1')
//            ->setDateStarted(new \DateTime("2016-05-26 06:15:16"))
//            ->setDateEnded(new \DateTime("2016-05-27 03:07:07"))
//            ->setStatus('1');
//
//        $conference2 = new Conference();
//        $conference2   ->setBelongToEvent('2')
//            ->setDateStarted(new \DateTime("2016-05-25 21:53:53"))
//            ->setDateEnded(new \DateTime("2016-05-28 09:22:00"))
//            ->setStatus('1');
//
//        $conference3 = new Conference();
//        $conference3   ->setBelongToEvent('2')
//            ->setDateStarted(new \DateTime("2016-05-30 05:13:00"))
//            ->setDateEnded(new \DateTime("2016-05-31 04:12:00"))
//            ->setStatus('1');
//
//        $conference4 = new Conference();
//        $conference4   ->setBelongToEvent('1')
//            ->setDateStarted(new \DateTime("2016-05-31 09:28:00"))
//            ->setDateEnded(new \DateTime("2016-06-01 09:31:00"))
//            ->setStatus('1');
//
//        $em->persist($conference1);
//        $em->persist($conference2);
//        $em->persist($conference3);
//        $em->persist($conference4);
//
//        $em->flush();
//    }
//
//    public function fillEvent() {
//
//        $em = $this->getDoctrine()->getManager();
//
//        $event1 = new Event();
//        $event1   ->setName('Champions League')->setNumber('2016')->setCapacity('4')->setCreatedBy('1')->setPassword('cl2016');
//
//        $event2 = new Event();
//        $event2   ->setName('Euro Cup')->setNumber('2016')->setCapacity('4')->setCreatedBy('2')->setPassword('ec2016');
//
//
//        $em->persist($event1);
//        $em->persist($event2);
//
//        $em->flush();
//    }

}
