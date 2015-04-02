<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordiniindirizzifatturazione
 */
class Ordiniindirizzifatturazione
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
    private $numOrdine;

    /**
     * @var string
     */
    private $nomedestinatario;

    /**
     * @var string
     */
    private $cognomedestinatario;

    /**
     * @var string
     */
    private $indirizzodestinatario;

    /**
     * @var string
     */
    private $numerocivicodestinatario;

    /**
     * @var string
     */
    private $cittadestinatario;

    /**
     * @var integer
     */
    private $capdestinatario;

    /**
     * @var string
     */
    private $provinciadestinatario;


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
     * @return Ordiniindirizzifatturazione
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
     * Set numOrdine
     *
     * @param string $numOrdine
     * @return Ordiniindirizzifatturazione
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
     * Set nomedestinatario
     *
     * @param string $nomedestinatario
     * @return Ordiniindirizzifatturazione
     */
    public function setNomedestinatario($nomedestinatario)
    {
        $this->nomedestinatario = $nomedestinatario;

        return $this;
    }

    /**
     * Get nomedestinatario
     *
     * @return string 
     */
    public function getNomedestinatario()
    {
        return $this->nomedestinatario;
    }

    /**
     * Set cognomedestinatario
     *
     * @param string $cognomedestinatario
     * @return Ordiniindirizzifatturazione
     */
    public function setCognomedestinatario($cognomedestinatario)
    {
        $this->cognomedestinatario = $cognomedestinatario;

        return $this;
    }

    /**
     * Get cognomedestinatario
     *
     * @return string 
     */
    public function getCognomedestinatario()
    {
        return $this->cognomedestinatario;
    }

    /**
     * Set indirizzodestinatario
     *
     * @param string $indirizzodestinatario
     * @return Ordiniindirizzifatturazione
     */
    public function setIndirizzodestinatario($indirizzodestinatario)
    {
        $this->indirizzodestinatario = $indirizzodestinatario;

        return $this;
    }

    /**
     * Get indirizzodestinatario
     *
     * @return string 
     */
    public function getIndirizzodestinatario()
    {
        return $this->indirizzodestinatario;
    }

    /**
     * Set numerocivicodestinatario
     *
     * @param string $numerocivicodestinatario
     * @return Ordiniindirizzifatturazione
     */
    public function setNumerocivicodestinatario($numerocivicodestinatario)
    {
        $this->numerocivicodestinatario = $numerocivicodestinatario;

        return $this;
    }

    /**
     * Get numerocivicodestinatario
     *
     * @return string 
     */
    public function getNumerocivicodestinatario()
    {
        return $this->numerocivicodestinatario;
    }

    /**
     * Set cittadestinatario
     *
     * @param string $cittadestinatario
     * @return Ordiniindirizzifatturazione
     */
    public function setCittadestinatario($cittadestinatario)
    {
        $this->cittadestinatario = $cittadestinatario;

        return $this;
    }

    /**
     * Get cittadestinatario
     *
     * @return string 
     */
    public function getCittadestinatario()
    {
        return $this->cittadestinatario;
    }

    /**
     * Set capdestinatario
     *
     * @param integer $capdestinatario
     * @return Ordiniindirizzifatturazione
     */
    public function setCapdestinatario($capdestinatario)
    {
        $this->capdestinatario = $capdestinatario;

        return $this;
    }

    /**
     * Get capdestinatario
     *
     * @return integer 
     */
    public function getCapdestinatario()
    {
        return $this->capdestinatario;
    }

    /**
     * Set provinciadestinatario
     *
     * @param string $provinciadestinatario
     * @return Ordiniindirizzifatturazione
     */
    public function setProvinciadestinatario($provinciadestinatario)
    {
        $this->provinciadestinatario = $provinciadestinatario;

        return $this;
    }

    /**
     * Get provinciadestinatario
     *
     * @return string 
     */
    public function getProvinciadestinatario()
    {
        return $this->provinciadestinatario;
    }
}
