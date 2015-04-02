<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Varianti
 *
 * @ORM\Table(name="varianti", indexes={@ORM\Index(name="id_articolo_vendita_id_tipo", columns={"id_articolo_vendita", "id_tipo"})})
 * @ORM\Entity
 */
class Varianti
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_articolo_vendita", type="integer", nullable=true)
     */
    private $idArticoloVendita;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo", type="integer", nullable=true)
     */
    private $idTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=100, nullable=true)
     */
    private $isbn;

    /**
     * @var float
     *
     * @ORM\Column(name="prezzosuppl", type="float", precision=10, scale=0, nullable=true)
     */
    private $prezzosuppl;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idArticoloVendita
     *
     * @param integer $idArticoloVendita
     * @return Varianti
     */
    public function setIdArticoloVendita($idArticoloVendita)
    {
        $this->idArticoloVendita = $idArticoloVendita;

        return $this;
    }

    /**
     * Get idArticoloVendita
     *
     * @return integer 
     */
    public function getIdArticoloVendita()
    {
        return $this->idArticoloVendita;
    }

    /**
     * Set idTipo
     *
     * @param integer $idTipo
     * @return Varianti
     */
    public function setIdTipo($idTipo)
    {
        $this->idTipo = $idTipo;

        return $this;
    }

    /**
     * Get idTipo
     *
     * @return integer 
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return Varianti
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set prezzosuppl
     *
     * @param float $prezzosuppl
     * @return Varianti
     */
    public function setPrezzosuppl($prezzosuppl)
    {
        $this->prezzosuppl = $prezzosuppl;

        return $this;
    }

    /**
     * Get prezzosuppl
     *
     * @return float 
     */
    public function getPrezzosuppl()
    {
        return $this->prezzosuppl;
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
