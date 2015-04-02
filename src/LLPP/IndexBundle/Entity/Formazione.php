<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formazione
 *
 * @ORM\Table(name="formazione")
 * @ORM\Entity
 */
class Formazione
{
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
     * @ORM\Column(name="data_normativa", type="date", nullable=true)
     */
    private $dataNormativa;

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
     * @var string
     *
     * @ORM\Column(name="new", type="string", length=50, nullable=true)
     */
    private $new;

    /**
     * @var string
     *
     * @ORM\Column(name="sessione", type="string", length=80, nullable=true)
     */
    private $sessione;

    /**
     * @var integer
     *
     * @ORM\Column(name="contatore", type="integer", nullable=true)
     */
    private $contatore;

    /**
     * @var string
     *
     * @ORM\Column(name="num_llpp", type="string", length=200, nullable=true)
     */
    private $numLlpp;

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
     * @var string
     *
     * @ORM\Column(name="normative_correlate", type="string", length=255, nullable=true)
     */
    private $normativeCorrelate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set sottotitolo
     *
     * @param string $sottotitolo
     * @return Formazione
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
     * @return Formazione
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
     * @return Formazione
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
     * Set dataNormativa
     *
     * @param \DateTime $dataNormativa
     * @return Formazione
     */
    public function setDataNormativa($dataNormativa)
    {
        $this->dataNormativa = $dataNormativa;

        return $this;
    }

    /**
     * Get dataNormativa
     *
     * @return \DateTime 
     */
    public function getDataNormativa()
    {
        return $this->dataNormativa;
    }

    /**
     * Set gazzettaUfficiale
     *
     * @param string $gazzettaUfficiale
     * @return Formazione
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
     * @return Formazione
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
     * @return Formazione
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
     * @return Formazione
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
     * @return Formazione
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
     * @return Formazione
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
     * @return Formazione
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
     * @return Formazione
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
     * @return Formazione
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
     * @return Formazione
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
     * Set numLlpp
     *
     * @param string $numLlpp
     * @return Formazione
     */
    public function setNumLlpp($numLlpp)
    {
        $this->numLlpp = $numLlpp;

        return $this;
    }

    /**
     * Get numLlpp
     *
     * @return string 
     */
    public function getNumLlpp()
    {
        return $this->numLlpp;
    }

    /**
     * Set linkgenerato
     *
     * @param string $linkgenerato
     * @return Formazione
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
     * @return Formazione
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
     * @return Formazione
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
     * @return Formazione
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
     * Set normativeCorrelate
     *
     * @param string $normativeCorrelate
     * @return Formazione
     */
    public function setNormativeCorrelate($normativeCorrelate)
    {
        $this->normativeCorrelate = $normativeCorrelate;

        return $this;
    }

    /**
     * Get normativeCorrelate
     *
     * @return string 
     */
    public function getNormativeCorrelate()
    {
        return $this->normativeCorrelate;
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
