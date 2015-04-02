<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbBanlist
 */
class PhpbbBanlist
{
    /**
     * @var integer
     */
    private $banId;

    /**
     * @var integer
     */
    private $banUserid;

    /**
     * @var string
     */
    private $banIp;

    /**
     * @var string
     */
    private $banEmail;


    /**
     * Get banId
     *
     * @return integer 
     */
    public function getBanId()
    {
        return $this->banId;
    }

    /**
     * Set banUserid
     *
     * @param integer $banUserid
     * @return PhpbbBanlist
     */
    public function setBanUserid($banUserid)
    {
        $this->banUserid = $banUserid;

        return $this;
    }

    /**
     * Get banUserid
     *
     * @return integer 
     */
    public function getBanUserid()
    {
        return $this->banUserid;
    }

    /**
     * Set banIp
     *
     * @param string $banIp
     * @return PhpbbBanlist
     */
    public function setBanIp($banIp)
    {
        $this->banIp = $banIp;

        return $this;
    }

    /**
     * Get banIp
     *
     * @return string 
     */
    public function getBanIp()
    {
        return $this->banIp;
    }

    /**
     * Set banEmail
     *
     * @param string $banEmail
     * @return PhpbbBanlist
     */
    public function setBanEmail($banEmail)
    {
        $this->banEmail = $banEmail;

        return $this;
    }

    /**
     * Get banEmail
     *
     * @return string 
     */
    public function getBanEmail()
    {
        return $this->banEmail;
    }
}
