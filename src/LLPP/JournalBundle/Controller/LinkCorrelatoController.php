<?php

namespace LLPP\JournalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LLPP\JournalBundle\Entity\LinkCorrelato;
use LLPP\JournalBundle\Form\LinkCorrelatoType;
use Alangemar\CrudHandlerBundle\Controller\CrudHandlerController;

/**
 * LinkCorrelato controller.
 *
 */
class LinkCorrelatoController extends CrudHandlerController
{
    protected $bundleName = 'LLPPJournalBundle:LinkCorrelato:';
    protected $routePrefix = 'linkcorrelato';
    protected $entityFQN = LinkCorrelato::ENTITY;
    
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
        return new LinkCorrelatoType();
    }    
}
