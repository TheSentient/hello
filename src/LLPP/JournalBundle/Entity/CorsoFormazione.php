<?php

namespace LLPP\JournalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorsoFormazione
 */
class CorsoFormazione
{
    const ENTITY = 'LLPP\JournalBundle\Entity\CorsoFormazione';
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $modalita;

    /**
     * @var string
     */
    private $sede;

    /**
     * @var \DateTime
     */
    private $dataInizio;

    /**
     * @var \DateTime
     */
    private $dataFine;

    /**
     * @var string
     */
    private $durata;

    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var integer
     */
    private $cfp;

    /**
     * @var string
     */
    private $enteEsterno;

    /**
     * @var string
     */
    private $quotaIscrizione;

    /**
     * @var string
     */
    private $fotoUrl;

    /**
     * @var string
     */
    private $argomento;

    public function __toString()
    {
        return $this->getTitolo();
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

    /**
     * Set titolo
     *
     * @param string $titolo
     * @return CorsoFormazione
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
     * Set modalita
     *
     * @param string $modalita
     * @return CorsoFormazione
     */
    public function setModalita($modalita)
    {
        $this->modalita = $modalita;

        return $this;
    }

    /**
     * Get modalita
     *
     * @return string 
     */
    public function getModalita()
    {
        return $this->modalita;
    }

    /**
     * Set durata
     *
     * @param string $durata
     * @return CorsoFormazione
     */
    public function setDurata($durata)
    {
        $this->durata = $durata;

        return $this;
    }

    /**
     * Get durata
     *
     * @return string 
     */
    public function getDurata()
    {
        return $this->durata;
    }

    /**
     * Set dataInizio
     *
     * @param \DateTime $dataInizio
     * @return CorsoFormazione
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
     * @return CorsoFormazione
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
     * Set descrizione
     *
     * @param string $descrizione
     * @return CorsoFormazione
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string 
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set cfp
     *
     * @param integer $cfp
     * @return CorsoFormazione
     */
    public function setCfp($cfp)
    {
        $this->cfp = $cfp;

        return $this;
    }

    /**
     * Get cfp
     *
     * @return integer 
     */
    public function getCfp()
    {
        return $this->cfp;
    }

    /**
     * Set enteEsterno
     *
     * @param string $enteEsterno
     * @return CorsoFormazione
     */
    public function setEnteEsterno($enteEsterno)
    {
        $this->enteEsterno = $enteEsterno;

        return $this;
    }

    /**
     * Get enteEsterno
     *
     * @return string 
     */
    public function getEnteEsterno()
    {
        return $this->enteEsterno;
    }

    /**
     * Set quotaIscrizione
     *
     * @param string $quotaIscrizione
     * @return CorsoFormazione
     */
    public function setQuotaIscrizione($quotaIscrizione)
    {
        $this->quotaIscrizione = $quotaIscrizione;

        return $this;
    }

    /**
     * Get quotaIscrizione
     *
     * @return string 
     */
    public function getQuotaIscrizione()
    {
        return $this->quotaIscrizione;
    }

    /**
     * Set sede
     *
     * @param string $sede
     * @return CorsoFormazione
     */
    public function setSede($sede)
    {
        $this->sede = $sede;

        return $this;
    }

    /**
     * Get sede
     *
     * @return string 
     */
    public function getSede()
    {
        return $this->sede;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $linksCorrelati;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $filesAllegati;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->linksCorrelati = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filesAllegati = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set fotoUrl
     *
     * @param string $fotoUrl
     * @return CorsoFormazione
     */
    public function setFotoUrl($fotoUrl)
    {
        $this->fotoUrl = $fotoUrl;

        return $this;
    }

    /**
     * Get fotoUrl
     *
     * @return string 
     */
    public function getFotoUrl()
    {
        return $this->fotoUrl;
    }

    /**
     * Set argomento
     *
     * @param string $argomento
     * @return CorsoFormazione
     */
    public function setArgomento($argomento)
    {
        $this->argomento = $argomento;

        return $this;
    }

    /**
     * Get argomento
     *
     * @return string 
     */
    public function getArgomento()
    {
        return $this->argomento;
    }

    /**
     * Add linksCorrelati
     *
     * @param \LLPP\JournalBundle\Entity\LinkCorrelato $linksCorrelati
     * @return CorsoFormazione
     */
    public function addLinksCorrelati(\LLPP\JournalBundle\Entity\LinkCorrelato $linksCorrelati)
    {
        $this->linksCorrelati[] = $linksCorrelati;

        return $this;
    }

    /**
     * Remove linksCorrelati
     *
     * @param \LLPP\JournalBundle\Entity\LinkCorrelato $linksCorrelati
     */
    public function removeLinksCorrelati(\LLPP\JournalBundle\Entity\LinkCorrelato $linksCorrelati)
    {
        $this->linksCorrelati->removeElement($linksCorrelati);
    }

    /**
     * Get linksCorrelati
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLinksCorrelati()
    {
        return $this->linksCorrelati;
    }

    /**
     * Add filesAllegati
     *
     * @param \LLPP\JournalBundle\Entity\FileAllegato $filesAllegati
     * @return CorsoFormazione
     */
    public function addFilesAllegati(\LLPP\JournalBundle\Entity\FileAllegato $filesAllegati)
    {
        $this->filesAllegati[] = $filesAllegati;

        return $this;
    }

    /**
     * Remove filesAllegati
     *
     * @param \LLPP\JournalBundle\Entity\FileAllegato $filesAllegati
     */
    public function removeFilesAllegati(\LLPP\JournalBundle\Entity\FileAllegato $filesAllegati)
    {
        $this->filesAllegati->removeElement($filesAllegati);
    }

    /**
     * Get filesAllegati
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFilesAllegati()
    {
        return $this->filesAllegati;
    }
}
