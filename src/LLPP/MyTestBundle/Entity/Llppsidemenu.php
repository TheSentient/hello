<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Llppsidemenu
 */
class Llppsidemenu
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
    private $link;

    /**
     * @var string
     */
    private $posizione;

    /**
     * @var integer
     */
    private $ordine;


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
     * @return Llppsidemenu
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
     * Set link
     *
     * @param string $link
     * @return Llppsidemenu
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
     * Set posizione
     *
     * @param string $posizione
     * @return Llppsidemenu
     */
    public function setPosizione($posizione)
    {
        $this->posizione = $posizione;

        return $this;
    }

    /**
     * Get posizione
     *
     * @return string 
     */
    public function getPosizione()
    {
        return $this->posizione;
    }

    /**
     * Set ordine
     *
     * @param integer $ordine
     * @return Llppsidemenu
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
