<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TagsArticoli
 *
 * @ORM\Table(name="tags_articoli")
 * @ORM\Entity
 */
class TagsArticoli
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_articolo", type="integer", nullable=false)
     */
    private $idArticolo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tags", type="integer", nullable=false)
     */
    private $idTags;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idArticolo
     *
     * @param integer $idArticolo
     * @return TagsArticoli
     */
    public function setIdArticolo($idArticolo)
    {
        $this->idArticolo = $idArticolo;

        return $this;
    }

    /**
     * Get idArticolo
     *
     * @return integer 
     */
    public function getIdArticolo()
    {
        return $this->idArticolo;
    }

    /**
     * Set idTags
     *
     * @param integer $idTags
     * @return TagsArticoli
     */
    public function setIdTags($idTags)
    {
        $this->idTags = $idTags;

        return $this;
    }

    /**
     * Get idTags
     *
     * @return integer 
     */
    public function getIdTags()
    {
        return $this->idTags;
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
