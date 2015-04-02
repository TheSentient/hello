<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbRanks
 */
class PhpbbRanks
{
    /**
     * @var integer
     */
    private $rankId;

    /**
     * @var string
     */
    private $rankTitle;

    /**
     * @var integer
     */
    private $rankMin;

    /**
     * @var boolean
     */
    private $rankSpecial;

    /**
     * @var string
     */
    private $rankImage;


    /**
     * Get rankId
     *
     * @return integer 
     */
    public function getRankId()
    {
        return $this->rankId;
    }

    /**
     * Set rankTitle
     *
     * @param string $rankTitle
     * @return PhpbbRanks
     */
    public function setRankTitle($rankTitle)
    {
        $this->rankTitle = $rankTitle;

        return $this;
    }

    /**
     * Get rankTitle
     *
     * @return string 
     */
    public function getRankTitle()
    {
        return $this->rankTitle;
    }

    /**
     * Set rankMin
     *
     * @param integer $rankMin
     * @return PhpbbRanks
     */
    public function setRankMin($rankMin)
    {
        $this->rankMin = $rankMin;

        return $this;
    }

    /**
     * Get rankMin
     *
     * @return integer 
     */
    public function getRankMin()
    {
        return $this->rankMin;
    }

    /**
     * Set rankSpecial
     *
     * @param boolean $rankSpecial
     * @return PhpbbRanks
     */
    public function setRankSpecial($rankSpecial)
    {
        $this->rankSpecial = $rankSpecial;

        return $this;
    }

    /**
     * Get rankSpecial
     *
     * @return boolean 
     */
    public function getRankSpecial()
    {
        return $this->rankSpecial;
    }

    /**
     * Set rankImage
     *
     * @param string $rankImage
     * @return PhpbbRanks
     */
    public function setRankImage($rankImage)
    {
        $this->rankImage = $rankImage;

        return $this;
    }

    /**
     * Get rankImage
     *
     * @return string 
     */
    public function getRankImage()
    {
        return $this->rankImage;
    }
}
