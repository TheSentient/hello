<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banditipologia
 */
class Banditipologia
{
    /**
     * @var integer
     */
    private $idtipologia;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var string
     */
    private $sottocategoria;

    /**
     * @var integer
     */
    private $ordine;


    /**
     * Get idtipologia
     *
     * @return integer 
     */
    public function getIdtipologia()
    {
        return $this->idtipologia;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return Banditipologia
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
     * Set sottocategoria
     *
     * @param string $sottocategoria
     * @return Banditipologia
     */
    public function setSottocategoria($sottocategoria)
    {
        $this->sottocategoria = $sottocategoria;

        return $this;
    }

    /**
     * Get sottocategoria
     *
     * @return string 
     */
    public function getSottocategoria()
    {
        return $this->sottocategoria;
    }

    /**
     * Set ordine
     *
     * @param integer $ordine
     * @return Banditipologia
     */
    public function setOrdine($ordine)
    {
        $this->ordine = $ordine;

        return $this;
    }

    /**
     * Get ordine
     *
     * @return integer 
     */
    public function getOrdine()
    {
        return $this->ordine;
    }
}
