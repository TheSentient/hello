<?php

namespace LLPP\JournalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Normativa
 */
class Normativa
{
    const ENTITY = 'LLPP\JournalBundle\Entity\Normativa';
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $oggetto;

    /**
     * @var \LLPP\JournalBundle\Entity\Categoria
     */
    private $categoria;

    /**
     * @var string
     */
    private $permalink;
    
    /**
     * @var \DateTime
     */
    private $dataNormativa;

    /**
     * @var string
     */
    private $gazzettaUfficiale;

    /**
     * @var string
     */
    private $contenuto;

    /**
     * @var \DateTime
     */
    private $dataInserimento;

    public function __toString()
    {
        return $this->getTitolo();
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
     * Set titolo
     *
     * @param string $titolo
     * @return Normativa
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string 
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set oggetto
     *
     * @param string $oggetto
     * @return Normativa
     */
    public function setOggetto($oggetto)
    {
        $this->oggetto = $oggetto;

        return $this;
    }

    /**
     * Get oggetto
     *
     * @return string 
     */
    public function getOggetto()
    {
        return $this->oggetto;
    }

    /**
     * Set dataNormativa
     *
     * @param \DateTime $dataNormativa
     * @return Normativa
     */
    public function setDataNormativa($dataNormativa)
    {
        $this->dataNormativa = $dataNormativa;

        return $this;
    }

    /**
     * Set categoria
     *
     * @param \LLPP\JournalBundle\Entity\Categoria $categoria
     * @return Normativa
     */
    public function setCategoria(\LLPP\JournalBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \LLPP\JournalBundle\Entity\Categoria 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set permalink
     *
     * @param string $permalink
     * @return News
     */
    public function setPermalink($permalink)
    {
    	$this->permalink = $permalink;
    
    	return $this;
    }
    
    /**
     * Get permalink
     *
     * @return string
     */
    public function getPermalink()
    {
    	return $this->permalink;
    }
    
    /**
     * Get dataNormativa
     *
     * @return \DateTime 
     */
    public function getDataNormativa()
    {
        return $this->dataNormativa;
    }

    /**
     * Set gazzettaUfficiale
     *
     * @param string $gazzettaUfficiale
     * @return Normativa
     */
    public function setGazzettaUfficiale($gazzettaUfficiale)
    {
        $this->gazzettaUfficiale = $gazzettaUfficiale;

        return $this;
    }

    /**
     * Get gazzettaUfficiale
     *
     * @return string 
     */
    public function getGazzettaUfficiale()
    {
        return $this->gazzettaUfficiale;
    }

    /**
     * Set contenuto
     *
     * @param string $contenuto
     * @return Normativa
     */
    public function setContenuto($contenuto)
    {
        $this->contenuto = $contenuto;

        return $this;
    }

    /**
     * Get contenuto
     *
     * @return string 
     */
    public function getContenuto()
    {
        return $this->contenuto;
    }

    /**
     * Set dataInserimento
     *
     * @param \DateTime $dataInserimento
     * @return Normativa
     */
    public function setDataInserimento($dataInserimento)
    {
        $this->dataInserimento = $dataInserimento;

        return $this;
    }

    /**
     * Get dataInserimento
     *
     * @return \DateTime 
     */
    public function getDataInserimento()
    {
        return $this->dataInserimento;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $news;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->news = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add news
     *
     * @param \LLPP\JournalBundle\Entity\News $news
     * @return Normativa
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
}
