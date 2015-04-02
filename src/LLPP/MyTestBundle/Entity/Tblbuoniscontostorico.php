<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblbuoniscontostorico
 */
class Tblbuoniscontostorico
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idcliente;

    /**
     * @var integer
     */
    private $idbuono;

    /**
     * @var string
     */
    private $codicebuono;


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
     * Set idcliente
     *
     * @param integer $idcliente
     * @return Tblbuoniscontostorico
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return integer 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set idbuono
     *
     * @param integer $idbuono
     * @return Tblbuoniscontostorico
     */
    public function setIdbuono($idbuono)
    {
        $this->idbuono = $idbuono;

        return $this;
    }

    /**
     * Get idbuono
     *
     * @return integer 
     */
    public function getIdbuono()
    {
        return $this->idbuono;
    }

    /**
     * Set codicebuono
     *
     * @param string $codicebuono
     * @return Tblbuoniscontostorico
     */
    public function setCodicebuono($codicebuono)
    {
        $this->codicebuono = $codicebuono;

        return $this;
    }

    /**
     * Get codicebuono
     *
     * @return string 
     */
    public function getCodicebuono()
    {
        return $this->codicebuono;
    }
}
