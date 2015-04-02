<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AutoriArticoli
 *
 * @ORM\Table(name="autori_articoli", indexes={@ORM\Index(name="id_articolo_id_autori", columns={"id_articolo", "id_autori"})})
 * @ORM\Entity
 */
class AutoriArticoli
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
     * @ORM\Column(name="id_autori", type="integer", nullable=true)
     */
    private $idAutori;

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
     * @return AutoriArticoli
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
     * Set idAutori
     *
     * @param integer $idAutori
     * @return AutoriArticoli
     */
    public function setIdAutori($idAutori)
    {
        $this->idAutori = $idAutori;

        return $this;
    }

    /**
     * Get idAutori
     *
     * @return integer 
     */
    public function getIdAutori()
    {
        return $this->idAutori;
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
