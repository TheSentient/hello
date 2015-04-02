<?php

namespace LLPP\JournalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LLPP\JournalBundle\Entity\Tag;
use LLPP\JournalBundle\Form\TagType;
use Alangemar\CrudHandlerBundle\Controller\CrudHandlerController;

/**
 * Tag controller.
 *
 */
class TagController extends CrudHandlerController
{
    protected $bundleName = 'LLPPJournalBundle:Tag:';
    protected $routePrefix = 'tag';
    protected $entityFQN = Tag::ENTITY;
    
    public function __construct()
    {
        parent::__construct();
    
        $this->table_headers_index = array('Nome', 'Descrizione');
        $this->entity_fields_index = array('nome', 'descrizione');
        $this->table_headers_show = $this->table_headers_index;
        $this->entity_fields_show = $this->entity_fields_index;
    }
    
    protected function getFormType()
    {
        return new TagType();
    }    
}
