<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certificazioni
 */
class Certificazioni
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomeCertificazione;


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
     * Set nomeCertificazione
     *
     * @param string $nomeCertificazione
     * @return Certificazioni
     */
    public function setNomeCertificazione($nomeCertificazione)
    {
        $this->nomeCertificazione = $nomeCertificazione;

        return $this;
    }

    /**
     * Get nomeCertificazione
     *
     * @return string 
     */
    public function getNomeCertificazione()
    {
        return $this->nomeCertificazione;
    }
}
