<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblloguser
 */
class Tblloguser
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
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $riferimento;

    /**
     * @var \DateTime
     */
    private $quando;


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
     * @return Tblloguser
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
     * Set tipo
     *
     * @param string $tipo
     * @return Tblloguser
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
     * Set riferimento
     *
     * @param string $riferimento
     * @return Tblloguser
     */
    public function setRiferimento($riferimento)
    {
        $this->riferimento = $riferimento;

        return $this;
    }

    /**
     * Get riferimento
     *
     * @return string 
     */
    public function getRiferimento()
    {
        return $this->riferimento;
    }

    /**
     * Set quando
     *
     * @param \DateTime $quando
     * @return Tblloguser
     */
    public function setQuando($quando)
    {
        $this->quando = $quando;

        return $this;
    }

    /**
     * Get quando
     *
     * @return \DateTime 
     */
    public function getQuando()
    {
        return $this->quando;
    }
}
