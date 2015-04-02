<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExportNewsletterProva
 */
class ExportNewsletterProva
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
     * @var string
     */
    private $nominativo;


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
     * @return ExportNewsletterProva
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
     * Set nominativo
     *
     * @param string $nominativo
     * @return ExportNewsletterProva
     */
    public function setNominativo($nominativo)
    {
        $this->nominativo = $nominativo;

        return $this;
    }

    /**
     * Get nominativo
     *
     * @return string 
     */
    public function getNominativo()
    {
        return $this->nominativo;
    }
}
