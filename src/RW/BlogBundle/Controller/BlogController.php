<?php

namespace RW\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
	/**
	 * Voir la liste des chapitres
	 */
    public function indexAction()
    {
        return $this->render('RWBlogBundle:Blog:index.html.twig');
    }

    /**
     * Lire un chapitre en particulier
     */
    public function viewAction()
    {
    	return $this->render('RWBlogBundle:Blog:view.html.twig');
    }

    /**
     * Editer un chapitre pour le modifier ou le publier
     */
    public function editAction()
    {
    	return $this->render('RWBlogBundle:Blog:edit.html.twig');
    }
}
