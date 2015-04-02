<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivioCorsi
 */
class ArchivioCorsi
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
    private $nomeCorso;

    /**
     * @var string
     */
    private $societa;

    /**
     * @var string
     */
    private $sede;

    /**
     * @var string
     */
    private $img;

    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var \DateTime
     */
    private $dataInizio;

    /**
     * @var float
     */
    private $costo;

    /**
     * @var float
     */
    private $quotaIscrizione;

    /**
     * @var integer
     */
    private $sconto;

    /**
     * @var string
     */
    private $speseSpedizione;

    /**
     * @var string
     */
    private $note;


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
     * @return ArchivioCorsi
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
     * Set nomeCorso
     *
     * @param string $nomeCorso
     * @return ArchivioCorsi
     */
    public function setNomeCorso($nomeCorso)
    {
        $this->nomeCorso = $nomeCorso;

        return $this;
    }

    /**
     * Get nomeCorso
     *
     * @return string 
     */
    public function getNomeCorso()
    {
        return $this->nomeCorso;
    }

    /**
     * Set societa
     *
     * @param string $societa
     * @return ArchivioCorsi
     */
    public function setSocieta($societa)
    {
        $this->societa = $societa;

        return $this;
    }

    /**
     * Get societa
     *
     * @return string 
     */
    public function getSocieta()
    {
        return $this->societa;
    }

    /**
     * Set sede
     *
     * @param string $sede
     * @return ArchivioCorsi
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
     * Set img
     *
     * @param string $img
     * @return ArchivioCorsi
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     * @return ArchivioCorsi
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
     * Set dataInizio
     *
     * @param \DateTime $dataInizio
     * @return ArchivioCorsi
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
     * Set costo
     *
     * @param float $costo
     * @return ArchivioCorsi
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return float 
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set quotaIscrizione
     *
     * @param float $quotaIscrizione
     * @return ArchivioCorsi
     */
    public function setQuotaIscrizione($quotaIscrizione)
    {
        $this->quotaIscrizione = $quotaIscrizione;

        return $this;
    }

    /**
     * Get quotaIscrizione
     *
     * @return float 
     */
    public function getQuotaIscrizione()
    {
        return $this->quotaIscrizione;
    }

    /**
     * Set sconto
     *
     * @param integer $sconto
     * @return ArchivioCorsi
     */
    public function setSconto($sconto)
    {
        $this->sconto = $sconto;

        return $this;
    }

    /**
     * Get sconto
     *
     * @return integer 
     */
    public function getSconto()
    {
        return $this->sconto;
    }

    /**
     * Set speseSpedizione
     *
     * @param string $speseSpedizione
     * @return ArchivioCorsi
     */
    public function setSpeseSpedizione($speseSpedizione)
    {
        $this->speseSpedizione = $speseSpedizione;

        return $this;
    }

    /**
     * Get speseSpedizione
     *
     * @return string 
     */
    public function getSpeseSpedizione()
    {
        return $this->speseSpedizione;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return ArchivioCorsi
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }
}
