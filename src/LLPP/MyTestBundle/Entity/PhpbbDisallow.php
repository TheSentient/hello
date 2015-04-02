<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbDisallow
 */
class PhpbbDisallow
{
    /**
     * @var integer
     */
    private $disallowId;

    /**
     * @var string
     */
    private $disallowUsername;


    /**
     * Get disallowId
     *
     * @return integer 
     */
    public function getDisallowId()
    {
        return $this->disallowId;
    }

    /**
     * Set disallowUsername
     *
     * @param string $disallowUsername
     * @return PhpbbDisallow
     */
    public function setDisallowUsername($disallowUsername)
    {
        $this->disallowUsername = $disallowUsername;

        return $this;
    }

    /**
     * Get disallowUsername
     *
     * @return string 
     */
    public function getDisallowUsername()
    {
        return $this->disallowUsername;
    }
}
