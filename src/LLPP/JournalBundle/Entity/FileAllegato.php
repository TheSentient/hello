<?php

namespace LLPP\JournalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use LLPP\JournalBundle\Entity\HyperlinkPagina;

/**
 * FileAllegato
 */
class FileAllegato extends HyperlinkPagina
{
     const ENTITY = 'LLPP\JournalBundle\Entity\FileAllegato';

    /**
     * @var integer
     */
    private $id;

    public function __toString()
    {
        return $this->getNome();
    }

    /**
     * Add news
     *
     * @param \LLPP\JournalBundle\Entity\News $news
     * @return FileAllegato
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
    private $news;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->news = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
