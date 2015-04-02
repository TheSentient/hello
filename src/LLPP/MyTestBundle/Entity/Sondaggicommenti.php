<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sondaggicommenti
 */
class Sondaggicommenti
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idSondaggio;

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
    private $approvato;

    /**
     * @var integer
     */
    private $ok;

    /**
     * @var integer
     */
    private $no;

    /**
     * @var string
     */
    private $titolocommento;

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var \DateTime
     */
    private $orario;

    /**
     * @var string
     */
    private $ip;


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
     * Set idSondaggio
     *
     * @param integer $idSondaggio
     * @return Sondaggicommenti
     */
    public function setIdSondaggio($idSondaggio)
    {
        $this->idSondaggio = $idSondaggio;

        return $this;
    }

    /**
     * Get idSondaggio
     *
     * @return integer 
     */
    public function getIdSondaggio()
    {
        return $this->idSondaggio;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     * @return Sondaggicommenti
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
     * @return Sondaggicommenti
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
     * Set approvato
     *
     * @param string $approvato
     * @return Sondaggicommenti
     */
    public function setApprovato($approvato)
    {
        $this->approvato = $approvato;

        return $this;
    }

    /**
     * Get approvato
     *
     * @return string 
     */
    public function getApprovato()
    {
        return $this->approvato;
    }

    /**
     * Set ok
     *
     * @param integer $ok
     * @return Sondaggicommenti
     */
    public function setOk($ok)
    {
        $this->ok = $ok;

        return $this;
    }

    /**
     * Get ok
     *
     * @return integer 
     */
    public function getOk()
    {
        return $this->ok;
    }

    /**
     * Set no
     *
     * @param integer $no
     * @return Sondaggicommenti
     */
    public function setNo($no)
    {
        $this->no = $no;

        return $this;
    }

    /**
     * Get no
     *
     * @return integer 
     */
    public function getNo()
    {
        return $this->no;
    }

    /**
     * Set titolocommento
     *
     * @param string $titolocommento
     * @return Sondaggicommenti
     */
    public function setTitolocommento($titolocommento)
    {
        $this->titolocommento = $titolocommento;

        return $this;
    }

    /**
     * Get titolocommento
     *
     * @return string 
     */
    public function getTitolocommento()
    {
        return $this->titolocommento;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return Sondaggicommenti
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
     * Set orario
     *
     * @param \DateTime $orario
     * @return Sondaggicommenti
     */
    public function setOrario($orario)
    {
        $this->orario = $orario;

        return $this;
    }

    /**
     * Get orario
     *
     * @return \DateTime 
     */
    public function getOrario()
    {
        return $this->orario;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Sondaggicommenti
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }
}
