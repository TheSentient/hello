<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newslettercreatorinformativatmp
 */
class Newslettercreatorinformativatmp
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $html;


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
     * Set html
     *
     * @param string $html
     * @return Newslettercreatorinformativatmp
     */
    public function setHtml($html)
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Get html
     *
     * @return string 
     */
    public function getHtml()
    {
        return $this->html;
    }
}
