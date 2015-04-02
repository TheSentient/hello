<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlppArtVendCat
 *
 * @ORM\Table(name="llpp_art_vend_cat", indexes={@ORM\Index(name="id_articoli_vendita_id_categoria", columns={"id_articoli_vendita", "id_categoria"})})
 * @ORM\Entity
 */
class LlppArtVendCat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_articoli_vendita", type="integer", nullable=true)
     */
    private $idArticoliVendita;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_categoria", type="integer", nullable=true)
     */
    private $idCategoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idArticoliVendita
     *
     * @param integer $idArticoliVendita
     * @return LlppArtVendCat
     */
    public function setIdArticoliVendita($idArticoliVendita)
    {
        $this->idArticoliVendita = $idArticoliVendita;

        return $this;
    }

    /**
     * Get idArticoliVendita
     *
     * @return integer 
     */
    public function getIdArticoliVendita()
    {
        return $this->idArticoliVendita;
    }

    /**
     * Set idCategoria
     *
     * @param integer $idCategoria
     * @return LlppArtVendCat
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return integer 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
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
