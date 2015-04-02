<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SegnalazioneindirizzicniTest
 */
class SegnalazioneindirizzicniTest
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $nominativo;


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
     * Set nominativo
     *
     * @param string $nominativo
     * @return SegnalazioneindirizzicniTest
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
