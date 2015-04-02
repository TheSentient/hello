<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieNotizieHome
 *
 * @ORM\Table(name="categorie_notizie_home")
 * @ORM\Entity
 */
class CategorieNotizieHome
{
    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=200, nullable=true)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="colore", type="text", nullable=true)
     */
    private $colore;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set categoria
     *
     * @param string $categoria
     * @return CategorieNotizieHome
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
     * Set colore
     *
     * @param string $colore
     * @return CategorieNotizieHome
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
