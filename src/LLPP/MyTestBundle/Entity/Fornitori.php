<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fornitori
 */
class Fornitori
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codice;

    /**
     * @var string
     */
    private $intestazione;

    /**
     * @var string
     */
    private $azienda;


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
     * Set codice
     *
     * @param string $codice
     * @return Fornitori
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
     * Set intestazione
     *
     * @param string $intestazione
     * @return Fornitori
     */
    public function setIntestazione($intestazione)
    {
        $this->intestazione = $intestazione;

        return $this;
    }

    /**
     * Get intestazione
     *
     * @return string 
     */
    public function getIntestazione()
    {
        return $this->intestazione;
    }

    /**
     * Set azienda
     *
     * @param string $azienda
     * @return Fornitori
     */
    public function setAzienda($azienda)
    {
        $this->azienda = $azienda;

        return $this;
    }

    /**
     * Get azienda
     *
     * @return string 
     */
    public function getAzienda()
    {
        return $this->azienda;
    }
}
