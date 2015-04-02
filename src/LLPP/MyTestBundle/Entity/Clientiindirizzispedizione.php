<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientiindirizzispedizione
 */
class Clientiindirizzispedizione
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idcliente;

    /**
     * @var string
     */
    private $denominazionespedizione;

    /**
     * @var string
     */
    private $indirizzo;

    /**
     * @var string
     */
    private $nomedestinatario;

    /**
     * @var string
     */
    private $cognomedestinatario;

    /**
     * @var string
     */
    private $numerocivico;

    /**
     * @var string
     */
    private $citta;

    /**
     * @var integer
     */
    private $cap;

    /**
     * @var string
     */
    private $regione;

    /**
     * @var string
     */
    private $provincia;


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
     * Set idcliente
     *
     * @param integer $idcliente
     * @return Clientiindirizzispedizione
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return integer 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set denominazionespedizione
     *
     * @param string $denominazionespedizione
     * @return Clientiindirizzispedizione
     */
    public function setDenominazionespedizione($denominazionespedizione)
    {
        $this->denominazionespedizione = $denominazionespedizione;

        return $this;
    }

    /**
     * Get denominazionespedizione
     *
     * @return string 
     */
    public function getDenominazionespedizione()
    {
        return $this->denominazionespedizione;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return Clientiindirizzispedizione
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string 
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set nomedestinatario
     *
     * @param string $nomedestinatario
     * @return Clientiindirizzispedizione
     */
    public function setNomedestinatario($nomedestinatario)
    {
        $this->nomedestinatario = $nomedestinatario;

        return $this;
    }

    /**
     * Get nomedestinatario
     *
     * @return string 
     */
    public function getNomedestinatario()
    {
        return $this->nomedestinatario;
    }

    /**
     * Set cognomedestinatario
     *
     * @param string $cognomedestinatario
     * @return Clientiindirizzispedizione
     */
    public function setCognomedestinatario($cognomedestinatario)
    {
        $this->cognomedestinatario = $cognomedestinatario;

        return $this;
    }

    /**
     * Get cognomedestinatario
     *
     * @return string 
     */
    public function getCognomedestinatario()
    {
        return $this->cognomedestinatario;
    }

    /**
     * Set numerocivico
     *
     * @param string $numerocivico
     * @return Clientiindirizzispedizione
     */
    public function setNumerocivico($numerocivico)
    {
        $this->numerocivico = $numerocivico;

        return $this;
    }

    /**
     * Get numerocivico
     *
     * @return string 
     */
    public function getNumerocivico()
    {
        return $this->numerocivico;
    }

    /**
     * Set citta
     *
     * @param string $citta
     * @return Clientiindirizzispedizione
     */
    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }

    /**
     * Get citta
     *
     * @return string 
     */
    public function getCitta()
    {
        return $this->citta;
    }

    /**
     * Set cap
     *
     * @param integer $cap
     * @return Clientiindirizzispedizione
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return integer 
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set regione
     *
     * @param string $regione
     * @return Clientiindirizzispedizione
     */
    public function setRegione($regione)
    {
        $this->regione = $regione;

        return $this;
    }

    /**
     * Get regione
     *
     * @return string 
     */
    public function getRegione()
    {
        return $this->regione;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return Clientiindirizzispedizione
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
}
