<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletterdettagli
 */
class Newsletterdettagli
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var integer
     */
    private $invii;

    /**
     * @var string
     */
    private $azienda;

    /**
     * @var string
     */
    private $n;

    /**
     * @var string
     */
    private $attiva;


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
     * Set data
     *
     * @param \DateTime $data
     * @return Newsletterdettagli
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set invii
     *
     * @param integer $invii
     * @return Newsletterdettagli
     */
    public function setInvii($invii)
    {
        $this->invii = $invii;

        return $this;
    }

    /**
     * Get invii
     *
     * @return integer 
     */
    public function getInvii()
    {
        return $this->invii;
    }

    /**
     * Set azienda
     *
     * @param string $azienda
     * @return Newsletterdettagli
     */
    public function setAzienda($azienda)
    {
        $this->azienda = $azienda;

        return $this;
    }

    /**
     * Get azienda
     *
     * @return string 
     */
    public function getAzienda()
    {
        return $this->azienda;
    }

    /**
     * Set n
     *
     * @param string $n
     * @return Newsletterdettagli
     */
    public function setN($n)
    {
        $this->n = $n;

        return $this;
    }

    /**
     * Get n
     *
     * @return string 
     */
    public function getN()
    {
        return $this->n;
    }

    /**
     * Set attiva
     *
     * @param string $attiva
     * @return Newsletterdettagli
     */
    public function setAttiva($attiva)
    {
        $this->attiva = $attiva;

        return $this;
    }

    /**
     * Get attiva
     *
     * @return string 
     */
    public function getAttiva()
    {
        return $this->attiva;
    }
}
