<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Softwarefreerichiesteinfo
 */
class Softwarefreerichiesteinfo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nominativo;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $testo;

    /**
     * @var string
     */
    private $software;


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
     * Set nominativo
     *
     * @param string $nominativo
     * @return Softwarefreerichiesteinfo
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

    /**
     * Set email
     *
     * @param string $email
     * @return Softwarefreerichiesteinfo
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set testo
     *
     * @param string $testo
     * @return Softwarefreerichiesteinfo
     */
    public function setTesto($testo)
    {
        $this->testo = $testo;

        return $this;
    }

    /**
     * Get testo
     *
     * @return string 
     */
    public function getTesto()
    {
        return $this->testo;
    }

    /**
     * Set software
     *
     * @param string $software
     * @return Softwarefreerichiesteinfo
     */
    public function setSoftware($software)
    {
        $this->software = $software;

        return $this;
    }

    /**
     * Get software
     *
     * @return string 
     */
    public function getSoftware()
    {
        return $this->software;
    }
}
