<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtentiHome
 */
class UtentiHome
{
    /**
     * @var integer
     */
    private $id;

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
    private $prov;

    /**
     * @var string
     */
    private $reg;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $sottotitolo;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var string
     */
    private $testa;

    /**
     * @var string
     */
    private $nc;

    /**
     * @var string
     */
    private $esn;

    /**
     * @var string
     */
    private $acura;


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
     * Set nome
     *
     * @param string $nome
     * @return UtentiHome
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
     * @return UtentiHome
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
     * @return UtentiHome
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
     * Set prov
     *
     * @param string $prov
     * @return UtentiHome
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
     * Set reg
     *
     * @param string $reg
     * @return UtentiHome
     */
    public function setReg($reg)
    {
        $this->reg = $reg;

        return $this;
    }

    /**
     * Get reg
     *
     * @return string 
     */
    public function getReg()
    {
        return $this->reg;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return UtentiHome
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
     * Set titolo
     *
     * @param string $titolo
     * @return UtentiHome
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string 
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set sottotitolo
     *
     * @param string $sottotitolo
     * @return UtentiHome
     */
    public function setSottotitolo($sottotitolo)
    {
        $this->sottotitolo = $sottotitolo;

        return $this;
    }

    /**
     * Get sottotitolo
     *
     * @return string 
     */
    public function getSottotitolo()
    {
        return $this->sottotitolo;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return UtentiHome
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set testa
     *
     * @param string $testa
     * @return UtentiHome
     */
    public function setTesta($testa)
    {
        $this->testa = $testa;

        return $this;
    }

    /**
     * Get testa
     *
     * @return string 
     */
    public function getTesta()
    {
        return $this->testa;
    }

    /**
     * Set nc
     *
     * @param string $nc
     * @return UtentiHome
     */
    public function setNc($nc)
    {
        $this->nc = $nc;

        return $this;
    }

    /**
     * Get nc
     *
     * @return string 
     */
    public function getNc()
    {
        return $this->nc;
    }

    /**
     * Set esn
     *
     * @param string $esn
     * @return UtentiHome
     */
    public function setEsn($esn)
    {
        $this->esn = $esn;

        return $this;
    }

    /**
     * Get esn
     *
     * @return string 
     */
    public function getEsn()
    {
        return $this->esn;
    }

    /**
     * Set acura
     *
     * @param string $acura
     * @return UtentiHome
     */
    public function setAcura($acura)
    {
        $this->acura = $acura;

        return $this;
    }

    /**
     * Get acura
     *
     * @return string 
     */
    public function getAcura()
    {
        return $this->acura;
    }
}
