<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RiepilogoOrdini
 *
 * @ORM\Table(name="riepilogo_ordini")
 * @ORM\Entity
 */
class RiepilogoOrdini
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_ordine", type="string", length=100, nullable=true)
     */
    private $idOrdine;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cliente", type="integer", nullable=true)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=200, nullable=true)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="codice", type="string", length=60, nullable=true)
     */
    private $codice;

    /**
     * @var integer
     *
     * @ORM\Column(name="qta", type="integer", nullable=true)
     */
    private $qta;

    /**
     * @var float
     *
     * @ORM\Column(name="prezzo", type="float", precision=15, scale=2, nullable=true)
     */
    private $prezzo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idOrdine
     *
     * @param string $idOrdine
     * @return RiepilogoOrdini
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
     * @return RiepilogoOrdini
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
     * @return RiepilogoOrdini
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
     * @return RiepilogoOrdini
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
     * @return RiepilogoOrdini
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
     * @return RiepilogoOrdini
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

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
