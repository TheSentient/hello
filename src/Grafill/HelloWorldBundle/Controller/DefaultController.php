<?php

namespace Grafill\HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GrafillHelloWorldBundle:Default:index.html.twig');
    }
}
