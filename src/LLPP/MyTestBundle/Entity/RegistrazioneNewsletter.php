<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistrazioneNewsletter
 */
class RegistrazioneNewsletter
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $regione;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $professione;

    /**
     * @var \DateTime
     */
    private $quando;

    /**
     * @var string
     */
    private $vero;


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
     * Set regione
     *
     * @param string $regione
     * @return RegistrazioneNewsletter
     */
    public function setRegione($regione)
    {
        $this->regione = $regione;

        return $this;
    }

    /**
     * Get regione
     *
     * @return string 
     */
    public function getRegione()
    {
        return $this->regione;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return RegistrazioneNewsletter
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
     * Set professione
     *
     * @param string $professione
     * @return RegistrazioneNewsletter
     */
    public function setProfessione($professione)
    {
        $this->professione = $professione;

        return $this;
    }

    /**
     * Get professione
     *
     * @return string 
     */
    public function getProfessione()
    {
        return $this->professione;
    }

    /**
     * Set quando
     *
     * @param \DateTime $quando
     * @return RegistrazioneNewsletter
     */
    public function setQuando($quando)
    {
        $this->quando = $quando;

        return $this;
    }

    /**
     * Get quando
     *
     * @return \DateTime 
     */
    public function getQuando()
    {
        return $this->quando;
    }

    /**
     * Set vero
     *
     * @param string $vero
     * @return RegistrazioneNewsletter
     */
    public function setVero($vero)
    {
        $this->vero = $vero;

        return $this;
    }

    /**
     * Get vero
     *
     * @return string 
     */
    public function getVero()
    {
        return $this->vero;
    }
}
