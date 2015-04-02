<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpromozioni
 */
class Tblpromozioni
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomepromozione;

    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var string
     */
    private $template;

    /**
     * @var string
     */
    private $img;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $valida;

    /**
     * @var string
     */
    private $editori;

    /**
     * @var float
     */
    private $importo;

    /**
     * @var integer
     */
    private $sconto;

    /**
     * @var \DateTime
     */
    private $datainizio;

    /**
     * @var \DateTime
     */
    private $datafine;


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
     * Set nomepromozione
     *
     * @param string $nomepromozione
     * @return Tblpromozioni
     */
    public function setNomepromozione($nomepromozione)
    {
        $this->nomepromozione = $nomepromozione;

        return $this;
    }

    /**
     * Get nomepromozione
     *
     * @return string 
     */
    public function getNomepromozione()
    {
        return $this->nomepromozione;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     * @return Tblpromozioni
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string 
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set template
     *
     * @param string $template
     * @return Tblpromozioni
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Tblpromozioni
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Tblpromozioni
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
     * Set valida
     *
     * @param string $valida
     * @return Tblpromozioni
     */
    public function setValida($valida)
    {
        $this->valida = $valida;

        return $this;
    }

    /**
     * Get valida
     *
     * @return string 
     */
    public function getValida()
    {
        return $this->valida;
    }

    /**
     * Set editori
     *
     * @param string $editori
     * @return Tblpromozioni
     */
    public function setEditori($editori)
    {
        $this->editori = $editori;

        return $this;
    }

    /**
     * Get editori
     *
     * @return string 
     */
    public function getEditori()
    {
        return $this->editori;
    }

    /**
     * Set importo
     *
     * @param float $importo
     * @return Tblpromozioni
     */
    public function setImporto($importo)
    {
        $this->importo = $importo;

        return $this;
    }

    /**
     * Get importo
     *
     * @return float 
     */
    public function getImporto()
    {
        return $this->importo;
    }

    /**
     * Set sconto
     *
     * @param integer $sconto
     * @return Tblpromozioni
     */
    public function setSconto($sconto)
    {
        $this->sconto = $sconto;

        return $this;
    }

    /**
     * Get sconto
     *
     * @return integer 
     */
    public function getSconto()
    {
        return $this->sconto;
    }

    /**
     * Set datainizio
     *
     * @param \DateTime $datainizio
     * @return Tblpromozioni
     */
    public function setDatainizio($datainizio)
    {
        $this->datainizio = $datainizio;

        return $this;
    }

    /**
     * Get datainizio
     *
     * @return \DateTime 
     */
    public function getDatainizio()
    {
        return $this->datainizio;
    }

    /**
     * Set datafine
     *
     * @param \DateTime $datafine
     * @return Tblpromozioni
     */
    public function setDatafine($datafine)
    {
        $this->datafine = $datafine;

        return $this;
    }

    /**
     * Get datafine
     *
     * @return \DateTime 
     */
    public function getDatafine()
    {
        return $this->datafine;
    }
}
