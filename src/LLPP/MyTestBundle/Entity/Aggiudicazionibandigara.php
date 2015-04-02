<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aggiudicazionibandigara
 */
class Aggiudicazionibandigara
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $aggiudicatario;

    /**
     * @var string
     */
    private $indirizzoaggiudicatario;

    /**
     * @var string
     */
    private $enteappaltante;

    /**
     * @var string
     */
    private $oggetto;

    /**
     * @var float
     */
    private $importo;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var \DateTime
     */
    private $dataaggiudicazione;

    /**
     * @var \DateTime
     */
    private $termine;

    /**
     * @var float
     */
    private $ribasso;

    /**
     * @var float
     */
    private $offerta;


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
     * Set aggiudicatario
     *
     * @param string $aggiudicatario
     * @return Aggiudicazionibandigara
     */
    public function setAggiudicatario($aggiudicatario)
    {
        $this->aggiudicatario = $aggiudicatario;

        return $this;
    }

    /**
     * Get aggiudicatario
     *
     * @return string 
     */
    public function getAggiudicatario()
    {
        return $this->aggiudicatario;
    }

    /**
     * Set indirizzoaggiudicatario
     *
     * @param string $indirizzoaggiudicatario
     * @return Aggiudicazionibandigara
     */
    public function setIndirizzoaggiudicatario($indirizzoaggiudicatario)
    {
        $this->indirizzoaggiudicatario = $indirizzoaggiudicatario;

        return $this;
    }

    /**
     * Get indirizzoaggiudicatario
     *
     * @return string 
     */
    public function getIndirizzoaggiudicatario()
    {
        return $this->indirizzoaggiudicatario;
    }

    /**
     * Set enteappaltante
     *
     * @param string $enteappaltante
     * @return Aggiudicazionibandigara
     */
    public function setEnteappaltante($enteappaltante)
    {
        $this->enteappaltante = $enteappaltante;

        return $this;
    }

    /**
     * Get enteappaltante
     *
     * @return string 
     */
    public function getEnteappaltante()
    {
        return $this->enteappaltante;
    }

    /**
     * Set oggetto
     *
     * @param string $oggetto
     * @return Aggiudicazionibandigara
     */
    public function setOggetto($oggetto)
    {
        $this->oggetto = $oggetto;

        return $this;
    }

    /**
     * Get oggetto
     *
     * @return string 
     */
    public function getOggetto()
    {
        return $this->oggetto;
    }

    /**
     * Set importo
     *
     * @param float $importo
     * @return Aggiudicazionibandigara
     */
    public function setImporto($importo)
    {
        $this->importo = $importo;

        return $this;
    }

    /**
     * Get importo
     *
     * @return float 
     */
    public function getImporto()
    {
        return $this->importo;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return Aggiudicazionibandigara
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
     * Set dataaggiudicazione
     *
     * @param \DateTime $dataaggiudicazione
     * @return Aggiudicazionibandigara
     */
    public function setDataaggiudicazione($dataaggiudicazione)
    {
        $this->dataaggiudicazione = $dataaggiudicazione;

        return $this;
    }

    /**
     * Get dataaggiudicazione
     *
     * @return \DateTime 
     */
    public function getDataaggiudicazione()
    {
        return $this->dataaggiudicazione;
    }

    /**
     * Set termine
     *
     * @param \DateTime $termine
     * @return Aggiudicazionibandigara
     */
    public function setTermine($termine)
    {
        $this->termine = $termine;

        return $this;
    }

    /**
     * Get termine
     *
     * @return \DateTime 
     */
    public function getTermine()
    {
        return $this->termine;
    }

    /**
     * Set ribasso
     *
     * @param float $ribasso
     * @return Aggiudicazionibandigara
     */
    public function setRibasso($ribasso)
    {
        $this->ribasso = $ribasso;

        return $this;
    }

    /**
     * Get ribasso
     *
     * @return float 
     */
    public function getRibasso()
    {
        return $this->ribasso;
    }

    /**
     * Set offerta
     *
     * @param float $offerta
     * @return Aggiudicazionibandigara
     */
    public function setOfferta($offerta)
    {
        $this->offerta = $offerta;

        return $this;
    }

    /**
     * Get offerta
     *
     * @return float 
     */
    public function getOfferta()
    {
        return $this->offerta;
    }
}
