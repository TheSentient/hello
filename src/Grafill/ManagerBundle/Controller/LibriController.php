<?php

namespace Grafill\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Grafill\ManagerBundle\Entity\Articoli;

class LibriController extends Controller {

	public function indexAction() {

		return $this->render('GrafillManagerBundle:Libri:index.html.twig');

		
	}

	public function mostraAction($id) {

		$em = $this->getDoctrine()->getManager();

		$articolo = $em->getRepository('GrafillManagerBundle:Articoli')->find($id);

		return $this->render('GrafillManagerBundle:Libri:mostra.html.twig',array('articolo' => $articolo));


	}

	public function nuovoAction() {

		return $this->render('GrafillManagerBundle:Libri:nuovo.html.twig');

		
	}

	public function creaAction(Request $request) {

		

		
	}

	public function modificaAction($id) {

		return $this->render('GrafillManagerBundle:Libri:modifica.html.twig');
		
	}

	public function aggiornaAction(Request $request, $id ) {

		
	}

	public function cancellaAction(Request $request , $id ) {

		
	}

}

?>