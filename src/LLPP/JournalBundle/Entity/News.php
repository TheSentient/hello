<?php

namespace LLPP\JournalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 */
class News
{
    const ENTITY = 'LLPP\JournalBundle\Entity\News';

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $contenuto;

    /**
     * @var string
     */
    private $permalink;

    /**
     * @var \LLPP\JournalBundle\Entity\Categoria
     */
    private $categoria;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $linksCorrelati;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $filesAllegati;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $normative;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->linksCorrelati = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filesAllegati = new \Doctrine\Common\Collections\ArrayCollection();
        $this->normative = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set data
     *
     * @param \DateTime $data
     * @return News
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     * @return News
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
     * Set contenuto
     *
     * @param string $contenuto
     * @return News
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
     * Set categoria
     *
     * @param \LLPP\JournalBundle\Entity\Categoria $categoria
     * @return News
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
     * Add tags
     *
     * @param \LLPP\JournalBundle\Entity\Tag $tags
     * @return News
     */
    public function addTag(\LLPP\JournalBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \LLPP\JournalBundle\Entity\Tag $tags
     */
    public function removeTag(\LLPP\JournalBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }


    /**
     * Add linksCorrelati
     *
     * @param \LLPP\JournalBundle\Entity\LinkCorrelato $linksCorrelati
     * @return News
     */
    public function addLinksCorrelati(\LLPP\JournalBundle\Entity\LinkCorrelato $linksCorrelati)
    {
        $this->linksCorrelati[] = $linksCorrelati;

        return $this;
    }

    /**
     * Remove linksCorrelati
     *
     * @param \LLPP\JournalBundle\Entity\LinkCorrelato $linksCorrelati
     */
    public function removeLinksCorrelati(\LLPP\JournalBundle\Entity\LinkCorrelato $linksCorrelati)
    {
        $this->linksCorrelati->removeElement($linksCorrelati);
    }

    /**
     * Get linksCorrelati
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLinksCorrelati()
    {
        return $this->linksCorrelati;
    }

    /**
     * Add filesAllegati
     *
     * @param \LLPP\JournalBundle\Entity\FileAllegato $filesAllegati
     * @return News
     */
    public function addFilesAllegati(\LLPP\JournalBundle\Entity\FileAllegato $filesAllegati)
    {
        $this->filesAllegati[] = $filesAllegati;

        return $this;
    }

    /**
     * Remove filesAllegati
     *
     * @param \LLPP\JournalBundle\Entity\FileAllegato $filesAllegati
     */
    public function removeFilesAllegati(\LLPP\JournalBundle\Entity\FileAllegato $filesAllegati)
    {
        $this->filesAllegati->removeElement($filesAllegati);
    }

    /**
     * Get filesAllegati
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFilesAllegati()
    {
        return $this->filesAllegati;
    }

    /**
     * Add normative
     *
     * @param \LLPP\JournalBundle\Entity\Normativa $normative
     * @return News
     */
    public function addNormative(\LLPP\JournalBundle\Entity\Normativa $normative)
    {
        $this->normative[] = $normative;

        return $this;
    }

    /**
     * Remove normative
     *
     * @param \LLPP\JournalBundle\Entity\Normativa $normative
     */
    public function removeNormative(\LLPP\JournalBundle\Entity\Normativa $normative)
    {
        $this->normative->removeElement($normative);
    }

    /**
     * Get normative
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNormative()
    {
        return $this->normative;
    }
}
