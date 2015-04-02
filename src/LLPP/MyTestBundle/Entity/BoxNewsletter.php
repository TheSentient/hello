<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoxNewsletter
 */
class BoxNewsletter
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
     * @var \DateTime
     */
    private $dataInizio;

    /**
     * @var \DateTime
     */
    private $dataFine;

    /**
     * @var integer
     */
    private $ordine;

    /**
     * @var string
     */
    private $sfondo;

    /**
     * @var string
     */
    private $font;


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
     * @return BoxNewsletter
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
     * Set dataInizio
     *
     * @param \DateTime $dataInizio
     * @return BoxNewsletter
     */
    public function setDataInizio($dataInizio)
    {
        $this->dataInizio = $dataInizio;

        return $this;
    }

    /**
     * Get dataInizio
     *
     * @return \DateTime 
     */
    public function getDataInizio()
    {
        return $this->dataInizio;
    }

    /**
     * Set dataFine
     *
     * @param \DateTime $dataFine
     * @return BoxNewsletter
     */
    public function setDataFine($dataFine)
    {
        $this->dataFine = $dataFine;

        return $this;
    }

    /**
     * Get dataFine
     *
     * @return \DateTime 
     */
    public function getDataFine()
    {
        return $this->dataFine;
    }

    /**
     * Set ordine
     *
     * @param integer $ordine
     * @return BoxNewsletter
     */
    public function setOrdine($ordine)
    {
        $this->ordine = $ordine;

        return $this;
    }

    /**
     * Get ordine
     *
     * @return integer 
     */
    public function getOrdine()
    {
        return $this->ordine;
    }

    /**
     * Set sfondo
     *
     * @param string $sfondo
     * @return BoxNewsletter
     */
    public function setSfondo($sfondo)
    {
        $this->sfondo = $sfondo;

        return $this;
    }

    /**
     * Get sfondo
     *
     * @return string 
     */
    public function getSfondo()
    {
        return $this->sfondo;
    }

    /**
     * Set font
     *
     * @param string $font
     * @return BoxNewsletter
     */
    public function setFont($font)
    {
        $this->font = $font;

        return $this;
    }

    /**
     * Get font
     *
     * @return string 
     */
    public function getFont()
    {
        return $this->font;
    }
}
