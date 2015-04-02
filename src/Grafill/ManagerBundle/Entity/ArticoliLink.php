<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticoliLink
 *
 * @ORM\Table(name="articoli_link")
 * @ORM\Entity
 */
class ArticoliLink
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_articolo", type="integer", nullable=true)
     */
    private $idArticolo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_link", type="integer", nullable=true)
     */
    private $idLink;

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
     * @return ArticoliLink
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
     * Set idLink
     *
     * @param integer $idLink
     * @return ArticoliLink
     */
    public function setIdLink($idLink)
    {
        $this->idLink = $idLink;

        return $this;
    }

    /**
     * Get idLink
     *
     * @return integer 
     */
    public function getIdLink()
    {
        return $this->idLink;
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
