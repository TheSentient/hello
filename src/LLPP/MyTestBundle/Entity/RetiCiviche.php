<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RetiCiviche
 */
class RetiCiviche
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $ente;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
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
     * Set tipo
     *
     * @param string $tipo
     * @return RetiCiviche
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
     * Set ente
     *
     * @param string $ente
     * @return RetiCiviche
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
     * Set link
     *
     * @param string $link
     * @return RetiCiviche
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
     * Set ordine
     *
     * @param string $ordine
     * @return RetiCiviche
     */
    public function setOrdine($ordine)
    {
        $this->ordine = $ordine;

        return $this;
    }

    /**
     * Get ordine
     *
     * @return string 
     */
    public function getOrdine()
    {
        return $this->ordine;
    }
}
