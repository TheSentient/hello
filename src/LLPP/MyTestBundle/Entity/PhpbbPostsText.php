<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbPostsText
 */
class PhpbbPostsText
{
    /**
     * @var integer
     */
    private $postId;

    /**
     * @var string
     */
    private $bbcodeUid;

    /**
     * @var string
     */
    private $postSubject;

    /**
     * @var string
     */
    private $postText;


    /**
     * Get postId
     *
     * @return integer 
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set bbcodeUid
     *
     * @param string $bbcodeUid
     * @return PhpbbPostsText
     */
    public function setBbcodeUid($bbcodeUid)
    {
        $this->bbcodeUid = $bbcodeUid;

        return $this;
    }

    /**
     * Get bbcodeUid
     *
     * @return string 
     */
    public function getBbcodeUid()
    {
        return $this->bbcodeUid;
    }

    /**
     * Set postSubject
     *
     * @param string $postSubject
     * @return PhpbbPostsText
     */
    public function setPostSubject($postSubject)
    {
        $this->postSubject = $postSubject;

        return $this;
    }

    /**
     * Get postSubject
     *
     * @return string 
     */
    public function getPostSubject()
    {
        return $this->postSubject;
    }

    /**
     * Set postText
     *
     * @param string $postText
     * @return PhpbbPostsText
     */
    public function setPostText($postText)
    {
        $this->postText = $postText;

        return $this;
    }

    /**
     * Get postText
     *
     * @return string 
     */
    public function getPostText()
    {
        return $this->postText;
    }
}
