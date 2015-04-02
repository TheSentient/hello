<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gare
 */
class Gare
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $datascad;

    /**
     * @var string
     */
    private $ente;

    /**
     * @var string
     */
    private $oggetto;

    /**
     * @var string
     */
    private $impopere;

    /**
     * @var string
     */
    private $imponorario;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $new;

    /**
     * @var string
     */
    private $datascadenza;


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
     * Set datascad
     *
     * @param string $datascad
     * @return Gare
     */
    public function setDatascad($datascad)
    {
        $this->datascad = $datascad;

        return $this;
    }

    /**
     * Get datascad
     *
     * @return string 
     */
    public function getDatascad()
    {
        return $this->datascad;
    }

    /**
     * Set ente
     *
     * @param string $ente
     * @return Gare
     */
    public function setEnte($ente)
    {
        $this->ente = $ente;

        return $this;
    }

    /**
     * Get ente
     *
     * @return string 
     */
    public function getEnte()
    {
        return $this->ente;
    }

    /**
     * Set oggetto
     *
     * @param string $oggetto
     * @return Gare
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

    /**
     * Set impopere
     *
     * @param string $impopere
     * @return Gare
     */
    public function setImpopere($impopere)
    {
        $this->impopere = $impopere;

        return $this;
    }

    /**
     * Get impopere
     *
     * @return string 
     */
    public function getImpopere()
    {
        return $this->impopere;
    }

    /**
     * Set imponorario
     *
     * @param string $imponorario
     * @return Gare
     */
    public function setImponorario($imponorario)
    {
        $this->imponorario = $imponorario;

        return $this;
    }

    /**
     * Get imponorario
     *
     * @return string 
     */
    public function getImponorario()
    {
        return $this->imponorario;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Gare
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set new
     *
     * @param string $new
     * @return Gare
     */
    public function setNew($new)
    {
        $this->new = $new;

        return $this;
    }

    /**
     * Get new
     *
     * @return string 
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Set datascadenza
     *
     * @param string $datascadenza
     * @return Gare
     */
    public function setDatascadenza($datascadenza)
    {
        $this->datascadenza = $datascadenza;

        return $this;
    }

    /**
     * Get datascadenza
     *
     * @return string 
     */
    public function getDatascadenza()
    {
        return $this->datascadenza;
    }
}
