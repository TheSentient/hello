<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivioCategorie
 *
 * @ORM\Table(name="archivio_categorie")
 * @ORM\Entity
 */
class ArchivioCategorie
{
    /**
     * @var string
     *
     * @ORM\Column(name="codice", type="string", length=20, nullable=true)
     */
    private $codice;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=120, nullable=true)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="sottocategoria", type="string", length=200, nullable=true)
     */
    private $sottocategoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set codice
     *
     * @param string $codice
     * @return ArchivioCategorie
     */
    public function setCodice($codice)
    {
        $this->codice = $codice;

        return $this;
    }

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
     * Set categoria
     *
     * @param string $categoria
     * @return ArchivioCategorie
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set sottocategoria
     *
     * @param string $sottocategoria
     * @return ArchivioCategorie
     */
    public function setSottocategoria($sottocategoria)
    {
        $this->sottocategoria = $sottocategoria;

        return $this;
    }

    /**
     * Get sottocategoria
     *
     * @return string 
     */
    public function getSottocategoria()
    {
        return $this->sottocategoria;
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
