<?php

namespace LLPP\JournalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LLPP\JournalBundle\Entity\CorsoFormazione;
use LLPP\JournalBundle\Form\CorsoFormazioneType;
use Alangemar\CrudHandlerBundle\Controller\CrudHandlerController;

/**
 * CorsoFormazione controller.
 *
 */
class CorsoFormazioneController extends CrudHandlerController
{
    protected $bundleName = 'LLPPJournalBundle:CorsoFormazione:';
    protected $routePrefix = 'corsoformazione';
    protected $entityFQN = CorsoFormazione::ENTITY;
    
    public function __construct()
    {
        parent::__construct();
    
        $this->entity_fields_index = array('Titolo', 'Modalita', 'Durata', 'Data Inizio', 'Data Fine', 'Descrizione', 'CFP', 'Ente Esterno', 'Quota Iscrizione', 'Sede');
        $this->entity_fields_index = array('titolo', 'modalita', 'durata', 'dataInizio', 'dataFine', 'descrizione', 'cfp', 'enteEsterno', 'quotaIscrizione', 'sede');
        $this->table_headers_show = $this->table_headers_index;
        $this->entity_fields_show = $this->entity_fields_index;
    }
    
    protected function getFormType()
    {
        return new CorsoFormazioneType();
    }    
}