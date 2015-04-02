<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieNormative
 *
 * @ORM\Table(name="categorie_normative", indexes={@ORM\Index(name="id_normative_id_categoria", columns={"id_normative", "id_categoria"})})
 * @ORM\Entity
 */
class CategorieNormative
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_normative", type="integer", nullable=false)
     */
    private $idNormative;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_categoria", type="integer", nullable=false)
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
     * Set idNormative
     *
     * @param integer $idNormative
     * @return CategorieNormative
     */
    public function setIdNormative($idNormative)
    {
        $this->idNormative = $idNormative;

        return $this;
    }

    /**
     * Get idNormative
     *
     * @return integer 
     */
    public function getIdNormative()
    {
        return $this->idNormative;
    }

    /**
     * Set idCategoria
     *
     * @param integer $idCategoria
     * @return CategorieNormative
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
