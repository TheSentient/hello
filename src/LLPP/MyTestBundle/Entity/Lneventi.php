<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lneventi
 */
class Lneventi
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idCliente;

    /**
     * @var integer
     */
    private $idIdentificativo;

    /**
     * @var string
     */
    private $tipo;


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
     * Set idCliente
     *
     * @param integer $idCliente
     * @return Lneventi
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return integer 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idIdentificativo
     *
     * @param integer $idIdentificativo
     * @return Lneventi
     */
    public function setIdIdentificativo($idIdentificativo)
    {
        $this->idIdentificativo = $idIdentificativo;

        return $this;
    }

    /**
     * Get idIdentificativo
     *
     * @return integer 
     */
    public function getIdIdentificativo()
    {
        return $this->idIdentificativo;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Lneventi
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
}
