<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RiepilogoOrdiniback
 */
class RiepilogoOrdiniback
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $idOrdine;

    /**
     * @var integer
     */
    private $idCliente;

    /**
     * @var string
     */
    private $cliente;

    /**
     * @var string
     */
    private $codice;

    /**
     * @var integer
     */
    private $qta;

    /**
     * @var float
     */
    private $prezzo;


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
     * Set idOrdine
     *
     * @param string $idOrdine
     * @return RiepilogoOrdiniback
     */
    public function setIdOrdine($idOrdine)
    {
        $this->idOrdine = $idOrdine;

        return $this;
    }

    /**
     * Get idOrdine
     *
     * @return string 
     */
    public function getIdOrdine()
    {
        return $this->idOrdine;
    }

    /**
     * Set idCliente
     *
     * @param integer $idCliente
     * @return RiepilogoOrdiniback
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
     * Set cliente
     *
     * @param string $cliente
     * @return RiepilogoOrdiniback
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set codice
     *
     * @param string $codice
     * @return RiepilogoOrdiniback
     */
    public function setCodice($codice)
    {
        $this->codice = $codice;

        return $this;
    }

    /**
     * Get codice
     *
     * @return string 
     */
    public function getCodice()
    {
        return $this->codice;
    }

    /**
     * Set qta
     *
     * @param integer $qta
     * @return RiepilogoOrdiniback
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
     * Set prezzo
     *
     * @param float $prezzo
     * @return RiepilogoOrdiniback
     */
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    /**
     * Get prezzo
     *
     * @return float 
     */
    public function getPrezzo()
    {
        return $this->prezzo;
    }
}
