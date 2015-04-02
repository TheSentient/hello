<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorieprodottiicone
 */
class Categorieprodottiicone
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var string
     */
    private $icona;


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
     * Set categoria
     *
     * @param string $categoria
     * @return Categorieprodottiicone
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
     * Set icona
     *
     * @param string $icona
     * @return Categorieprodottiicone
     */
    public function setIcona($icona)
    {
        $this->icona = $icona;

        return $this;
    }

    /**
     * Get icona
     *
     * @return string 
     */
    public function getIcona()
    {
        return $this->icona;
    }
}
