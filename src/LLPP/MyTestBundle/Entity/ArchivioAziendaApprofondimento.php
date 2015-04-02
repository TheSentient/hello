<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivioAziendaApprofondimento
 */
class ArchivioAziendaApprofondimento
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idazienda;

    /**
     * @var string
     */
    private $testoapprofondimento;

    /**
     * @var string
     */
    private $bannerinfo;

    /**
     * @var string
     */
    private $linkbannerinfo;

    /**
     * @var string
     */
    private $testopostinvio;

    /**
     * @var string
     */
    private $linkpostinvio;


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
     * Set idazienda
     *
     * @param integer $idazienda
     * @return ArchivioAziendaApprofondimento
     */
    public function setIdazienda($idazienda)
    {
        $this->idazienda = $idazienda;

        return $this;
    }

    /**
     * Get idazienda
     *
     * @return integer 
     */
    public function getIdazienda()
    {
        return $this->idazienda;
    }

    /**
     * Set testoapprofondimento
     *
     * @param string $testoapprofondimento
     * @return ArchivioAziendaApprofondimento
     */
    public function setTestoapprofondimento($testoapprofondimento)
    {
        $this->testoapprofondimento = $testoapprofondimento;

        return $this;
    }

    /**
     * Get testoapprofondimento
     *
     * @return string 
     */
    public function getTestoapprofondimento()
    {
        return $this->testoapprofondimento;
    }

    /**
     * Set bannerinfo
     *
     * @param string $bannerinfo
     * @return ArchivioAziendaApprofondimento
     */
    public function setBannerinfo($bannerinfo)
    {
        $this->bannerinfo = $bannerinfo;

        return $this;
    }

    /**
     * Get bannerinfo
     *
     * @return string 
     */
    public function getBannerinfo()
    {
        return $this->bannerinfo;
    }

    /**
     * Set linkbannerinfo
     *
     * @param string $linkbannerinfo
     * @return ArchivioAziendaApprofondimento
     */
    public function setLinkbannerinfo($linkbannerinfo)
    {
        $this->linkbannerinfo = $linkbannerinfo;

        return $this;
    }

    /**
     * Get linkbannerinfo
     *
     * @return string 
     */
    public function getLinkbannerinfo()
    {
        return $this->linkbannerinfo;
    }

    /**
     * Set testopostinvio
     *
     * @param string $testopostinvio
     * @return ArchivioAziendaApprofondimento
     */
    public function setTestopostinvio($testopostinvio)
    {
        $this->testopostinvio = $testopostinvio;

        return $this;
    }

    /**
     * Get testopostinvio
     *
     * @return string 
     */
    public function getTestopostinvio()
    {
        return $this->testopostinvio;
    }

    /**
     * Set linkpostinvio
     *
     * @param string $linkpostinvio
     * @return ArchivioAziendaApprofondimento
     */
    public function setLinkpostinvio($linkpostinvio)
    {
        $this->linkpostinvio = $linkpostinvio;

        return $this;
    }

    /**
     * Get linkpostinvio
     *
     * @return string 
     */
    public function getLinkpostinvio()
    {
        return $this->linkpostinvio;
    }
}
