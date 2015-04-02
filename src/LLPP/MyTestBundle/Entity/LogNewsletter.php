<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogNewsletter
 */
class LogNewsletter
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $indirizzo;

    /**
     * @var \DateTime
     */
    private $ts;


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
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return LogNewsletter
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string 
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set ts
     *
     * @param \DateTime $ts
     * @return LogNewsletter
     */
    public function setTs($ts)
    {
        $this->ts = $ts;

        return $this;
    }

    /**
     * Get ts
     *
     * @return \DateTime 
     */
    public function getTs()
    {
        return $this->ts;
    }
}
