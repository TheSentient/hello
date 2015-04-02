<?php

namespace LLPP\JournalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 */
class Categoria
{
    const ENTITY = 'LLPP\JournalBundle\Entity\Categoria';
    
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
    private $colore;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $news;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $normativa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->news = new \Doctrine\Common\Collections\ArrayCollection();
        $this->normativa = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->getNome();
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

    /**
     * Set nome
     *
     * @param string $nome
     * @return Categoria
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
     * Set colore
     *
     * @param string $colore
     * @return Categoria
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
     * Add news
     *
     * @param \LLPP\JournalBundle\Entity\News $news
     * @return Categoria
     */
    public function addNews(\LLPP\JournalBundle\Entity\News $news)
    {
        $this->news[] = $news;

        return $this;
    }

    /**
     * Remove news
     *
     * @param \LLPP\JournalBundle\Entity\News $news
     */
    public function removeNews(\LLPP\JournalBundle\Entity\News $news)
    {
        $this->news->removeElement($news);
    }

    /**
     * Get news
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNews()
    {
        return $this->news;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    
    /**
     * Add normativa
     *
     * @param \LLPP\JournalBundle\Entity\Normativa $normativa
     * @return Categoria
     */
    public function addNormativa(\LLPP\JournalBundle\Entity\Normativa $normativa)
    {
        $this->normativa[] = $normativa;

        return $this;
    }

    /**
     * Remove normativa
     *
     * @param \LLPP\JournalBundle\Entity\News $normativa
     */
    public function removeNormativa(\LLPP\JournalBundle\Entity\Normativa $normativa)
    {
        $this->normativa->removeElement($normativa);
    }

    /**
     * Get normativa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNormativa()
    {
        return $this->normativa;
    }
}
