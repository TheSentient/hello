<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bandiallegati
 */
class Bandiallegati
{
    /**
     * @var integer
     */
    private $idallegato;

    /**
     * @var integer
     */
    private $idbando;

    /**
     * @var string
     */
    private $nomeallegato;

    /**
     * @var string
     */
    private $linkallegato;


    /**
     * Get idallegato
     *
     * @return integer 
     */
    public function getIdallegato()
    {
        return $this->idallegato;
    }

    /**
     * Set idbando
     *
     * @param integer $idbando
     * @return Bandiallegati
     */
    public function setIdbando($idbando)
    {
        $this->idbando = $idbando;

        return $this;
    }

    /**
     * Get idbando
     *
     * @return integer 
     */
    public function getIdbando()
    {
        return $this->idbando;
    }

    /**
     * Set nomeallegato
     *
     * @param string $nomeallegato
     * @return Bandiallegati
     */
    public function setNomeallegato($nomeallegato)
    {
        $this->nomeallegato = $nomeallegato;

        return $this;
    }

    /**
     * Get nomeallegato
     *
     * @return string 
     */
    public function getNomeallegato()
    {
        return $this->nomeallegato;
    }

    /**
     * Set linkallegato
     *
     * @param string $linkallegato
     * @return Bandiallegati
     */
    public function setLinkallegato($linkallegato)
    {
        $this->linkallegato = $linkallegato;

        return $this;
    }

    /**
     * Get linkallegato
     *
     * @return string 
     */
    public function getLinkallegato()
    {
        return $this->linkallegato;
    }
}
