<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Basketllpp
 */
class Basketllpp
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sessione;

    /**
     * @var string
     */
    private $codiceitem;

    /**
     * @var integer
     */
    private $qta;

    /**
     * @var float
     */
    private $prezzounitario;


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
     * Set sessione
     *
     * @param string $sessione
     * @return Basketllpp
     */
    public function setSessione($sessione)
    {
        $this->sessione = $sessione;

        return $this;
    }

    /**
     * Get sessione
     *
     * @return string 
     */
    public function getSessione()
    {
        return $this->sessione;
    }

    /**
     * Set codiceitem
     *
     * @param string $codiceitem
     * @return Basketllpp
     */
    public function setCodiceitem($codiceitem)
    {
        $this->codiceitem = $codiceitem;

        return $this;
    }

    /**
     * Get codiceitem
     *
     * @return string 
     */
    public function getCodiceitem()
    {
        return $this->codiceitem;
    }

    /**
     * Set qta
     *
     * @param integer $qta
     * @return Basketllpp
     */
    public function setQta($qta)
    {
        $this->qta = $qta;

        return $this;
    }

    /**
     * Get qta
     *
     * @return integer 
     */
    public function getQta()
    {
        return $this->qta;
    }

    /**
     * Set prezzounitario
     *
     * @param float $prezzounitario
     * @return Basketllpp
     */
    public function setPrezzounitario($prezzounitario)
    {
        $this->prezzounitario = $prezzounitario;

        return $this;
    }

    /**
     * Get prezzounitario
     *
     * @return float 
     */
    public function getPrezzounitario()
    {
        return $this->prezzounitario;
    }
}
