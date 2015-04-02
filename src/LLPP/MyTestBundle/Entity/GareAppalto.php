<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GareAppalto
 */
class GareAppalto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ente;

    /**
     * @var string
     */
    private $indirizzo;

    /**
     * @var string
     */
    private $cap;

    /**
     * @var string
     */
    private $prov;

    /**
     * @var string
     */
    private $regione;

    /**
     * @var string
     */
    private $oggetto;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var float
     */
    private $impopere;

    /**
     * @var \DateTime
     */
    private $dataScadenza;

    /**
     * @var string
     */
    private $allegati;

    /**
     * @var string
     */
    private $evidenza;


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
     * Set ente
     *
     * @param string $ente
     * @return GareAppalto
     */
    public function setEnte($ente)
    {
        $this->ente = $ente;

        return $this;
    }

    /**
     * Get ente
     *
     * @return string 
     */
    public function getEnte()
    {
        return $this->ente;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return GareAppalto
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string 
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set cap
     *
     * @param string $cap
     * @return GareAppalto
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return string 
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set prov
     *
     * @param string $prov
     * @return GareAppalto
     */
    public function setProv($prov)
    {
        $this->prov = $prov;

        return $this;
    }

    /**
     * Get prov
     *
     * @return string 
     */
    public function getProv()
    {
        return $this->prov;
    }

    /**
     * Set regione
     *
     * @param string $regione
     * @return GareAppalto
     */
    public function setRegione($regione)
    {
        $this->regione = $regione;

        return $this;
    }

    /**
     * Get regione
     *
     * @return string 
     */
    public function getRegione()
    {
        return $this->regione;
    }

    /**
     * Set oggetto
     *
     * @param string $oggetto
     * @return GareAppalto
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
     * Set categoria
     *
     * @param string $categoria
     * @return GareAppalto
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
     * Set impopere
     *
     * @param float $impopere
     * @return GareAppalto
     */
    public function setImpopere($impopere)
    {
        $this->impopere = $impopere;

        return $this;
    }

    /**
     * Get impopere
     *
     * @return float 
     */
    public function getImpopere()
    {
        return $this->impopere;
    }

    /**
     * Set dataScadenza
     *
     * @param \DateTime $dataScadenza
     * @return GareAppalto
     */
    public function setDataScadenza($dataScadenza)
    {
        $this->dataScadenza = $dataScadenza;

        return $this;
    }

    /**
     * Get dataScadenza
     *
     * @return \DateTime 
     */
    public function getDataScadenza()
    {
        return $this->dataScadenza;
    }

    /**
     * Set allegati
     *
     * @param string $allegati
     * @return GareAppalto
     */
    public function setAllegati($allegati)
    {
        $this->allegati = $allegati;

        return $this;
    }

    /**
     * Get allegati
     *
     * @return string 
     */
    public function getAllegati()
    {
        return $this->allegati;
    }

    /**
     * Set evidenza
     *
     * @param string $evidenza
     * @return GareAppalto
     */
    public function setEvidenza($evidenza)
    {
        $this->evidenza = $evidenza;

        return $this;
    }

    /**
     * Get evidenza
     *
     * @return string 
     */
    public function getEvidenza()
    {
        return $this->evidenza;
    }
}
