<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Libreria
 *
 * @ORM\Table(name="libreria", uniqueConstraints={@ORM\UniqueConstraint(name="CODICE", columns={"CODICE"})})
 * @ORM\Entity
 */
class Libreria
{
    /**
     * @var string
     *
     * @ORM\Column(name="CODICE", type="string", length=30, nullable=false)
     */
    private $codice;

    /**
     * @var string
     *
     * @ORM\Column(name="AUTORE", type="string", length=150, nullable=true)
     */
    private $autore;

    /**
     * @var string
     *
     * @ORM\Column(name="TITOLO", type="string", length=250, nullable=true)
     */
    private $titolo;

    /**
     * @var string
     *
     * @ORM\Column(name="TITOLO_RIDOTTO", type="string", length=200, nullable=true)
     */
    private $titoloRidotto;

    /**
     * @var string
     *
     * @ORM\Column(name="ANNO", type="string", length=50, nullable=false)
     */
    private $anno;

    /**
     * @var string
     *
     * @ORM\Column(name="IMG", type="string", length=64, nullable=true)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="EDITORE", type="string", length=200, nullable=false)
     */
    private $editore;

    /**
     * @var string
     *
     * @ORM\Column(name="NOVITA", type="string", length=50, nullable=false)
     */
    private $novita;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIZIONE", type="text", nullable=true)
     */
    private $descrizione;

    /**
     * @var float
     *
     * @ORM\Column(name="PREZZO", type="float", precision=10, scale=2, nullable=true)
     */
    private $prezzo;

    /**
     * @var string
     *
     * @ORM\Column(name="COLLANA", type="string", length=40, nullable=true)
     */
    private $collana;

    /**
     * @var string
     *
     * @ORM\Column(name="INFORMAZIONI_SUPPLEMENTARI", type="text", nullable=true)
     */
    private $informazioniSupplementari;

    /**
     * @var integer
     *
     * @ORM\Column(name="CD", type="integer", nullable=true)
     */
    private $cd;

    /**
     * @var string
     *
     * @ORM\Column(name="TESTI_CORRELATI", type="string", length=250, nullable=true)
     */
    private $testiCorrelati;

    /**
     * @var string
     *
     * @ORM\Column(name="INDICE_LIBRO", type="text", nullable=true)
     */
    private $indiceLibro;

    /**
     * @var string
     *
     * @ORM\Column(name="VETRINA", type="string", length=50, nullable=true)
     */
    private $vetrina;

    /**
     * @var string
     *
     * @ORM\Column(name="KEYWORDS", type="text", nullable=true)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="AGGIORNAMENTO", type="string", length=200, nullable=true)
     */
    private $aggiornamento;

    /**
     * @var string
     *
     * @ORM\Column(name="DISPONIBILE", type="string", length=50, nullable=false)
     */
    private $disponibile;

    /**
     * @var string
     *
     * @ORM\Column(name="PUBBLICATO", type="string", length=50, nullable=false)
     */
    private $pubblicato;

    /**
     * @var integer
     *
     * @ORM\Column(name="CONTATORE", type="integer", nullable=false)
     */
    private $contatore;

    /**
     * @var integer
     *
     * @ORM\Column(name="CONTATOREMENSILE", type="integer", nullable=false)
     */
    private $contatoremensile;

    /**
     * @var integer
     *
     * @ORM\Column(name="QTA", type="integer", nullable=true)
     */
    private $qta;

    /**
     * @var string
     *
     * @ORM\Column(name="FUORI_CATALOGO", type="string", length=50, nullable=false)
     */
    private $fuoriCatalogo;

    /**
     * @var integer
     *
     * @ORM\Column(name="MIPIACI", type="integer", nullable=false)
     */
    private $mipiaci;

    /**
     * @var string
     *
     * @ORM\Column(name="IVA", type="string", length=50, nullable=true)
     */
    private $iva;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set codice
     *
     * @param string $codice
     * @return Libreria
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
     * Set autore
     *
     * @param string $autore
     * @return Libreria
     */
    public function setAutore($autore)
    {
        $this->autore = $autore;

        return $this;
    }

