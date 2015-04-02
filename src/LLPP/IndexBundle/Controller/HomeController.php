<?php

namespace LLPP\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction() {
      /*

$articoliRepo =  $em->getRepository('LLPPIndexBundle:Articoli');
$qb = $articoliRepo->createQueryBuilder('a');
$qb->orderBy('a.ordine', 'DESC')->setMaxResults(7);
$entities = $qb->getQuery()->getResults();

      */

            $dataoggi = date('Y-m-d');

            $data_stabilita = date('Y-m-d', strtotime("-30 days"));

            $datasettimana = date('Y-m-d', strtotime("-7 days"));


            $em = $this->getDoctrine()->getManager();



            $commenti = $em->createQueryBuilder()->from('LLPPIndexBundle:Articoli', 'i')->select("i.commenti")->join("LLPPIndexBundle:CommentiArticoli", 'e')->add("order By","Count(i.commenti)")->getQuery()->getResult();

            $articoliRepo =  $em->getRepository('LLPPIndexBundle:Articoli');
            $qb = $articoliRepo->createQueryBuilder('a');
            $qb->orderBy('a.ordine', 'DESC')->setMaxResults(7);
            $qb2 = $articoliRepo->createQueryBuilder('b')->orderBy('b.letto', 'DESC')->setMaxResults(4);
            $qb3 = $articoliRepo->createQueryBuilder('c')->where('c.data BETWEEN :pos1 AND :pos2')->setParameter('pos1', $data_stabilita)->setParameter('pos2', $dataoggi)->setMaxResults(4);
            $qb4 = $articoliRepo->createQueryBuilder('d')->where('d.data BETWEEN :pos1 AND :pos2')->setParameter('pos1', $datasettimana)->setParameter('pos2', $dataoggi)->setMaxResults(4);
            $entities = $qb->getQuery()->getResult();
            $letto  = $qb2->getQuery()->getResult();
            $mese = $qb3->getQuery()->getResult();
            $settimana = $qb4->getQuery()->getResult();


            return $this->render('LLPPIndexBundle:Home:page-content.html.twig',array('articolo' => $entities , 'letto' => $letto , 'mese' => $mese ,'settimana' => $settimana ,'commenti' => $commenti ));    
    }

}
