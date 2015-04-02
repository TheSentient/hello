<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbGroups
 */
class PhpbbGroups
{
    /**
     * @var integer
     */
    private $groupId;

    /**
     * @var boolean
     */
    private $groupType;

    /**
     * @var string
     */
    private $groupName;

    /**
     * @var string
     */
    private $groupDescription;

    /**
     * @var integer
     */
    private $groupModerator;

    /**
     * @var boolean
     */
    private $groupSingleUser;


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
     * Set groupType
     *
     * @param boolean $groupType
     * @return PhpbbGroups
     */
    public function setGroupType($groupType)
    {
        $this->groupType = $groupType;

        return $this;
    }

    /**
     * Get groupType
     *
     * @return boolean 
     */
    public function getGroupType()
    {
        return $this->groupType;
    }

    /**
     * Set groupName
     *
     * @param string $groupName
     * @return PhpbbGroups
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string 
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set groupDescription
     *
     * @param string $groupDescription
     * @return PhpbbGroups
     */
    public function setGroupDescription($groupDescription)
    {
        $this->groupDescription = $groupDescription;

        return $this;
    }

    /**
     * Get groupDescription
     *
     * @return string 
     */
    public function getGroupDescription()
    {
        return $this->groupDescription;
    }

    /**
     * Set groupModerator
     *
     * @param integer $groupModerator
     * @return PhpbbGroups
     */
    public function setGroupModerator($groupModerator)
    {
        $this->groupModerator = $groupModerator;

        return $this;
    }

    /**
     * Get groupModerator
     *
     * @return integer 
     */
    public function getGroupModerator()
    {
        return $this->groupModerator;
    }

    /**
     * Set groupSingleUser
     *
     * @param boolean $groupSingleUser
     * @return PhpbbGroups
     */
    public function setGroupSingleUser($groupSingleUser)
    {
        $this->groupSingleUser = $groupSingleUser;

        return $this;
    }

    /**
     * Get groupSingleUser
     *
     * @return boolean 
     */
    public function getGroupSingleUser()
    {
        return $this->groupSingleUser;
    }
}
