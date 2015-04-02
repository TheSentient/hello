<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Llppabbonati
 */
class Llppabbonati
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idcliente;

    /**
     * @var \DateTime
     */
    private $datascadenza;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $cognome;

    /**
     * @var string
     */
    private $email;


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
     * Set idcliente
     *
     * @param integer $idcliente
     * @return Llppabbonati
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return integer 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set datascadenza
     *
     * @param \DateTime $datascadenza
     * @return Llppabbonati
     */
    public function setDatascadenza($datascadenza)
    {
        $this->datascadenza = $datascadenza;

        return $this;
    }

    /**
     * Get datascadenza
     *
     * @return \DateTime 
     */
    public function getDatascadenza()
    {
        return $this->datascadenza;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Llppabbonati
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     * @return Llppabbonati
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string 
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Llppabbonati
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
}
