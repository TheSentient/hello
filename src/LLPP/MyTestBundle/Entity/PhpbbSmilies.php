<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbSmilies
 */
class PhpbbSmilies
{
    /**
     * @var integer
     */
    private $smiliesId;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $smileUrl;

    /**
     * @var string
     */
    private $emoticon;


    /**
     * Get smiliesId
     *
     * @return integer 
     */
    public function getSmiliesId()
    {
        return $this->smiliesId;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return PhpbbSmilies
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set smileUrl
     *
     * @param string $smileUrl
     * @return PhpbbSmilies
     */
    public function setSmileUrl($smileUrl)
    {
        $this->smileUrl = $smileUrl;

        return $this;
    }

    /**
     * Get smileUrl
     *
     * @return string 
     */
    public function getSmileUrl()
    {
        return $this->smileUrl;
    }

    /**
     * Set emoticon
     *
     * @param string $emoticon
     * @return PhpbbSmilies
     */
    public function setEmoticon($emoticon)
    {
        $this->emoticon = $emoticon;

        return $this;
    }

    /**
     * Get emoticon
     *
     * @return string 
     */
    public function getEmoticon()
    {
        return $this->emoticon;
    }
}
