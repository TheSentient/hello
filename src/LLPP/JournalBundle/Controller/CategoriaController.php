<?php

namespace LLPP\JournalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LLPP\JournalBundle\Entity\Categoria;
use LLPP\JournalBundle\Form\CategoriaType;
use Alangemar\CrudHandlerBundle\Controller\CrudHandlerController;

/**
 * Categoria controller.
 *
 */
class CategoriaController extends CrudHandlerController
{
    protected $bundleName = 'LLPPJournalBundle:Categoria:';
    protected $routePrefix = 'categoria';
    protected $entityFQN = Categoria::ENTITY;
    
    public function __construct()
    {
        parent::__construct();
    
        $this->table_headers_index = array('Nome', 'Colore');
        $this->entity_fields_index = array('nome', 'colore');
        $this->table_headers_show = $this->table_headers_index;
        $this->entity_fields_show = $this->entity_fields_index;
    }
    
    protected function getFormType()
    {
        return new CategoriaType();
    }    
}
