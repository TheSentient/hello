<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NovitaHomeOld
 */
class NovitaHomeOld
{
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
    private $sottotitolo;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var string
     */
    private $tipoNovita;

    /**
     * @var string
     */
    private $titoloNovita;

    /**
     * @var string
     */
    private $gazzettaUfficiale;

    /**
     * @var string
     */
    private $imagine;

    /**
     * @var string
     */
    private $testo;

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $fileAllegati;

    /**
     * @var integer
     */
    private $ordine;

    /**
     * @var string
     */
    private $new;

    /**
     * @var string
     */
    private $sessione;

    /**
     * @var integer
     */
    private $contatore;


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
     * @return NovitaHomeOld
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
     * Set sottotitolo
     *
     * @param string $sottotitolo
     * @return NovitaHomeOld
     */
    public function setSottotitolo($sottotitolo)
    {
        $this->sottotitolo = $sottotitolo;

        return $this;
    }

    /**
     * Get sottotitolo
     *
     * @return string 
     */
    public function getSottotitolo()
    {
        return $this->sottotitolo;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return NovitaHomeOld
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set tipoNovita
     *
     * @param string $tipoNovita
     * @return NovitaHomeOld
     */
    public function setTipoNovita($tipoNovita)
    {
        $this->tipoNovita = $tipoNovita;

        return $this;
    }

    /**
     * Get tipoNovita
     *
     * @return string 
     */
    public function getTipoNovita()
    {
        return $this->tipoNovita;
    }

    /**
     * Set titoloNovita
     *
     * @param string $titoloNovita
     * @return NovitaHomeOld
     */
    public function setTitoloNovita($titoloNovita)
    {
        $this->titoloNovita = $titoloNovita;

        return $this;
    }

    /**
     * Get titoloNovita
     *
     * @return string 
     */
    public function getTitoloNovita()
    {
        return $this->titoloNovita;
    }

    /**
     * Set gazzettaUfficiale
     *
     * @param string $gazzettaUfficiale
     * @return NovitaHomeOld
     */
    public function setGazzettaUfficiale($gazzettaUfficiale)
    {
        $this->gazzettaUfficiale = $gazzettaUfficiale;

        return $this;
    }

    /**
     * Get gazzettaUfficiale
     *
     * @return string 
     */
    public function getGazzettaUfficiale()
    {
        return $this->gazzettaUfficiale;
    }

    /**
     * Set imagine
     *
     * @param string $imagine
     * @return NovitaHomeOld
     */
    public function setImagine($imagine)
    {
        $this->imagine = $imagine;

        return $this;
    }

    /**
     * Get imagine
     *
     * @return string 
     */
    public function getImagine()
    {
        return $this->imagine;
    }

    /**
     * Set testo
     *
     * @param string $testo
     * @return NovitaHomeOld
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
     * Set data
     *
     * @param \DateTime $data
     * @return NovitaHomeOld
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
     * Set link
     *
     * @param string $link
     * @return NovitaHomeOld
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set fileAllegati
     *
     * @param string $fileAllegati
     * @return NovitaHomeOld
     */
    public function setFileAllegati($fileAllegati)
    {
        $this->fileAllegati = $fileAllegati;

        return $this;
    }

    /**
     * Get fileAllegati
     *
     * @return string 
     */
    public function getFileAllegati()
    {
        return $this->fileAllegati;
    }

    /**
     * Set ordine
     *
     * @param integer $ordine
     * @return NovitaHomeOld
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
     * Set new
     *
     * @param string $new
     * @return NovitaHomeOld
     */
    public function setNew($new)
    {
        $this->new = $new;

        return $this;
    }

    /**
     * Get new
     *
     * @return string 
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Set sessione
     *
     * @param string $sessione
     * @return NovitaHomeOld
     */
    public function setSessione($sessione)
    {
        $this->sessione = $sessione;

        return $this;
    }

    /**
     * Get sessione
     *
     * @return string 
     */
    public function getSessione()
    {
        return $this->sessione;
    }

    /**
     * Set contatore
     *
     * @param integer $contatore
     * @return NovitaHomeOld
     */
    public function setContatore($contatore)
    {
        $this->contatore = $contatore;

        return $this;
    }

    /**
     * Get contatore
     *
     * @return integer 
     */
    public function getContatore()
    {
        return $this->contatore;
    }
}
