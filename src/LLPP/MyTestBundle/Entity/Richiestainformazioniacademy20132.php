<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Richiestainformazioniacademy20132
 */
class Richiestainformazioniacademy20132
{
    /**
     * @var integer
     */
    private $richiestaId;

    /**
     * @var string
     */
    private $contattatoIl;

    /**
     * @var string
     */
    private $ricontattareIl;

    /**
     * @var string
     */
    private $utente;

    /**
     * @var string
     */
    private $testo;

    /**
     * @var string
     */
    private $emailInviata;

    /**
     * @var string
     */
    private $interessato;

    /**
     * @var string
     */
    private $eliminato;

    /**
     * @var string
     */
    private $aperto;

    /**
     * @var string
     */
    private $venduto;

    /**
     * @var string
     */
    private $pagato;


    /**
     * Get richiestaId
     *
     * @return integer 
     */
    public function getRichiestaId()
    {
        return $this->richiestaId;
    }

    /**
     * Set contattatoIl
     *
     * @param string $contattatoIl
     * @return Richiestainformazioniacademy20132
     */
    public function setContattatoIl($contattatoIl)
    {
        $this->contattatoIl = $contattatoIl;

        return $this;
    }

    /**
     * Get contattatoIl
     *
     * @return string 
     */
    public function getContattatoIl()
    {
        return $this->contattatoIl;
    }

    /**
     * Set ricontattareIl
     *
     * @param string $ricontattareIl
     * @return Richiestainformazioniacademy20132
     */
    public function setRicontattareIl($ricontattareIl)
    {
        $this->ricontattareIl = $ricontattareIl;

        return $this;
    }

    /**
     * Get ricontattareIl
     *
     * @return string 
     */
    public function getRicontattareIl()
    {
        return $this->ricontattareIl;
    }

    /**
     * Set utente
     *
     * @param string $utente
     * @return Richiestainformazioniacademy20132
     */
    public function setUtente($utente)
    {
        $this->utente = $utente;

        return $this;
    }

    /**
     * Get utente
     *
     * @return string 
     */
    public function getUtente()
    {
        return $this->utente;
    }

    /**
     * Set testo
     *
     * @param string $testo
     * @return Richiestainformazioniacademy20132
     */
    public function setTesto($testo)
    {
        $this->testo = $testo;

        return $this;
    }

    /**
     * Get testo
     *
     * @return string 
     */
    public function getTesto()
    {
        return $this->testo;
    }

    /**
     * Set emailInviata
     *
     * @param string $emailInviata
     * @return Richiestainformazioniacademy20132
     */
    public function setEmailInviata($emailInviata)
    {
        $this->emailInviata = $emailInviata;

        return $this;
    }

    /**
     * Get emailInviata
     *
     * @return string 
     */
    public function getEmailInviata()
    {
        return $this->emailInviata;
    }

    /**
     * Set interessato
     *
     * @param string $interessato
     * @return Richiestainformazioniacademy20132
     */
    public function setInteressato($interessato)
    {
        $this->interessato = $interessato;

        return $this;
    }

    /**
     * Get interessato
     *
     * @return string 
     */
    public function getInteressato()
    {
        return $this->interessato;
    }

    /**
     * Set eliminato
     *
     * @param string $eliminato
     * @return Richiestainformazioniacademy20132
     */
    public function setEliminato($eliminato)
    {
        $this->eliminato = $eliminato;

        return $this;
    }

    /**
     * Get eliminato
     *
     * @return string 
     */
    public function getEliminato()
    {
        return $this->eliminato;
    }

    /**
     * Set aperto
     *
     * @param string $aperto
     * @return Richiestainformazioniacademy20132
     */
    public function setAperto($aperto)
    {
        $this->aperto = $aperto;

        return $this;
    }

    /**
     * Get aperto
     *
     * @return string 
     */
    public function getAperto()
    {
        return $this->aperto;
    }

    /**
     * Set venduto
     *
     * @param string $venduto
     * @return Richiestainformazioniacademy20132
     */
    public function setVenduto($venduto)
    {
        $this->venduto = $venduto;

        return $this;
    }

    /**
     * Get venduto
     *
     * @return string 
     */
    public function getVenduto()
    {
        return $this->venduto;
    }

    /**
     * Set pagato
     *
     * @param string $pagato
     * @return Richiestainformazioniacademy20132
     */
    public function setPagato($pagato)
    {
        $this->pagato = $pagato;

        return $this;
    }

    /**
     * Get pagato
     *
     * @return string 
     */
    public function getPagato()
    {
        return $this->pagato;
    }
}
