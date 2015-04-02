<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessioniVariabili
 */
class SessioniVariabili
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sessione;

    /**
     * @var string
     */
    private $variabile;

    /**
     * @var string
     */
    private $valore;


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
     * Set sessione
     *
     * @param string $sessione
     * @return SessioniVariabili
     */
    public function setSessione($sessione)
    {
        $this->sessione = $sessione;

        return $this;
    }

    /**
     * Get sessione
     *
     * @return string 
     */
    public function getSessione()
    {
        return $this->sessione;
    }

    /**
     * Set variabile
     *
     * @param string $variabile
     * @return SessioniVariabili
     */
    public function setVariabile($variabile)
    {
        $this->variabile = $variabile;

        return $this;
    }

    /**
     * Get variabile
     *
     * @return string 
     */
    public function getVariabile()
    {
        return $this->variabile;
    }

    /**
     * Set valore
     *
     * @param string $valore
     * @return SessioniVariabili
     */
    public function setValore($valore)
    {
        $this->valore = $valore;

        return $this;
    }

    /**
     * Get valore
     *
     * @return string 
     */
    public function getValore()
    {
        return $this->valore;
    }
}
