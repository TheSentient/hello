<?php

namespace LLPP\Admin\ContentManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LLPPAdminContentManagerBundle:Default:index.html.twig', array('name' => $name));
    }
}
