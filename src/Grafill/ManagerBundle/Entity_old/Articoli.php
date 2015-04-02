<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
* @ORM\Entity()
* @ORM\Table(name="novita_home")
*/


class Articoli {

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string" , name="sottotitolo")
     */
    protected $sottotitolo;

    /**
     * @ORM\Column(type="string", length=100 , name="categoria")
     */
    protected $categoria_vecchio;

    /**
     * @ORM\Column(type="string", length=300)
     */
    protected $immagine;

    /**
     * @ORM\Column(type="text")
     */
    protected $testo;


    /**
     * @ORM\Column(type="date")
     */

    protected $data;

   /**
     * @ORM\Column(type="text")
     */

    protected $link;

    /**
     * @ORM\Column(type="text")
     */

    protected $file_allegati;

     /**
     * @ORM\Column(type="integer")
     */

    protected $ordine;

    /**
     * @ORM\Column(type="integer")
     */

    protected $contatore;

     /**
     * @ORM\Column(type="string")
     */

    protected $linkGenerato;

    /**
     * @ORM\Column(type="integer")
     */

    protected $mipiaci;

     /**
     * @ORM\Column(type="string")
     */

    protected $eStataPiuCliccata;

     /**
     * @ORM\Column(type="boolean")
     */

    protected $commenti_abilitati;


     /**
   * @ORM\ManyToMany(targetEntity="CategorieArticoli",inversedBy="articoli")
   * @ORM\JoinTable(name="categorie_articoli",
   *      joinColumns={@ORM\JoinColumn(name="id_articolo", referencedColumnName="id")},
   *      inverseJoinColumns={@ORM\JoinColumn(name="id_categoria", referencedColumnName="id")}
   *      )
   * */
  private $categorie;
 
  public function __construct()
  {
    $this->categorie = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set sottotitolo
     *
     * @param string $sottotitolo
     * @return Articoli
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
     * @return Articoli
     */
    public function setCategoriaVecchio($categoria)
    {
        $this->categoria_vecchio = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoriaVecchio()
    {
        return $this->categoria_vecchio;
    }

    /**
     * Set immagine
     *
     * @param string $immagine
     * @return Articoli
     */
    public function setImmagine($immagine)
    {
        $this->immagine = $immagine;

        return $this;
    }

    /**
     * Get immagine
     *
     * @return string 
     */
    public function getImmagine()
    {
        return $this->immagine;
    }

    /**
     * Set testo
     *
     * @param string $testo
     * @return Articoli
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
     * @return Articoli
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
     * @return Articoli
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
     * Set file_allegati
     *
     * @param string $fileAllegati
     * @return Articoli
     */
    public function setFileAllegati($fileAllegati)
    {
        $this->file_allegati = $fileAllegati;

        return $this;
    }

    /**
     * Get file_allegati
     *
     * @return string 
     */
    public function getFileAllegati()
    {
        return $this->file_allegati;
    }

    /**
     * Set ordine
     *
     * @param integer $ordine
     * @return Articoli
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
     * @return Articoli
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
     * Set linkGenerato
     *
     * @param string $linkGenerato
     * @return Articoli
     */
    public function setLinkGenerato($linkGenerato)
    {
        $this->linkGenerato = $linkGenerato;

        return $this;
    }

    /**
     * Get linkGenerato
     *
     * @return string 
     */
    public function getLinkGenerato()
    {
        return $this->linkGenerato;
    }

    /**
     * Set mipiaci
     *
     * @param integer $mipiaci
     * @return Articoli
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
     * Set eStataPiuCliccata
     *
     * @param string $eStataPiuCliccata
     * @return Articoli
     */
    public function setEStataPiuCliccata($eStataPiuCliccata)
    {
        $this->eStataPiuCliccata = $eStataPiuCliccata;

        return $this;
    }

    /**
     * Get eStataPiuCliccata
     *
     * @return string 
     */
    public function getEStataPiuCliccata()
    {
        return $this->eStataPiuCliccata;
    }

    /**
     * Set commenti_abilitati
     *
     * @param boolean $commentiAbilitati
     * @return Articoli
     */
    public function setCommentiAbilitati($commentiAbilitati)
    {
        $this->commenti_abilitati = $commentiAbilitati;

        return $this;
    }

    /**
     * Get commenti_abilitati
     *
     * @return boolean 
     */
    public function getCommentiAbilitati()
    {
        return $this->commenti_abilitati;
    }

    /**
     * Add categorie
     *
     * @param \Grafill\ManagerBundle\Entity\CategorieArticoli $categorie
     * @return Articoli
     */
    public function addCategorie(\Grafill\ManagerBundle\Entity\CategorieArticoli $categorie)
    {
        $this->categorie[] = $categorie;

        return $this;
    }

    /**
     * Remove categorie
     *
     * @param \Grafill\ManagerBundle\Entity\CategorieArticoli $categorie
     */
    public function removeCategorie(\Grafill\ManagerBundle\Entity\CategorieArticoli $categorie)
    {
        $this->categorie->removeElement($categorie);
    }

    /**
     * Get categorie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
