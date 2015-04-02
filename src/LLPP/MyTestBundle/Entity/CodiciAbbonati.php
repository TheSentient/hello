<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CodiciAbbonati
 */
class CodiciAbbonati
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nominativo;

    /**
     * @var string
     */
    private $codiceAbbonato;

    /**
     * @var \DateTime
     */
    private $dataScadenza;


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
     * Set nominativo
     *
     * @param string $nominativo
     * @return CodiciAbbonati
     */
    public function setNominativo($nominativo)
    {
        $this->nominativo = $nominativo;

        return $this;
    }

    /**
     * Get nominativo
     *
     * @return string 
     */
    public function getNominativo()
    {
        return $this->nominativo;
    }

    /**
     * Set codiceAbbonato
     *
     * @param string $codiceAbbonato
     * @return CodiciAbbonati
     */
    public function setCodiceAbbonato($codiceAbbonato)
    {
        $this->codiceAbbonato = $codiceAbbonato;

        return $this;
    }

    /**
     * Get codiceAbbonato
     *
     * @return string 
     */
    public function getCodiceAbbonato()
    {
        return $this->codiceAbbonato;
    }

    /**
     * Set dataScadenza
     *
     * @param \DateTime $dataScadenza
     * @return CodiciAbbonati
     */
    public function setDataScadenza($dataScadenza)
    {
        $this->dataScadenza = $dataScadenza;

        return $this;
    }

    /**
     * Get dataScadenza
     *
     * @return \DateTime 
     */
    public function getDataScadenza()
    {
        return $this->dataScadenza;
    }
}
