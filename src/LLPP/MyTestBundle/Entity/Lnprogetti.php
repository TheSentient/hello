<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lnprogetti
 */
class Lnprogetti
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
     * @var string
     */
    private $nomeprogetto;

    /**
     * @var string
     */
    private $duratalavori;

    /**
     * @var string
     */
    private $dittalavori;

    /**
     * @var string
     */
    private $cittalavori;

    /**
     * @var string
     */
    private $indirizzolavori;

    /**
     * @var string
     */
    private $statolavori;

    /**
     * @var string
     */
    private $destinazionelavori;

    /**
     * @var string
     */
    private $descrizionelavori;

    /**
     * @var integer
     */
    private $imgprogetto;


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
     * @return Lnprogetti
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
     * Set nomeprogetto
     *
     * @param string $nomeprogetto
     * @return Lnprogetti
     */
    public function setNomeprogetto($nomeprogetto)
    {
        $this->nomeprogetto = $nomeprogetto;

        return $this;
    }

    /**
     * Get nomeprogetto
     *
     * @return string 
     */
    public function getNomeprogetto()
    {
        return $this->nomeprogetto;
    }

    /**
     * Set duratalavori
     *
     * @param string $duratalavori
     * @return Lnprogetti
     */
    public function setDuratalavori($duratalavori)
    {
        $this->duratalavori = $duratalavori;

        return $this;
    }

    /**
     * Get duratalavori
     *
     * @return string 
     */
    public function getDuratalavori()
    {
        return $this->duratalavori;
    }

    /**
     * Set dittalavori
     *
     * @param string $dittalavori
     * @return Lnprogetti
     */
    public function setDittalavori($dittalavori)
    {
        $this->dittalavori = $dittalavori;

        return $this;
    }

    /**
     * Get dittalavori
     *
     * @return string 
     */
    public function getDittalavori()
    {
        return $this->dittalavori;
    }

    /**
     * Set cittalavori
     *
     * @param string $cittalavori
     * @return Lnprogetti
     */
    public function setCittalavori($cittalavori)
    {
        $this->cittalavori = $cittalavori;

        return $this;
    }

    /**
     * Get cittalavori
     *
     * @return string 
     */
    public function getCittalavori()
    {
        return $this->cittalavori;
    }

    /**
     * Set indirizzolavori
     *
     * @param string $indirizzolavori
     * @return Lnprogetti
     */
    public function setIndirizzolavori($indirizzolavori)
    {
        $this->indirizzolavori = $indirizzolavori;

        return $this;
    }

    /**
     * Get indirizzolavori
     *
     * @return string 
     */
    public function getIndirizzolavori()
    {
        return $this->indirizzolavori;
    }

    /**
     * Set statolavori
     *
     * @param string $statolavori
     * @return Lnprogetti
     */
    public function setStatolavori($statolavori)
    {
        $this->statolavori = $statolavori;

        return $this;
    }

    /**
     * Get statolavori
     *
     * @return string 
     */
    public function getStatolavori()
    {
        return $this->statolavori;
    }

    /**
     * Set destinazionelavori
     *
     * @param string $destinazionelavori
     * @return Lnprogetti
     */
    public function setDestinazionelavori($destinazionelavori)
    {
        $this->destinazionelavori = $destinazionelavori;

        return $this;
    }

    /**
     * Get destinazionelavori
     *
     * @return string 
     */
    public function getDestinazionelavori()
    {
        return $this->destinazionelavori;
    }

    /**
     * Set descrizionelavori
     *
     * @param string $descrizionelavori
     * @return Lnprogetti
     */
    public function setDescrizionelavori($descrizionelavori)
    {
        $this->descrizionelavori = $descrizionelavori;

        return $this;
    }

    /**
     * Get descrizionelavori
     *
     * @return string 
     */
    public function getDescrizionelavori()
    {
        return $this->descrizionelavori;
    }

    /**
     * Set imgprogetto
     *
     * @param integer $imgprogetto
     * @return Lnprogetti
     */
    public function setImgprogetto($imgprogetto)
    {
        $this->imgprogetto = $imgprogetto;

        return $this;
    }

    /**
     * Get imgprogetto
     *
     * @return integer 
     */
    public function getImgprogetto()
    {
        return $this->imgprogetto;
    }
}
