<?php

namespace LLPP\JournalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LLPP\JournalBundle\Entity\News;
use LLPP\JournalBundle\Form\NewsType;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LLPPJournalBundle:Default:index.html.twig', array('name' => $name));
    }

    public function getFormAction() {
    	$news = new News();
    	$form = $this->createForm(new NewsType(), $news);

    	return $this->render('LLPPJournalBundle:Default:form.html.twig', array('form' => $form->createView()));
    }
}
