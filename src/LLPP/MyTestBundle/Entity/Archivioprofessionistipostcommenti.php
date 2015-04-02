<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archivioprofessionistipostcommenti
 */
class Archivioprofessionistipostcommenti
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
     * @var string
     */
    private $guidprofessionista;

    /**
     * @var string
     */
    private $guidpost;

    /**
     * @var string
     */
    private $testo;

    /**
     * @var \DateTime
     */
    private $quando;

    /**
     * @var integer
     */
    private $like;


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
     * @return Archivioprofessionistipostcommenti
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
     * @return Archivioprofessionistipostcommenti
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
     * Set guidprofessionista
     *
     * @param string $guidprofessionista
     * @return Archivioprofessionistipostcommenti
     */
    public function setGuidprofessionista($guidprofessionista)
    {
        $this->guidprofessionista = $guidprofessionista;

        return $this;
    }

    /**
     * Get guidprofessionista
     *
     * @return string 
     */
    public function getGuidprofessionista()
    {
        return $this->guidprofessionista;
    }

    /**
     * Set guidpost
     *
     * @param string $guidpost
     * @return Archivioprofessionistipostcommenti
     */
    public function setGuidpost($guidpost)
    {
        $this->guidpost = $guidpost;

        return $this;
    }

    /**
     * Get guidpost
     *
     * @return string 
     */
    public function getGuidpost()
    {
        return $this->guidpost;
    }

    /**
     * Set testo
     *
     * @param string $testo
     * @return Archivioprofessionistipostcommenti
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
     * Set quando
     *
     * @param \DateTime $quando
     * @return Archivioprofessionistipostcommenti
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

    /**
     * Set like
     *
     * @param integer $like
     * @return Archivioprofessionistipostcommenti
     */
    public function setLike($like)
    {
        $this->like = $like;

        return $this;
    }

    /**
     * Get like
     *
     * @return integer 
     */
    public function getLike()
    {
        return $this->like;
    }
}
