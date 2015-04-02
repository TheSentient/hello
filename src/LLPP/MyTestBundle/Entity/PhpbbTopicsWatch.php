<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbTopicsWatch
 */
class PhpbbTopicsWatch
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $topicId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var boolean
     */
    private $notifyStatus;


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
     * Set topicId
     *
     * @param integer $topicId
     * @return PhpbbTopicsWatch
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get topicId
     *
     * @return integer 
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return PhpbbTopicsWatch
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
     * Set notifyStatus
     *
     * @param boolean $notifyStatus
     * @return PhpbbTopicsWatch
     */
    public function setNotifyStatus($notifyStatus)
    {
        $this->notifyStatus = $notifyStatus;

        return $this;
    }

    /**
     * Get notifyStatus
     *
     * @return boolean 
     */
    public function getNotifyStatus()
    {
        return $this->notifyStatus;
    }
}