    /**
     * Get autore
     *
     * @return string 
     */
    public function getAutore()
    {
        return $this->autore;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     * @return Libreria
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
     * Set titoloRidotto
     *
     * @param string $titoloRidotto
     * @return Libreria
     */
    public function setTitoloRidotto($titoloRidotto)
    {
        $this->titoloRidotto = $titoloRidotto;

        return $this;
    }

    /**
     * Get titoloRidotto
     *
     * @return string 
     */
    public function getTitoloRidotto()
    {
        return $this->titoloRidotto;
    }

    /**
     * Set anno
     *
     * @param string $anno
     * @return Libreria
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;

        return $this;
    }

    /**
     * Get anno
     *
     * @return string 
     */
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Libreria
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
     * Set editore
     *
     * @param string $editore
     * @return Libreria
     */
    public function setEditore($editore)
    {
        $this->editore = $editore;

        return $this;
    }

    /**
     * Get editore
     *
     * @return string 
     */
    public function getEditore()
    {
        return $this->editore;
    }

    /**
     * Set novita
     *
     * @param string $novita
     * @return Libreria
     */
    public function setNovita($novita)
    {
        $this->novita = $novita;

        return $this;
    }

    /**
     * Get novita
     *
     * @return string 
     */
    public function getNovita()
    {
        return $this->novita;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     * @return Libreria
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
     * Set prezzo
     *
     * @param float $prezzo
     * @return Libreria
     */
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    /**
     * Get prezzo
     *
     * @return float 
     */
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set collana
     *
     * @param string $collana
     * @return Libreria
     */
    public function setCollana($collana)
    {
        $this->collana = $collana;

        return $this;
    }

    /**
     * Get collana
     *
     * @return string 
     */
    public function getCollana()
    {
        return $this->collana;
    }

    /**
     * Set informazioniSupplementari
     *
     * @param string $informazioniSupplementari
     * @return Libreria
     */
    public function setInformazioniSupplementari($informazioniSupplementari)
    {
        $this->informazioniSupplementari = $informazioniSupplementari;

        return $this;
    }

    /**
     * Get informazioniSupplementari
     *
     * @return string 
     */
    public function getInformazioniSupplementari()
    {
        return $this->informazioniSupplementari;
    }

    /**
     * Set cd
     *
     * @param integer $cd
     * @return Libreria
     */
    public function setCd($cd)
    {
        $this->cd = $cd;

        return $this;
    }

    /**
     * Get cd
     *
     * @return integer 
     */
    public function getCd()
    {
        return $this->cd;
    }

    /**
     * Set testiCorrelati
     *
     * @param string $testiCorrelati
     * @return Libreria
     */
    public function setTestiCorrelati($testiCorrelati)
    {
        $this->testiCorrelati = $testiCorrelati;

        return $this;
    }

    /**
     * Get testiCorrelati
     *
     * @return string 
     */
    public function getTestiCorrelati()
    {
        return $this->testiCorrelati;
    }

    /**
     * Set indiceLibro
     *
     * @param string $indiceLibro
     * @return Libreria
     */
    public function setIndiceLibro($indiceLibro)
    {
        $this->indiceLibro = $indiceLibro;

        return $this;
    }

    /**
     * Get indiceLibro
     *
     * @return string 
     */
    public function getIndiceLibro()
    {
        return $this->indiceLibro;
    }

    /**
     * Set vetrina
     *
     * @param string $vetrina
     * @return Libreria
     */
    public function setVetrina($vetrina)
    {
        $this->vetrina = $vetrina;

        return $this;
    }

    /**
     * Get vetrina
     *
     * @return string 
     */
    public function getVetrina()
    {
        return $this->vetrina;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Libreria
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set aggiornamento
     *
     * @param string $aggiornamento
     * @return Libreria
     */
    public function setAggiornamento($aggiornamento)
    {
        $this->aggiornamento = $aggiornamento;

        return $this;
    }

    /**
     * Get aggiornamento
     *
     * @return string 
     */
    public function getAggiornamento()
    {
        return $this->aggiornamento;
    }

    /**
     * Set disponibile
     *
     * @param string $disponibile
     * @return Libreria
     */
    public function setDisponibile($disponibile)
    {
        $this->disponibile = $disponibile;

        return $this;
    }

    /**
     * Get disponibile
     *
     * @return string 
     */
    public function getDisponibile()
    {
        return $this->disponibile;
    }

    /**
     * Set pubblicato
     *
     * @param string $pubblicato
     * @return Libreria
     */
    public function setPubblicato($pubblicato)
    {
        $this->pubblicato = $pubblicato;

        return $this;
    }

    /**
     * Get pubblicato
     *
     * @return string 
     */
    public function getPubblicato()
    {
        return $this->pubblicato;
    }

    /**
     * Set contatore
     *
     * @param integer $contatore
     * @return Libreria
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
     * Set contatoremensile
     *
     * @param integer $contatoremensile
     * @return Libreria
     */
    public function setContatoremensile($contatoremensile)
    {
        $this->contatoremensile = $contatoremensile;

        return $this;
    }

    /**
     * Get contatoremensile
     *
     * @return integer 
     */
    public function getContatoremensile()
    {
        return $this->contatoremensile;
    }

    /**
     * Set qta
     *
     * @param integer $qta
     * @return Libreria
     */
    public function setQta($qta)
    {
        $this->qta = $qta;

        return $this;
    }

    /**
     * Get qta
     *
     * @return integer 
     */
    public function getQta()
    {
        return $this->qta;
    }

    /**
     * Set fuoriCatalogo
     *
     * @param string $fuoriCatalogo
     * @return Libreria
     */
    public function setFuoriCatalogo($fuoriCatalogo)
    {
        $this->fuoriCatalogo = $fuoriCatalogo;

        return $this;
    }

    /**
     * Get fuoriCatalogo
     *
     * @return string 
     */
    public function getFuoriCatalogo()
    {
        return $this->fuoriCatalogo;
    }

    /**
     * Set mipiaci
     *
     * @param integer $mipiaci
     * @return Libreria
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
     * Set iva
     *
     * @param string $iva
     * @return Libreria
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return string 
     */
    public function getIva()
    {
        return $this->iva;
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
