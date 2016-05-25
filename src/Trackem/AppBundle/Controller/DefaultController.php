<?php

namespace Trackem\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($firstName, $count)
    {

        return $this->render('AppBundle:Default:index.html.twig',
            array(  'name' => $firstName,
                    'count' => $count));

    }
}
