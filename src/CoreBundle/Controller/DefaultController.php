<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homeAction()
    {
        return $this->render('CoreBundle:Default:home.html.twig');
    }

    public function contactAction()
    {
    	return $this->render('CoreBundle:Default:contact.html.twig');
    }
}
