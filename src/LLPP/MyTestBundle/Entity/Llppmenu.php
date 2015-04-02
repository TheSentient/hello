<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Llppmenu
 */
class Llppmenu
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $testo;

    /**
     * @var string
     */
    private $parent;

    /**
     * @var integer
     */
    private $ordine;

    /**
     * @var string
     */
    private $linkalternativo;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $haschild;


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
     * Set testo
     *
     * @param string $testo
     * @return Llppmenu
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
     * Set parent
     *
     * @param string $parent
     * @return Llppmenu
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return string 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set ordine
     *
     * @param integer $ordine
     * @return Llppmenu
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

    /**
     * Set linkalternativo
     *
     * @param string $linkalternativo
     * @return Llppmenu
     */
    public function setLinkalternativo($linkalternativo)
    {
        $this->linkalternativo = $linkalternativo;

        return $this;
    }

    /**
     * Get linkalternativo
     *
     * @return string 
     */
    public function getLinkalternativo()
    {
        return $this->linkalternativo;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Llppmenu
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set haschild
     *
     * @param string $haschild
     * @return Llppmenu
     */
    public function setHaschild($haschild)
    {
        $this->haschild = $haschild;

        return $this;
    }

    /**
     * Get haschild
     *
     * @return string 
     */
    public function getHaschild()
    {
        return $this->haschild;
    }
}
