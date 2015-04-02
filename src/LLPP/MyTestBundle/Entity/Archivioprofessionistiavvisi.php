<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archivioprofessionistiavvisi
 */
class Archivioprofessionistiavvisi
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $guid;

    /**
     * @var integer
     */
    private $idprofessionista;

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $testo;

    /**
     * @var string
     */
    private $pubblicato;


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
     * Set guid
     *
     * @param string $guid
     * @return Archivioprofessionistiavvisi
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get guid
     *
     * @return string 
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set idprofessionista
     *
     * @param integer $idprofessionista
     * @return Archivioprofessionistiavvisi
     */
    public function setIdprofessionista($idprofessionista)
    {
        $this->idprofessionista = $idprofessionista;

        return $this;
    }

    /**
     * Get idprofessionista
     *
     * @return integer 
     */
    public function getIdprofessionista()
    {
        return $this->idprofessionista;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return Archivioprofessionistiavvisi
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     * @return Archivioprofessionistiavvisi
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string 
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set testo
     *
     * @param string $testo
     * @return Archivioprofessionistiavvisi
     */
    public function setTesto($testo)
    {
        $this->testo = $testo;

        return $this;
    }

    /**
     * Get testo
     *
     * @return string 
     */
    public function getTesto()
    {
        return $this->testo;
    }

    /**
     * Set pubblicato
     *
     * @param string $pubblicato
     * @return Archivioprofessionistiavvisi
     */
    public function setPubblicato($pubblicato)
    {
        $this->pubblicato = $pubblicato;

        return $this;
    }

    /**
     * Get pubblicato
     *
     * @return string 
     */
    public function getPubblicato()
    {
        return $this->pubblicato;
    }
}
