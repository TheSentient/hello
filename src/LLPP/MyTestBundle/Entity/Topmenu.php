<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Topmenu
 */
class Topmenu
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
    private $isparent;

    /**
     * @var string
     */
    private $ischild;

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
    private $link;

    /**
     * @var string
     */
    private $target;


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
     * @return Topmenu
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
     * Set isparent
     *
     * @param string $isparent
     * @return Topmenu
     */
    public function setIsparent($isparent)
    {
        $this->isparent = $isparent;

        return $this;
    }

    /**
     * Get isparent
     *
     * @return string 
     */
    public function getIsparent()
    {
        return $this->isparent;
    }

    /**
     * Set ischild
     *
     * @param string $ischild
     * @return Topmenu
     */
    public function setIschild($ischild)
    {
        $this->ischild = $ischild;

        return $this;
    }

    /**
     * Get ischild
     *
     * @return string 
     */
    public function getIschild()
    {
        return $this->ischild;
    }

    /**
     * Set parent
     *
     * @param string $parent
     * @return Topmenu
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
     * @return Topmenu
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
     * Set link
     *
     * @param string $link
     * @return Topmenu
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
     * Set target
     *
     * @param string $target
     * @return Topmenu
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string 
     */
    public function getTarget()
    {
        return $this->target;
    }
}
