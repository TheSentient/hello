<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametrisondaggio
 */
class Parametrisondaggio
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $testocompleto;

    /**
     * @var string
     */
    private $concorso;

    /**
     * @var integer
     */
    private $idconcorso;

    /**
     * @var string
     */
    private $home;

    /**
     * @var string
     */
    private $idcorrelati;


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
     * Set titolo
     *
     * @param string $titolo
     * @return Parametrisondaggio
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
     * Set testocompleto
     *
     * @param string $testocompleto
     * @return Parametrisondaggio
     */
    public function setTestocompleto($testocompleto)
    {
        $this->testocompleto = $testocompleto;

        return $this;
    }

    /**
     * Get testocompleto
     *
     * @return string 
     */
    public function getTestocompleto()
    {
        return $this->testocompleto;
    }

    /**
     * Set concorso
     *
     * @param string $concorso
     * @return Parametrisondaggio
     */
    public function setConcorso($concorso)
    {
        $this->concorso = $concorso;

        return $this;
    }

    /**
     * Get concorso
     *
     * @return string 
     */
    public function getConcorso()
    {
        return $this->concorso;
    }

    /**
     * Set idconcorso
     *
     * @param integer $idconcorso
     * @return Parametrisondaggio
     */
    public function setIdconcorso($idconcorso)
    {
        $this->idconcorso = $idconcorso;

        return $this;
    }

    /**
     * Get idconcorso
     *
     * @return integer 
     */
    public function getIdconcorso()
    {
        return $this->idconcorso;
    }

    /**
     * Set home
     *
     * @param string $home
     * @return Parametrisondaggio
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * Get home
     *
     * @return string 
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Set idcorrelati
     *
     * @param string $idcorrelati
     * @return Parametrisondaggio
     */
    public function setIdcorrelati($idcorrelati)
    {
        $this->idcorrelati = $idcorrelati;

        return $this;
    }

    /**
     * Get idcorrelati
     *
     * @return string 
     */
    public function getIdcorrelati()
    {
        return $this->idcorrelati;
    }
}
