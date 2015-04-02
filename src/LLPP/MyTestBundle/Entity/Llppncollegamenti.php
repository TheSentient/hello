<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Llppncollegamenti
 */
class Llppncollegamenti
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idprofessionista;

    /**
     * @var integer
     */
    private $idamico;

    /**
     * @var \DateTime
     */
    private $quando;

    /**
     * @var string
     */
    private $attivo;


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
     * Set idprofessionista
     *
     * @param integer $idprofessionista
     * @return Llppncollegamenti
     */
    public function setIdprofessionista($idprofessionista)
    {
        $this->idprofessionista = $idprofessionista;

        return $this;
    }

    /**
     * Get idprofessionista
     *
     * @return integer 
     */
    public function getIdprofessionista()
    {
        return $this->idprofessionista;
    }

    /**
     * Set idamico
     *
     * @param integer $idamico
     * @return Llppncollegamenti
     */
    public function setIdamico($idamico)
    {
        $this->idamico = $idamico;

        return $this;
    }

    /**
     * Get idamico
     *
     * @return integer 
     */
    public function getIdamico()
    {
        return $this->idamico;
    }

    /**
     * Set quando
     *
     * @param \DateTime $quando
     * @return Llppncollegamenti
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
     * Set attivo
     *
     * @param string $attivo
     * @return Llppncollegamenti
     */
    public function setAttivo($attivo)
    {
        $this->attivo = $attivo;

        return $this;
    }

    /**
     * Get attivo
     *
     * @return string 
     */
    public function getAttivo()
    {
        return $this->attivo;
    }
}
