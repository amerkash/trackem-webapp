<?php

namespace Trackem\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Validator\Constraints\DateTime;
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

        $repository = $this->getDoctrine()->getRepository('AppBundle:Session');
        $attendees = $repository->findSession('1');


        dump($attendees);
        die();

     //   return $this->render('AppBundle:Default:index.html.twig');




//        $user = new User();
//        $user   ->setFirstName('Amer')
//                ->setLastName('Kachmar')
//                ->setEmailAddress('amer.kachmar@live.com')
//                ->setPassword('121212')
//                ->setPhoneNumber('70846445');
//
//        $em = $this->getDoctrine()->getManager();
//
//        $em->persist($user);
//
//        $em->flush();


        
    }
}
