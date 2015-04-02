<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NumeriLlppHome
 */
class NumeriLlppHome
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $numeri;


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
     * Set numeri
     *
     * @param string $numeri
     * @return NumeriLlppHome
     */
    public function setNumeri($numeri)
    {
        $this->numeri = $numeri;

        return $this;
    }

    /**
     * Get numeri
     *
     * @return string 
     */
    public function getNumeri()
    {
        return $this->numeri;
    }
}
