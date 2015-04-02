<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AziendeHome
 */
class AziendeHome
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var string
     */
    private $evidenza;

    /**
     * @var string
     */
    private $img;

    /**
     * @var string
     */
    private $link;


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
     * Set nome
     *
     * @param string $nome
     * @return AziendeHome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return AziendeHome
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
     * Set descrizione
     *
     * @param string $descrizione
     * @return AziendeHome
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string 
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set evidenza
     *
     * @param string $evidenza
     * @return AziendeHome
     */
    public function setEvidenza($evidenza)
    {
        $this->evidenza = $evidenza;

        return $this;
    }

    /**
     * Get evidenza
     *
     * @return string 
     */
    public function getEvidenza()
    {
        return $this->evidenza;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return AziendeHome
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return AziendeHome
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }
}
