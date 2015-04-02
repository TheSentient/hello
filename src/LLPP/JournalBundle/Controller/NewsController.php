<?php

namespace LLPP\JournalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LLPP\JournalBundle\Entity\News;
use LLPP\JournalBundle\Form\NewsType;
use Alangemar\CrudHandlerBundle\Controller\CrudHandlerController;

/**
 * News controller.
 *
 */
class NewsController extends CrudHandlerController
{
    protected $bundleName = 'LLPPJournalBundle:News:';
    protected $routePrefix = 'news';
    protected $entityFQN = News::ENTITY;
    
    public function __construct()
    {
        parent::__construct();
    
        $this->table_headers_index = array('Data', 'Titolo', 'Contenuto', 'Permalink', 'Tags');
        $this->entity_fields_index = array('data', 'titolo', 'contenuto', 'permalink', 'tags');
        $this->table_headers_show = $this->table_headers_index;
        $this->entity_fields_show = $this->entity_fields_index;
    }
    
    protected function getFormType()
    {
        return new NewsType();
    }
}
