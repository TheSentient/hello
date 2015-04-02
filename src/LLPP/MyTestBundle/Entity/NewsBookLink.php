<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsBookLink
 */
class NewsBookLink
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $idCategory;

    /**
     * @var string
     */
    private $idNews;

    /**
     * @var string
     */
    private $isbn;


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
     * Set idCategory
     *
     * @param string $idCategory
     * @return NewsBookLink
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return string 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Set idNews
     *
     * @param string $idNews
     * @return NewsBookLink
     */
    public function setIdNews($idNews)
    {
        $this->idNews = $idNews;

        return $this;
    }

    /**
     * Get idNews
     *
     * @return string 
     */
    public function getIdNews()
    {
        return $this->idNews;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return NewsBookLink
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
}
