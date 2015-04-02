<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbSessionsKeys
 */
class PhpbbSessionsKeys
{
    /**
     * @var string
     */
    private $keyId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $lastIp;

    /**
     * @var integer
     */
    private $lastLogin;


    /**
     * Set keyId
     *
     * @param string $keyId
     * @return PhpbbSessionsKeys
     */
    public function setKeyId($keyId)
    {
        $this->keyId = $keyId;

        return $this;
    }

    /**
     * Get keyId
     *
     * @return string 
     */
    public function getKeyId()
    {
        return $this->keyId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return PhpbbSessionsKeys
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set lastIp
     *
     * @param string $lastIp
     * @return PhpbbSessionsKeys
     */
    public function setLastIp($lastIp)
    {
        $this->lastIp = $lastIp;

        return $this;
    }

    /**
     * Get lastIp
     *
     * @return string 
     */
    public function getLastIp()
    {
        return $this->lastIp;
    }

    /**
     * Set lastLogin
     *
     * @param integer $lastLogin
     * @return PhpbbSessionsKeys
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return integer 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }
}
