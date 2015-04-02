<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticoliAllegati
 *
 * @ORM\Table(name="articoli_allegati")
 * @ORM\Entity
 */
class ArticoliAllegati
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
     * @ORM\Column(name="id_allegato", type="integer", nullable=true)
     */
    private $idAllegato;

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
     * @return ArticoliAllegati
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
     * Set idAllegato
     *
     * @param integer $idAllegato
     * @return ArticoliAllegati
     */
    public function setIdAllegato($idAllegato)
    {
        $this->idAllegato = $idAllegato;

        return $this;
    }

    /**
     * Get idAllegato
     *
     * @return integer 
     */
    public function getIdAllegato()
    {
        return $this->idAllegato;
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
