<?php

namespace Grafill\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {

        return $this->render('LLPPIndexBundle:Home:page-content.html.twig', array(
        	'news' => $this->getAllNews()
        ));
    }
    
    public function getAllNews() {
    	return $this->getDoctrine()->getRepository('LLPPJournalBundle:News')->findAll();
    }
}
