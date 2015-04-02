<?php

namespace LLPP\MyTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        /*
    	$products = $this->getDoctrine()
    	   	->getRepository('LLPPMyTestBundle:ArchivioProdotti')
    	   	->findAll();

    	if(!$products){
    		throw $this->createNotFoundException('No products found.');
    	}
        */
        
        $products = array();
        
        return $this->render('LLPPMyTestBundle:Default:index.html.twig', array('products' => $products));
    }
}
