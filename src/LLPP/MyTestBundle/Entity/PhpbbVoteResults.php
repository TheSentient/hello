<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbVoteResults
 */
class PhpbbVoteResults
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $voteId;

    /**
     * @var boolean
     */
    private $voteOptionId;

    /**
     * @var string
     */
    private $voteOptionText;

    /**
     * @var integer
     */
    private $voteResult;


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
     * Set voteId
     *
     * @param integer $voteId
     * @return PhpbbVoteResults
     */
    public function setVoteId($voteId)
    {
        $this->voteId = $voteId;

        return $this;
    }

    /**
     * Get voteId
     *
     * @return integer 
     */
    public function getVoteId()
    {
        return $this->voteId;
    }

    /**
     * Set voteOptionId
     *
     * @param boolean $voteOptionId
     * @return PhpbbVoteResults
     */
    public function setVoteOptionId($voteOptionId)
    {
        $this->voteOptionId = $voteOptionId;

        return $this;
    }

    /**
     * Get voteOptionId
     *
     * @return boolean 
     */
    public function getVoteOptionId()
    {
        return $this->voteOptionId;
    }

    /**
     * Set voteOptionText
     *
     * @param string $voteOptionText
     * @return PhpbbVoteResults
     */
    public function setVoteOptionText($voteOptionText)
    {
        $this->voteOptionText = $voteOptionText;

        return $this;
    }

    /**
     * Get voteOptionText
     *
     * @return string 
     */
    public function getVoteOptionText()
    {
        return $this->voteOptionText;
    }

    /**
     * Set voteResult
     *
     * @param integer $voteResult
     * @return PhpbbVoteResults
     */
    public function setVoteResult($voteResult)
    {
        $this->voteResult = $voteResult;

        return $this;
    }

    /**
     * Get voteResult
     *
     * @return integer 
     */
    public function getVoteResult()
    {
        return $this->voteResult;
    }
}
