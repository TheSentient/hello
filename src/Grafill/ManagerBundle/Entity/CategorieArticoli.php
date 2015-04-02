<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * CategorieArticoli
 *
 * @ORM\Table(name="categorie_notizie_home")
 * @ORM\Entity(repositoryClass="Grafill\ManagerBundle\Entity\CategorieArticoliRepository")
 */
class CategorieArticoli
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=255, nullable=true)
     * 
     */
    protected $nome_categoria;


     /**
     * @var string
     *
     * @ORM\Column(name="colore", type="string", length=255, nullable=true)
     * 
     */
    protected $colore;


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
     * Set nome_categoria
     *
     * @param string $nomeCategoria
     * @return CategorieArticoli
     */
    public function setNomeCategoria($nomeCategoria)
    {
        $this->nome_categoria = $nomeCategoria;

        return $this;
    }

    /**
     * Get nome_categoria
     *
     * @return string 
     */
    public function getNomeCategoria()
    {
        return $this->nome_categoria;
    }

    /**
     * Set colore
     *
     * @param string $colore
     * @return CategorieArticoli
     */
    public function setColore($colore)
    {
        $this->colore = $colore;

        return $this;
    }

    /**
     * Get colore
     *
     * @return string 
     */
    public function getColore()
    {
        return $this->colore;
    }


  /**
   * @ORM\ManyToMany(targetEntity="Articoli",mappedBy="categorie")
   * */
  private $articoli;
 
  public function __construct()
  {
    $this->articoli = new \Doctrine\Common\Collections\ArrayCollection();
  }


    /**
     * Add articoli
     *
     * @param \Grafill\ManagerBundle\Entity\Articoli $articoli
     * @return CategorieArticoli
     */
    public function addArticoli(\Grafill\ManagerBundle\Entity\Articoli $articoli)
    {
        $this->articoli[] = $articoli;

        return $this;
    }

    /**
     * Remove articoli
     *
     * @param \Grafill\ManagerBundle\Entity\Articoli $articoli
     */
    public function removeArticoli(\Grafill\ManagerBundle\Entity\Articoli $articoli)
    {
        $this->articoli->removeElement($articoli);
    }

    /**
     * Get articoli
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticoli()
    {
        return $this->articoli;
    }
}
