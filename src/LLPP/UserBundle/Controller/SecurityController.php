<?php

namespace LLPP\UserBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseController;

class SecurityController extends BaseController
{
    /**
     * Renders the login template with the given parameters. Overwrite this function in
     * an extended controller to provide additional data for the login template.
     *
     * @param array $data
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function renderLogin(array $data)
    {
        $fragment = $this->get('asynch.fragment');
        $data['frag'] = $fragment->isFragment();

        return $this->render('FOSUserBundle:Security:login.html.twig', $data);
    }
}