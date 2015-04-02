<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NovitaHomeFlash
 */
class NovitaHomeFlash
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
    private $categoria;

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
     * @var integer
     */
    private $contatore;

    /**
     * @var string
     */
    private $linkgenerato;

    /**
     * @var integer
     */
    private $mipiaci;

    /**
     * @var string
     */
    private $estatapiucliccata;


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
     * @return NovitaHomeFlash
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
     * Set categoria
     *
     * @param string $categoria
     * @return NovitaHomeFlash
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
     * Set testo
     *
     * @param string $testo
     * @return NovitaHomeFlash
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
     * @return NovitaHomeFlash
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
     * @return NovitaHomeFlash
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
     * @return NovitaHomeFlash
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
     * @return NovitaHomeFlash
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
     * Set contatore
     *
     * @param integer $contatore
     * @return NovitaHomeFlash
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

    /**
     * Set linkgenerato
     *
     * @param string $linkgenerato
     * @return NovitaHomeFlash
     */
    public function setLinkgenerato($linkgenerato)
    {
        $this->linkgenerato = $linkgenerato;

        return $this;
    }

    /**
     * Get linkgenerato
     *
     * @return string 
     */
    public function getLinkgenerato()
    {
        return $this->linkgenerato;
    }

    /**
     * Set mipiaci
     *
     * @param integer $mipiaci
     * @return NovitaHomeFlash
     */
    public function setMipiaci($mipiaci)
    {
        $this->mipiaci = $mipiaci;

        return $this;
    }

    /**
     * Get mipiaci
     *
     * @return integer 
     */
    public function getMipiaci()
    {
        return $this->mipiaci;
    }

    /**
     * Set estatapiucliccata
     *
     * @param string $estatapiucliccata
     * @return NovitaHomeFlash
     */
    public function setEstatapiucliccata($estatapiucliccata)
    {
        $this->estatapiucliccata = $estatapiucliccata;

        return $this;
    }

    /**
     * Get estatapiucliccata
     *
     * @return string 
     */
    public function getEstatapiucliccata()
    {
        return $this->estatapiucliccata;
    }
}
