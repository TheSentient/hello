<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbUserGroup
 */
class PhpbbUserGroup
{
    /**
     * @var integer
     */
    private $groupId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var boolean
     */
    private $userPending;


    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return PhpbbUserGroup
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
     * Set userPending
     *
     * @param boolean $userPending
     * @return PhpbbUserGroup
     */
    public function setUserPending($userPending)
    {
        $this->userPending = $userPending;

        return $this;
    }

    /**
     * Get userPending
     *
     * @return boolean 
     */
    public function getUserPending()
    {
        return $this->userPending;
    }
}
