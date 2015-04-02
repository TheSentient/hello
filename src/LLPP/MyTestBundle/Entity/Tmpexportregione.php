<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tmpexportregione
 */
class Tmpexportregione
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
     * @return Tmpexportregione
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
}
