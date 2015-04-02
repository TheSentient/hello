<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientiindirizzispedizione
 *
 * @ORM\Table(name="clientiindirizzispedizione")
 * @ORM\Entity
 */
class Clientiindirizzispedizione
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="denominazioneSpedizione", type="string", length=255, nullable=true)
     */
    private $denominazionespedizione;

    /**
     * @var string
     *
     * @ORM\Column(name="Indirizzo", type="string", length=255, nullable=true)
     */
    private $indirizzo;

    /**
     * @var string
     *
     * @ORM\Column(name="NomeDestinatario", type="string", length=70, nullable=true)
     */
    private $nomedestinatario;

    /**
     * @var string
     *
     * @ORM\Column(name="CognomeDestinatario", type="string", length=255, nullable=true)
     */
    private $cognomedestinatario;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroCivico", type="string", length=20, nullable=true)
     */
    private $numerocivico;

    /**
     * @var string
     *
     * @ORM\Column(name="Citta", type="string", length=80, nullable=true)
     */
    private $citta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cap", type="integer", nullable=true)
     */
    private $cap;

    /**
     * @var string
     *
     * @ORM\Column(name="Regione", type="string", length=20, nullable=true)
     */
    private $regione;

    /**
     * @var string
     *
     * @ORM\Column(name="Provincia", type="string", length=30, nullable=true)
     */
    private $provincia;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



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

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
