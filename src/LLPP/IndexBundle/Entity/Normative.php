<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Normative
 *
 * @ORM\Table(name="normative")
 * @ORM\Entity
 */
class Normative
{
    /**
     * @var string
     *
     * @ORM\Column(name="titolo", type="string", length=200, nullable=true)
     */
    private $titolo;

    /**
     * @var string
     *
     * @ORM\Column(name="sottotitolo", type="string", length=200, nullable=true)
     */
    private $sottotitolo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_novita", type="string", length=300, nullable=true)
     */
    private $tipoNovita;

    /**
     * @var string
     *
     * @ORM\Column(name="titolo_novita", type="text", nullable=true)
     */
    private $titoloNovita;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_normative", type="date", nullable=true)
     */
    private $dataNormative;

    /**
     * @var string
     *
     * @ORM\Column(name="gazzetta_ufficiale", type="string", length=200, nullable=true)
     */
    private $gazzettaUfficiale;

    /**
     * @var string
     *
     * @ORM\Column(name="imagine", type="string", length=200, nullable=true)
     */
    private $imagine;

    /**
     * @var string
     *
     * @ORM\Column(name="testo", type="text", nullable=true)
     */
    private $testo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="text", nullable=true)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="file_allegati", type="text", nullable=true)
     */
    private $fileAllegati;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordine", type="integer", nullable=true)
     */
    private $ordine;

    /**
     * @var integer
     *
     * @ORM\Column(name="contatore", type="integer", nullable=true)
     */
    private $contatore;

    /**
     * @var string
     *
     * @ORM\Column(name="linkGenerato", type="string", length=255, nullable=true)
     */
    private $linkgenerato;

    /**
     * @var integer
     *
     * @ORM\Column(name="mipiaci", type="integer", nullable=false)
     */
    private $mipiaci;

    /**
     * @var string
     *
     * @ORM\Column(name="eStataPiuCliccata", type="string", length=50, nullable=false)
     */
    private $estatapiucliccata;

    /**
     * @var string
     *
     * @ORM\Column(name="commenti_abilitati", type="string", length=50, nullable=true)
     */
    private $commentiAbilitati;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set titolo
     *
     * @param string $titolo
     * @return Normative
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
     * @return Normative
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
     * Set tipoNovita
     *
     * @param string $tipoNovita
     * @return Normative
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
     * @return Normative
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
     * Set dataNormative
     *
     * @param \DateTime $dataNormative
     * @return Normative
     */
    public function setDataNormative($dataNormative)
    {
        $this->dataNormative = $dataNormative;

        return $this;
    }

    /**
     * Get dataNormative
     *
     * @return \DateTime 
     */
    public function getDataNormative()
    {
        return $this->dataNormative;
    }

    /**
     * Set gazzettaUfficiale
     *
     * @param string $gazzettaUfficiale
     * @return Normative
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
     * @return Normative
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
     * @return Normative
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
     * @return Normative
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
     * @return Normative
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
     * @return Normative
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
     * @return Normative
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
     * @return Normative
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
     * @return Normative
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
     * @return Normative
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
     * @return Normative
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

    /**
     * Set commentiAbilitati
     *
     * @param string $commentiAbilitati
     * @return Normative
     */
    public function setCommentiAbilitati($commentiAbilitati)
    {
        $this->commentiAbilitati = $commentiAbilitati;

        return $this;
    }

    /**
     * Get commentiAbilitati
     *
     * @return string 
     */
    public function getCommentiAbilitati()
    {
        return $this->commentiAbilitati;
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
}
