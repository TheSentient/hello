<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gift
 */
class Gift
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $regalo;

    /**
     * @var string
     */
    private $attivo;

    /**
     * @var string
     */
    private $img;

    /**
     * @var string
     */
    private $titolo;


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
     * Set regalo
     *
     * @param string $regalo
     * @return Gift
     */
    public function setRegalo($regalo)
    {
        $this->regalo = $regalo;

        return $this;
    }

    /**
     * Get regalo
     *
     * @return string 
     */
    public function getRegalo()
    {
        return $this->regalo;
    }

    /**
     * Set attivo
     *
     * @param string $attivo
     * @return Gift
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

    /**
     * Set img
     *
     * @param string $img
     * @return Gift
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     * @return Gift
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string 
     */
    public function getTitolo()
    {
        return $this->titolo;
    }
}
