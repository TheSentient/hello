<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlppArticoliVendita
 *
 * @ORM\Table(name="llpp_articoli_vendita", uniqueConstraints={@ORM\UniqueConstraint(name="CODICE", columns={"CODICE"})})
 * @ORM\Entity
 */
class LlppArticoliVendita
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
     * @ORM\Column(name="IMG", type="string", length=64, nullable=true)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="ANNO", type="string", length=50, nullable=false)
     */
    private $anno;

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
     * @var float
     *
     * @ORM\Column(name="PREZZO_OFFERTA", type="float", precision=10, scale=2, nullable=true)
     */
    private $prezzoOfferta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_COLLANA", type="string", length=40, nullable=true)
     */
    private $idCollana;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMATO", type="text", nullable=true)
     */
    private $formato;

    /**
     * @var integer
     *
     * @ORM\Column(name="CD", type="integer", nullable=true)
     */
    private $cd;

    /**
     * @var string
     *
     * @ORM\Column(name="DEMO", type="string", length=200, nullable=true)
     */
    private $demo;

    /**
     * @var string
     *
     * @ORM\Column(name="PROMOZIONE", type="string", length=50, nullable=false)
     */
    private $promozione;

    /**
     * @var string
     *
     * @ORM\Column(name="INDICE_LIBRO", type="text", nullable=true)
     */
    private $indiceLibro;

    /**
     * @var string
     *
     * @ORM\Column(name="SPESE_SPEDIZIONE", type="string", length=50, nullable=true)
     */
    private $speseSpedizione;

    /**
     * @var string
     *
     * @ORM\Column(name="VETRINA", type="string", length=50, nullable=true)
     */
    private $vetrina;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORDINE_VETRINA", type="integer", nullable=true)
     */
    private $ordineVetrina;

    /**
     * @var string
     *
     * @ORM\Column(name="AGGIORNAMENTO", type="string", length=200, nullable=true)
     */
    private $aggiornamento;

    /**
     * @var string
     *
     * @ORM\Column(name="TESTO_DEMO", type="text", nullable=true)
     */
    private $testoDemo;

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
     * @return LlppArticoliVendita
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
     * Set titolo
     *
     * @param string $titolo
     * @return LlppArticoliVendita
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
     * @return LlppArticoliVendita
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
     * Set img
     *
     * @param string $img
     * @return LlppArticoliVendita
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
     * Set anno
     *
     * @param string $anno
     * @return LlppArticoliVendita
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
     * Set descrizione
     *
     * @param string $descrizione
     * @return LlppArticoliVendita
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
     * @return LlppArticoliVendita
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
     * Set prezzoOfferta
     *
     * @param float $prezzoOfferta
     * @return LlppArticoliVendita
     */
    public function setPrezzoOfferta($prezzoOfferta)
    {
        $this->prezzoOfferta = $prezzoOfferta;

        return $this;
    }

    /**
     * Get prezzoOfferta
     *
     * @return float 
     */
    public function getPrezzoOfferta()
    {
        return $this->prezzoOfferta;
    }

    /**
     * Set idCollana
     *
     * @param string $idCollana
     * @return LlppArticoliVendita
     */
    public function setIdCollana($idCollana)
    {
        $this->idCollana = $idCollana;

        return $this;
    }

    /**
     * Get idCollana
     *
     * @return string 
     */
    public function getIdCollana()
    {
        return $this->idCollana;
    }

    /**
     * Set formato
     *
     * @param string $formato
     * @return LlppArticoliVendita
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;

        return $this;
    }

    /**
     * Get formato
     *
     * @return string 
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * Set cd
     *
     * @param integer $cd
     * @return LlppArticoliVendita
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
     * Set demo
     *
     * @param string $demo
     * @return LlppArticoliVendita
     */
    public function setDemo($demo)
    {
        $this->demo = $demo;

        return $this;
    }

    /**
     * Get demo
     *
     * @return string 
     */
    public function getDemo()
    {
        return $this->demo;
    }

    /**
     * Set promozione
     *
     * @param string $promozione
     * @return LlppArticoliVendita
     */
    public function setPromozione($promozione)
    {
        $this->promozione = $promozione;

        return $this;
    }

    /**
     * Get promozione
     *
     * @return string 
     */
    public function getPromozione()
    {
        return $this->promozione;
    }

    /**
     * Set indiceLibro
     *
     * @param string $indiceLibro
     * @return LlppArticoliVendita
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
     * Set speseSpedizione
     *
     * @param string $speseSpedizione
     * @return LlppArticoliVendita
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
     * Set vetrina
     *
     * @param string $vetrina
     * @return LlppArticoliVendita
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
     * Set ordineVetrina
     *
     * @param integer $ordineVetrina
     * @return LlppArticoliVendita
     */
    public function setOrdineVetrina($ordineVetrina)
    {
        $this->ordineVetrina = $ordineVetrina;

        return $this;
    }

    /**
     * Get ordineVetrina
     *
     * @return integer 
     */
    public function getOrdineVetrina()
    {
        return $this->ordineVetrina;
    }

    /**
     * Set aggiornamento
     *
     * @param string $aggiornamento
     * @return LlppArticoliVendita
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
     * Set testoDemo
     *
     * @param string $testoDemo
     * @return LlppArticoliVendita
     */
    public function setTestoDemo($testoDemo)
    {
        $this->testoDemo = $testoDemo;

        return $this;
    }

    /**
     * Get testoDemo
     *
     * @return string 
     */
    public function getTestoDemo()
    {
        return $this->testoDemo;
    }

    /**
     * Set disponibile
     *
     * @param string $disponibile
     * @return LlppArticoliVendita
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
     * @return LlppArticoliVendita
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
     * @return LlppArticoliVendita
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
     * @return LlppArticoliVendita
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
     * @return LlppArticoliVendita
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
     * @return LlppArticoliVendita
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
     * Set iva
     *
     * @param string $iva
     * @return LlppArticoliVendita
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
