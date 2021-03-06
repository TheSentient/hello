<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterllppBodies
 */
class MasterllppBodies
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $body;

    /**
     * @var integer
     */
    private $thread;


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
     * Set body
     *
     * @param string $body
     * @return MasterllppBodies
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set thread
     *
     * @param integer $thread
     * @return MasterllppBodies
     */
    public function setThread($thread)
    {
        $this->thread = $thread;

        return $this;
    }

    /**
     * Get thread
     *
     * @return integer 
     */
    public function getThread()
    {
        return $this->thread;
    }
}
