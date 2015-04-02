<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LibreriaManage
 */
class LibreriaManage
{
    /**
     * @var string
     */
    private $codice;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $autore;

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $titoloRidotto;

    /**
     * @var string
     */
    private $anno;

    /**
     * @var string
     */
    private $editore;

    /**
     * @var string
     */
    private $argomento;

    /**
     * @var string
     */
    private $novita;

    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var float
     */
    private $prezzo;

    /**
     * @var float
     */
    private $prezzoOfferta;

    /**
     * @var string
     */
    private $offerta;

    /**
     * @var string
     */
    private $collana;

    /**
     * @var string
     */
    private $categorie;

    /**
     * @var string
     */
    private $cat1;

    /**
     * @var string
     */
    private $sostitutivi;

    /**
     * @var string
     */
    private $cat3;

    /**
     * @var integer
     */
    private $cd;

    /**
     * @var string
     */
    private $img;

    /**
     * @var string
     */
    private $demo;

    /**
     * @var string
     */
    private $promozione;

    /**
     * @var string
     */
    private $testiCorrelati;

    /**
     * @var string
     */
    private $indiceLibro;

    /**
     * @var string
     */
    private $speseSpedizione;

    /**
     * @var string
     */
    private $vetrina;

    /**
     * @var integer
     */
    private $ordineVetrina;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var string
     */
    private $emailRegistrazione;

    /**
     * @var string
     */
    private $aggiornamento;

    /**
     * @var string
     */
    private $testoDemo;

    /**
     * @var string
     */
    private $disponibile;

    /**
     * @var string
     */
    private $pubblicato;


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
     * Set id
     *
     * @param integer $id
     * @return LibreriaManage
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set autore
     *
     * @param string $autore
     * @return LibreriaManage
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
     * @return LibreriaManage
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
     * @return LibreriaManage
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
     * @return LibreriaManage
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
     * Set editore
     *
     * @param string $editore
     * @return LibreriaManage
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
     * Set argomento
     *
     * @param string $argomento
     * @return LibreriaManage
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
     * Set novita
     *
     * @param string $novita
     * @return LibreriaManage
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
     * @return LibreriaManage
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
     * @return LibreriaManage
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
     * @return LibreriaManage
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
     * Set offerta
     *
     * @param string $offerta
     * @return LibreriaManage
     */
    public function setOfferta($offerta)
    {
        $this->offerta = $offerta;

        return $this;
    }

    /**
     * Get offerta
     *
     * @return string 
     */
    public function getOfferta()
    {
        return $this->offerta;
    }

    /**
     * Set collana
     *
     * @param string $collana
     * @return LibreriaManage
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
     * Set categorie
     *
     * @param string $categorie
     * @return LibreriaManage
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set cat1
     *
     * @param string $cat1
     * @return LibreriaManage
     */
    public function setCat1($cat1)
    {
        $this->cat1 = $cat1;

        return $this;
    }

    /**
     * Get cat1
     *
     * @return string 
     */
    public function getCat1()
    {
        return $this->cat1;
    }

    /**
     * Set sostitutivi
     *
     * @param string $sostitutivi
     * @return LibreriaManage
     */
    public function setSostitutivi($sostitutivi)
    {
        $this->sostitutivi = $sostitutivi;

        return $this;
    }

    /**
     * Get sostitutivi
     *
     * @return string 
     */
    public function getSostitutivi()
    {
        return $this->sostitutivi;
    }

    /**
     * Set cat3
     *
     * @param string $cat3
     * @return LibreriaManage
     */
    public function setCat3($cat3)
    {
        $this->cat3 = $cat3;

        return $this;
    }

    /**
     * Get cat3
     *
     * @return string 
     */
    public function getCat3()
    {
        return $this->cat3;
    }

    /**
     * Set cd
     *
     * @param integer $cd
     * @return LibreriaManage
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
     * Set img
     *
     * @param string $img
     * @return LibreriaManage
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
     * Set demo
     *
     * @param string $demo
     * @return LibreriaManage
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
     * @return LibreriaManage
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
     * Set testiCorrelati
     *
     * @param string $testiCorrelati
     * @return LibreriaManage
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
     * @return LibreriaManage
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
     * @return LibreriaManage
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
     * @return LibreriaManage
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
     * @return LibreriaManage
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
     * Set keywords
     *
     * @param string $keywords
     * @return LibreriaManage
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
     * Set emailRegistrazione
     *
     * @param string $emailRegistrazione
     * @return LibreriaManage
     */
    public function setEmailRegistrazione($emailRegistrazione)
    {
        $this->emailRegistrazione = $emailRegistrazione;

        return $this;
    }

    /**
     * Get emailRegistrazione
     *
     * @return string 
     */
    public function getEmailRegistrazione()
    {
        return $this->emailRegistrazione;
    }

    /**
     * Set aggiornamento
     *
     * @param string $aggiornamento
     * @return LibreriaManage
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
     * @return LibreriaManage
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
     * @return LibreriaManage
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
     * @return LibreriaManage
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
}
