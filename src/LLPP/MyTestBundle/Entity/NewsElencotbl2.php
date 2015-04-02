<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsElencotbl2
 */
class NewsElencotbl2
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tabella;

    /**
     * @var string
     */
    private $campi;

    /**
     * @var string
     */
    private $campoRegione;


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
     * Set tabella
     *
     * @param string $tabella
     * @return NewsElencotbl2
     */
    public function setTabella($tabella)
    {
        $this->tabella = $tabella;

        return $this;
    }

    /**
     * Get tabella
     *
     * @return string 
     */
    public function getTabella()
    {
        return $this->tabella;
    }

    /**
     * Set campi
     *
     * @param string $campi
     * @return NewsElencotbl2
     */
    public function setCampi($campi)
    {
        $this->campi = $campi;

        return $this;
    }

    /**
     * Get campi
     *
     * @return string 
     */
    public function getCampi()
    {
        return $this->campi;
    }

    /**
     * Set campoRegione
     *
     * @param string $campoRegione
     * @return NewsElencotbl2
     */
    public function setCampoRegione($campoRegione)
    {
        $this->campoRegione = $campoRegione;

        return $this;
    }

    /**
     * Get campoRegione
     *
     * @return string 
     */
    public function getCampoRegione()
    {
        return $this->campoRegione;
    }
}
