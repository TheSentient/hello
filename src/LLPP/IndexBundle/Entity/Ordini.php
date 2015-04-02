<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordini
 *
 * @ORM\Table(name="ordini")
 * @ORM\Entity
 */
class Ordini
{
    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=15, nullable=true)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ts", type="datetime", nullable=false)
     */
    private $ts;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=200, nullable=true)
     */
    private $cliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cliente", type="integer", nullable=true)
     */
    private $idCliente;

    /**
     * @var float
     *
     * @ORM\Column(name="totale_ordine", type="float", precision=15, scale=2, nullable=true)
     */
    private $totaleOrdine;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_spedizione", type="string", length=60, nullable=true)
     */
    private $tipoSpedizione;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pagamento", type="string", length=60, nullable=true)
     */
    private $tipoPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="stato", type="string", length=50, nullable=true)
     */
    private $stato;

    /**
     * @var string
     *
     * @ORM\Column(name="sessione", type="string", length=200, nullable=true)
     */
    private $sessione;

    /**
     * @var string
     *
     * @ORM\Column(name="num_ordine", type="string", length=60, nullable=true)
     */
    private $numOrdine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_sped", type="date", nullable=true)
     */
    private $dataSped;

    /**
     * @var float
     *
     * @ORM\Column(name="spese_spedizione", type="float", precision=10, scale=0, nullable=true)
     */
    private $speseSpedizione;

    /**
     * @var float
     *
     * @ORM\Column(name="spese_pagamento", type="float", precision=10, scale=0, nullable=false)
     */
    private $spesePagamento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pagamento_effettuato", type="datetime", nullable=true)
     */
    private $pagamentoEffettuato;

    /**
     * @var string
     *
     * @ORM\Column(name="ebook_flash_order", type="string", length=255, nullable=true)
     */
    private $ebookFlashOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set data
     *
     * @param string $data
     * @return Ordini
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set ts
     *
     * @param \DateTime $ts
     * @return Ordini
     */
    public function setTs($ts)
    {
        $this->ts = $ts;

        return $this;
    }

    /**
     * Get ts
     *
     * @return \DateTime 
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * Set cliente
     *
     * @param string $cliente
     * @return Ordini
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
     * Set idCliente
     *
     * @param integer $idCliente
     * @return Ordini
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
     * Set totaleOrdine
     *
     * @param float $totaleOrdine
     * @return Ordini
     */
    public function setTotaleOrdine($totaleOrdine)
    {
        $this->totaleOrdine = $totaleOrdine;

        return $this;
    }

    /**
     * Get totaleOrdine
     *
     * @return float 
     */
    public function getTotaleOrdine()
    {
        return $this->totaleOrdine;
    }

    /**
     * Set tipoSpedizione
     *
     * @param string $tipoSpedizione
     * @return Ordini
     */
    public function setTipoSpedizione($tipoSpedizione)
    {
        $this->tipoSpedizione = $tipoSpedizione;

        return $this;
    }

    /**
     * Get tipoSpedizione
     *
     * @return string 
     */
    public function getTipoSpedizione()
    {
        return $this->tipoSpedizione;
    }

    /**
     * Set tipoPagamento
     *
     * @param string $tipoPagamento
     * @return Ordini
     */
    public function setTipoPagamento($tipoPagamento)
    {
        $this->tipoPagamento = $tipoPagamento;

        return $this;
    }

    /**
     * Get tipoPagamento
     *
     * @return string 
     */
    public function getTipoPagamento()
    {
        return $this->tipoPagamento;
    }

    /**
     * Set stato
     *
     * @param string $stato
     * @return Ordini
     */
    public function setStato($stato)
    {
        $this->stato = $stato;

        return $this;
    }

    /**
     * Get stato
     *
     * @return string 
     */
    public function getStato()
    {
        return $this->stato;
    }

    /**
     * Set sessione
     *
     * @param string $sessione
     * @return Ordini
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
     * Set numOrdine
     *
     * @param string $numOrdine
     * @return Ordini
     */
    public function setNumOrdine($numOrdine)
    {
        $this->numOrdine = $numOrdine;

        return $this;
    }

    /**
     * Get numOrdine
     *
     * @return string 
     */
    public function getNumOrdine()
    {
        return $this->numOrdine;
    }

    /**
     * Set dataSped
     *
     * @param \DateTime $dataSped
     * @return Ordini
     */
    public function setDataSped($dataSped)
    {
        $this->dataSped = $dataSped;

        return $this;
    }

    /**
     * Get dataSped
     *
     * @return \DateTime 
     */
    public function getDataSped()
    {
        return $this->dataSped;
    }

    /**
     * Set speseSpedizione
     *
     * @param float $speseSpedizione
     * @return Ordini
     */
    public function setSpeseSpedizione($speseSpedizione)
    {
        $this->speseSpedizione = $speseSpedizione;

        return $this;
    }

    /**
     * Get speseSpedizione
     *
     * @return float 
     */
    public function getSpeseSpedizione()
    {
        return $this->speseSpedizione;
    }

    /**
     * Set spesePagamento
     *
     * @param float $spesePagamento
     * @return Ordini
     */
    public function setSpesePagamento($spesePagamento)
    {
        $this->spesePagamento = $spesePagamento;

        return $this;
    }

    /**
     * Get spesePagamento
     *
     * @return float 
     */
    public function getSpesePagamento()
    {
        return $this->spesePagamento;
    }

    /**
     * Set pagamentoEffettuato
     *
     * @param \DateTime $pagamentoEffettuato
     * @return Ordini
     */
    public function setPagamentoEffettuato($pagamentoEffettuato)
    {
        $this->pagamentoEffettuato = $pagamentoEffettuato;

        return $this;
    }

    /**
     * Get pagamentoEffettuato
     *
     * @return \DateTime 
     */
    public function getPagamentoEffettuato()
    {
        return $this->pagamentoEffettuato;
    }

    /**
     * Set ebookFlashOrder
     *
     * @param string $ebookFlashOrder
     * @return Ordini
     */
    public function setEbookFlashOrder($ebookFlashOrder)
    {
        $this->ebookFlashOrder = $ebookFlashOrder;

        return $this;
    }

    /**
     * Get ebookFlashOrder
     *
     * @return string 
     */
    public function getEbookFlashOrder()
    {
        return $this->ebookFlashOrder;
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
