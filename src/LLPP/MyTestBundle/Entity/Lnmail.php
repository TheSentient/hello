<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lnmail
 */
class Lnmail
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idMittente;

    /**
     * @var integer
     */
    private $idDestinatario;

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $testo;

    /**
     * @var string
     */
    private $letto;

    /**
     * @var \DateTime
     */
    private $data;


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
     * Set idMittente
     *
     * @param integer $idMittente
     * @return Lnmail
     */
    public function setIdMittente($idMittente)
    {
        $this->idMittente = $idMittente;

        return $this;
    }

    /**
     * Get idMittente
     *
     * @return integer 
     */
    public function getIdMittente()
    {
        return $this->idMittente;
    }

    /**
     * Set idDestinatario
     *
     * @param integer $idDestinatario
     * @return Lnmail
     */
    public function setIdDestinatario($idDestinatario)
    {
        $this->idDestinatario = $idDestinatario;

        return $this;
    }

    /**
     * Get idDestinatario
     *
     * @return integer 
     */
    public function getIdDestinatario()
    {
        return $this->idDestinatario;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     * @return Lnmail
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

    /**
     * Set testo
     *
     * @param string $testo
     * @return Lnmail
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
     * Set letto
     *
     * @param string $letto
     * @return Lnmail
     */
    public function setLetto($letto)
    {
        $this->letto = $letto;

        return $this;
    }

    /**
     * Get letto
     *
     * @return string 
     */
    public function getLetto()
    {
        return $this->letto;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return Lnmail
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
}
