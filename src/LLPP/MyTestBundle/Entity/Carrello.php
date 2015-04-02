<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrello
 */
class Carrello
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sessione;

    /**
     * @var string
     */
    private $codice;

    /**
     * @var integer
     */
    private $qta;

    /**
     * @var float
     */
    private $prezzo;

    /**
     * @var float
     */
    private $spese;

    /**
     * @var float
     */
    private $totaleRigo;

    /**
     * @var \DateTime
     */
    private $ts;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sessione
     *
     * @param string $sessione
     * @return Carrello
     */
    public function setSessione($sessione)
    {
        $this->sessione = $sessione;

        return $this;
    }

    /**
     * Get sessione
     *
     * @return string 
     */
    public function getSessione()
    {
        return $this->sessione;
    }

    /**
     * Set codice
     *
     * @param string $codice
     * @return Carrello
     */
    public function setCodice($codice)
    {
        $this->codice = $codice;

        return $this;
    }

    /**
     * Get codice
     *
     * @return string 
     */
    public function getCodice()
    {
        return $this->codice;
    }

    /**
     * Set qta
     *
     * @param integer $qta
     * @return Carrello
     */
    public function setQta($qta)
    {
        $this->qta = $qta;

        return $this;
    }

    /**
     * Get qta
     *
     * @return integer 
     */
    public function getQta()
    {
        return $this->qta;
    }

    /**
     * Set prezzo
     *
     * @param float $prezzo
     * @return Carrello
     */
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    /**
     * Get prezzo
     *
     * @return float 
     */
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set spese
     *
     * @param float $spese
     * @return Carrello
     */
    public function setSpese($spese)
    {
        $this->spese = $spese;

        return $this;
    }

    /**
     * Get spese
     *
     * @return float 
     */
    public function getSpese()
    {
        return $this->spese;
    }

    /**
     * Set totaleRigo
     *
     * @param float $totaleRigo
     * @return Carrello
     */
    public function setTotaleRigo($totaleRigo)
    {
        $this->totaleRigo = $totaleRigo;

        return $this;
    }

    /**
     * Get totaleRigo
     *
     * @return float 
     */
    public function getTotaleRigo()
    {
        return $this->totaleRigo;
    }

    /**
     * Set ts
     *
     * @param \DateTime $ts
     * @return Carrello
     */
    public function setTs($ts)
    {
        $this->ts = $ts;

        return $this;
    }

    /**
     * Get ts
     *
     * @return \DateTime 
     */
    public function getTs()
    {
        return $this->ts;
    }
}
