<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sanatoria
 */
class Sanatoria
{
    /**
     * @var integer
     */
    private $tipologia;

    /**
     * @var float
     */
    private $residenziale;

    /**
     * @var float
     */
    private $nonresidenziale;

    /**
     * @var float
     */
    private $forfait;


    /**
     * Get tipologia
     *
     * @return integer 
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }

    /**
     * Set residenziale
     *
     * @param float $residenziale
     * @return Sanatoria
     */
    public function setResidenziale($residenziale)
    {
        $this->residenziale = $residenziale;

        return $this;
    }

    /**
     * Get residenziale
     *
     * @return float 
     */
    public function getResidenziale()
    {
        return $this->residenziale;
    }

    /**
     * Set nonresidenziale
     *
     * @param float $nonresidenziale
     * @return Sanatoria
     */
    public function setNonresidenziale($nonresidenziale)
    {
        $this->nonresidenziale = $nonresidenziale;

        return $this;
    }

    /**
     * Get nonresidenziale
     *
     * @return float 
     */
    public function getNonresidenziale()
    {
        return $this->nonresidenziale;
    }

    /**
     * Set forfait
     *
     * @param float $forfait
     * @return Sanatoria
     */
    public function setForfait($forfait)
    {
        $this->forfait = $forfait;

        return $this;
    }

    /**
     * Get forfait
     *
     * @return float 
     */
    public function getForfait()
    {
        return $this->forfait;
    }
}
