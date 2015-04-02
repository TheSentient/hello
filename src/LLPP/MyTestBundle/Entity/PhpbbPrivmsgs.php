<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbPrivmsgs
 */
class PhpbbPrivmsgs
{
    /**
     * @var integer
     */
    private $privmsgsId;

    /**
     * @var boolean
     */
    private $privmsgsType;

    /**
     * @var string
     */
    private $privmsgsSubject;

    /**
     * @var integer
     */
    private $privmsgsFromUserid;

    /**
     * @var integer
     */
    private $privmsgsToUserid;

    /**
     * @var integer
     */
    private $privmsgsDate;

    /**
     * @var string
     */
    private $privmsgsIp;

    /**
     * @var boolean
     */
    private $privmsgsEnableBbcode;

    /**
     * @var boolean
     */
    private $privmsgsEnableHtml;

    /**
     * @var boolean
     */
    private $privmsgsEnableSmilies;

    /**
     * @var boolean
     */
    private $privmsgsAttachSig;


    /**
     * Get privmsgsId
     *
     * @return integer 
     */
    public function getPrivmsgsId()
    {
        return $this->privmsgsId;
    }

    /**
     * Set privmsgsType
     *
     * @param boolean $privmsgsType
     * @return PhpbbPrivmsgs
     */
    public function setPrivmsgsType($privmsgsType)
    {
        $this->privmsgsType = $privmsgsType;

        return $this;
    }

    /**
     * Get privmsgsType
     *
     * @return boolean 
     */
    public function getPrivmsgsType()
    {
        return $this->privmsgsType;
    }

    /**
     * Set privmsgsSubject
     *
     * @param string $privmsgsSubject
     * @return PhpbbPrivmsgs
     */
    public function setPrivmsgsSubject($privmsgsSubject)
    {
        $this->privmsgsSubject = $privmsgsSubject;

        return $this;
    }

    /**
     * Get privmsgsSubject
     *
     * @return string 
     */
    public function getPrivmsgsSubject()
    {
        return $this->privmsgsSubject;
    }

    /**
     * Set privmsgsFromUserid
     *
     * @param integer $privmsgsFromUserid
     * @return PhpbbPrivmsgs
     */
    public function setPrivmsgsFromUserid($privmsgsFromUserid)
    {
        $this->privmsgsFromUserid = $privmsgsFromUserid;

        return $this;
    }

    /**
     * Get privmsgsFromUserid
     *
     * @return integer 
     */
    public function getPrivmsgsFromUserid()
    {
        return $this->privmsgsFromUserid;
    }

    /**
     * Set privmsgsToUserid
     *
     * @param integer $privmsgsToUserid
     * @return PhpbbPrivmsgs
     */
    public function setPrivmsgsToUserid($privmsgsToUserid)
    {
        $this->privmsgsToUserid = $privmsgsToUserid;

        return $this;
    }

    /**
     * Get privmsgsToUserid
     *
     * @return integer 
     */
    public function getPrivmsgsToUserid()
    {
        return $this->privmsgsToUserid;
    }

    /**
     * Set privmsgsDate
     *
     * @param integer $privmsgsDate
     * @return PhpbbPrivmsgs
     */
    public function setPrivmsgsDate($privmsgsDate)
    {
        $this->privmsgsDate = $privmsgsDate;

        return $this;
    }

    /**
     * Get privmsgsDate
     *
     * @return integer 
     */
    public function getPrivmsgsDate()
    {
        return $this->privmsgsDate;
    }

    /**
     * Set privmsgsIp
     *
     * @param string $privmsgsIp
     * @return PhpbbPrivmsgs
     */
    public function setPrivmsgsIp($privmsgsIp)
    {
        $this->privmsgsIp = $privmsgsIp;

        return $this;
    }

    /**
     * Get privmsgsIp
     *
     * @return string 
     */
    public function getPrivmsgsIp()
    {
        return $this->privmsgsIp;
    }

    /**
     * Set privmsgsEnableBbcode
     *
     * @param boolean $privmsgsEnableBbcode
     * @return PhpbbPrivmsgs
     */
    public function setPrivmsgsEnableBbcode($privmsgsEnableBbcode)
    {
        $this->privmsgsEnableBbcode = $privmsgsEnableBbcode;

        return $this;
    }

    /**
     * Get privmsgsEnableBbcode
     *
     * @return boolean 
     */
    public function getPrivmsgsEnableBbcode()
    {
        return $this->privmsgsEnableBbcode;
    }

    /**
     * Set privmsgsEnableHtml
     *
     * @param boolean $privmsgsEnableHtml
     * @return PhpbbPrivmsgs
     */
    public function setPrivmsgsEnableHtml($privmsgsEnableHtml)
    {
        $this->privmsgsEnableHtml = $privmsgsEnableHtml;

        return $this;
    }

    /**
     * Get privmsgsEnableHtml
     *
     * @return boolean 
     */
    public function getPrivmsgsEnableHtml()
    {
        return $this->privmsgsEnableHtml;
    }

    /**
     * Set privmsgsEnableSmilies
     *
     * @param boolean $privmsgsEnableSmilies
     * @return PhpbbPrivmsgs
     */
    public function setPrivmsgsEnableSmilies($privmsgsEnableSmilies)
    {
        $this->privmsgsEnableSmilies = $privmsgsEnableSmilies;

        return $this;
    }

    /**
     * Get privmsgsEnableSmilies
     *
     * @return boolean 
     */
    public function getPrivmsgsEnableSmilies()
    {
        return $this->privmsgsEnableSmilies;
    }

    /**
     * Set privmsgsAttachSig
     *
     * @param boolean $privmsgsAttachSig
     * @return PhpbbPrivmsgs
     */
    public function setPrivmsgsAttachSig($privmsgsAttachSig)
    {
        $this->privmsgsAttachSig = $privmsgsAttachSig;

        return $this;
    }

    /**
     * Get privmsgsAttachSig
     *
     * @return boolean 
     */
    public function getPrivmsgsAttachSig()
    {
        return $this->privmsgsAttachSig;
    }
}
