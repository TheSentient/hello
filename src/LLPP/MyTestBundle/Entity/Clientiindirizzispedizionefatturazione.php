<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientiindirizzispedizionefatturazione
 */
class Clientiindirizzispedizionefatturazione
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
     * @var string
     */
    private $ragionesociale;

    /**
     * @var string
     */
    private $codicefiscale;

    /**
     * @var string
     */
    private $partitaiva;


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
     * @return Clientiindirizzispedizionefatturazione
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
     * @return Clientiindirizzispedizionefatturazione
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
     * @return Clientiindirizzispedizionefatturazione
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
     * @return Clientiindirizzispedizionefatturazione
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
     * @return Clientiindirizzispedizionefatturazione
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
     * @return Clientiindirizzispedizionefatturazione
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
     * @return Clientiindirizzispedizionefatturazione
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
     * @return Clientiindirizzispedizionefatturazione
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
     * @return Clientiindirizzispedizionefatturazione
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
     * @return Clientiindirizzispedizionefatturazione
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

    /**
     * Set ragionesociale
     *
     * @param string $ragionesociale
     * @return Clientiindirizzispedizionefatturazione
     */
    public function setRagionesociale($ragionesociale)
    {
        $this->ragionesociale = $ragionesociale;

        return $this;
    }

    /**
     * Get ragionesociale
     *
     * @return string 
     */
    public function getRagionesociale()
    {
        return $this->ragionesociale;
    }

    /**
     * Set codicefiscale
     *
     * @param string $codicefiscale
     * @return Clientiindirizzispedizionefatturazione
     */
    public function setCodicefiscale($codicefiscale)
    {
        $this->codicefiscale = $codicefiscale;

        return $this;
    }

    /**
     * Get codicefiscale
     *
     * @return string 
     */
    public function getCodicefiscale()
    {
        return $this->codicefiscale;
    }

    /**
     * Set partitaiva
     *
     * @param string $partitaiva
     * @return Clientiindirizzispedizionefatturazione
     */
    public function setPartitaiva($partitaiva)
    {
        $this->partitaiva = $partitaiva;

        return $this;
    }

    /**
     * Get partitaiva
     *
     * @return string 
     */
    public function getPartitaiva()
    {
        return $this->partitaiva;
    }
}
