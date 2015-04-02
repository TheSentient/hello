<?php

namespace LLPP\JournalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LLPP\JournalBundle\Entity\HyperlinkPagina;
use LLPP\JournalBundle\Form\HyperlinkPaginaType;
use Alangemar\CrudHandlerBundle\Controller\CrudHandlerController;

/**
 * HyperlinkPagina controller.
 *
 */
class HyperlinkPaginaController extends CrudHandlerController
{
    protected $bundleName = 'LLPPJournalBundle:HyperlinkPagina:';
    protected $routePrefix = 'hyperlinkpagina';
    protected $entityFQN = HyperlinkPagina::ENTITY;
    
    public function __construct()
    {
        parent::__construct();
    
        $this->table_headers_index = array('Data', 'URL');
        $this->entity_fields_index = array('nome', 'url');
        $this->table_headers_show = $this->table_headers_index;
        $this->entity_fields_show = $this->entity_fields_index;
    }
    
    protected function getFormType()
    {
        return new HyperlinkPaginaType();
    }    
}
