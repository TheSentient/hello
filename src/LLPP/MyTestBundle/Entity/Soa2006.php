<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soa2006
 */
class Soa2006
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cognome;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $professione;

    /**
     * @var string
     */
    private $societa;

    /**
     * @var string
     */
    private $piva;

    /**
     * @var string
     */
    private $indirizzo;

    /**
     * @var string
     */
    private $cap;

    /**
     * @var string
     */
    private $citta;

    /**
     * @var string
     */
    private $prov;

    /**
     * @var string
     */
    private $regione;

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
    private $email;

    /**
     * @var string
     */
    private $llppCode1;


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
     * Set cognome
     *
     * @param string $cognome
     * @return Soa2006
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
     * Set nome
     *
     * @param string $nome
     * @return Soa2006
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
     * Set professione
     *
     * @param string $professione
     * @return Soa2006
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
     * Set societa
     *
     * @param string $societa
     * @return Soa2006
     */
    public function setSocieta($societa)
    {
        $this->societa = $societa;

        return $this;
    }

    /**
     * Get societa
     *
     * @return string 
     */
    public function getSocieta()
    {
        return $this->societa;
    }

    /**
     * Set piva
     *
     * @param string $piva
     * @return Soa2006
     */
    public function setPiva($piva)
    {
        $this->piva = $piva;

        return $this;
    }

    /**
     * Get piva
     *
     * @return string 
     */
    public function getPiva()
    {
        return $this->piva;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return Soa2006
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
     * Set cap
     *
     * @param string $cap
     * @return Soa2006
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
     * Set citta
     *
     * @param string $citta
     * @return Soa2006
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
     * Set prov
     *
     * @param string $prov
     * @return Soa2006
     */
    public function setProv($prov)
    {
        $this->prov = $prov;

        return $this;
    }

    /**
     * Get prov
     *
     * @return string 
     */
    public function getProv()
    {
        return $this->prov;
    }

    /**
     * Set regione
     *
     * @param string $regione
     * @return Soa2006
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
     * Set tel
     *
     * @param string $tel
     * @return Soa2006
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
     * @return Soa2006
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
     * Set email
     *
     * @param string $email
     * @return Soa2006
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
     * Set llppCode1
     *
     * @param string $llppCode1
     * @return Soa2006
     */
    public function setLlppCode1($llppCode1)
    {
        $this->llppCode1 = $llppCode1;

        return $this;
    }

    /**
     * Get llppCode1
     *
     * @return string 
     */
    public function getLlppCode1()
    {
        return $this->llppCode1;
    }
}
