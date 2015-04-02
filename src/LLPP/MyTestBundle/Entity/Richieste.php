<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Richieste
 */
class Richieste
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $speciale;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $cognome;

    /**
     * @var string
     */
    private $professione;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $testo;

    /**
     * @var string
     */
    private $indirizzo;

    /**
     * @var string
     */
    private $citta;

    /**
     * @var string
     */
    private $cap;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $oggetto;


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
     * Set speciale
     *
     * @param string $speciale
     * @return Richieste
     */
    public function setSpeciale($speciale)
    {
        $this->speciale = $speciale;

        return $this;
    }

    /**
     * Get speciale
     *
     * @return string 
     */
    public function getSpeciale()
    {
        return $this->speciale;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Richieste
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     * @return Richieste
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string 
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set professione
     *
     * @param string $professione
     * @return Richieste
     */
    public function setProfessione($professione)
    {
        $this->professione = $professione;

        return $this;
    }

    /**
     * Get professione
     *
     * @return string 
     */
    public function getProfessione()
    {
        return $this->professione;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Richieste
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set testo
     *
     * @param string $testo
     * @return Richieste
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
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return Richieste
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
     * Set citta
     *
     * @param string $citta
     * @return Richieste
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
     * @param string $cap
     * @return Richieste
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return string 
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Richieste
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Richieste
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set oggetto
     *
     * @param string $oggetto
     * @return Richieste
     */
    public function setOggetto($oggetto)
    {
        $this->oggetto = $oggetto;

        return $this;
    }

    /**
     * Get oggetto
     *
     * @return string 
     */
    public function getOggetto()
    {
        return $this->oggetto;
    }
}
