<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbCategories
 */
class PhpbbCategories
{
    /**
     * @var integer
     */
    private $catId;

    /**
     * @var string
     */
    private $catTitle;

    /**
     * @var integer
     */
    private $catOrder;


    /**
     * Get catId
     *
     * @return integer 
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * Set catTitle
     *
     * @param string $catTitle
     * @return PhpbbCategories
     */
    public function setCatTitle($catTitle)
    {
        $this->catTitle = $catTitle;

        return $this;
    }

    /**
     * Get catTitle
     *
     * @return string 
     */
    public function getCatTitle()
    {
        return $this->catTitle;
    }

    /**
     * Set catOrder
     *
     * @param integer $catOrder
     * @return PhpbbCategories
     */
    public function setCatOrder($catOrder)
    {
        $this->catOrder = $catOrder;

        return $this;
    }

    /**
     * Get catOrder
     *
     * @return integer 
     */
    public function getCatOrder()
    {
        return $this->catOrder;
    }
}
