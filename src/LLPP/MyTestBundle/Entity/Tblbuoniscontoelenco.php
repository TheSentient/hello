<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblbuoniscontoelenco
 */
class Tblbuoniscontoelenco
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idpromozione;

    /**
     * @var string
     */
    private $codicebuono;

    /**
     * @var integer
     */
    private $idcliente;

    /**
     * @var \DateTime
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
     * Set idpromozione
     *
     * @param integer $idpromozione
     * @return Tblbuoniscontoelenco
     */
    public function setIdpromozione($idpromozione)
    {
        $this->idpromozione = $idpromozione;

        return $this;
    }

    /**
     * Get idpromozione
     *
     * @return integer 
     */
    public function getIdpromozione()
    {
        return $this->idpromozione;
    }

    /**
     * Set codicebuono
     *
     * @param string $codicebuono
     * @return Tblbuoniscontoelenco
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

    /**
     * Set idcliente
     *
     * @param integer $idcliente
     * @return Tblbuoniscontoelenco
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
     * Set datascadenza
     *
     * @param \DateTime $datascadenza
     * @return Tblbuoniscontoelenco
     */
    public function setDatascadenza($datascadenza)
    {
        $this->datascadenza = $datascadenza;

        return $this;
    }

    /**
     * Get datascadenza
     *
     * @return \DateTime 
     */
    public function getDatascadenza()
    {
        return $this->datascadenza;
    }
}
