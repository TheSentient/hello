<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commenti
 */
class Commenti
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $idNews;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $testo;

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var string
     */
    private $nick;

    /**
     * @var string
     */
    private $pubbl;

    /**
     * @var string
     */
    private $indirizzo;

    /**
     * @var integer
     */
    private $votiPositivi;

    /**
     * @var integer
     */
    private $votiNegativi;

    /**
     * @var integer
     */
    private $parent;


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
     * Set idNews
     *
     * @param string $idNews
     * @return Commenti
     */
    public function setIdNews($idNews)
    {
        $this->idNews = $idNews;

        return $this;
    }

    /**
     * Get idNews
     *
     * @return string 
     */
    public function getIdNews()
    {
        return $this->idNews;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Commenti
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
     * Set titolo
     *
     * @param string $titolo
     * @return Commenti
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
     * @return Commenti
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
     * Set data
     *
     * @param \DateTime $data
     * @return Commenti
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
     * Set nick
     *
     * @param string $nick
     * @return Commenti
     */
    public function setNick($nick)
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Get nick
     *
     * @return string 
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set pubbl
     *
     * @param string $pubbl
     * @return Commenti
     */
    public function setPubbl($pubbl)
    {
        $this->pubbl = $pubbl;

        return $this;
    }

    /**
     * Get pubbl
     *
     * @return string 
     */
    public function getPubbl()
    {
        return $this->pubbl;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return Commenti
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string 
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set votiPositivi
     *
     * @param integer $votiPositivi
     * @return Commenti
     */
    public function setVotiPositivi($votiPositivi)
    {
        $this->votiPositivi = $votiPositivi;

        return $this;
    }

    /**
     * Get votiPositivi
     *
     * @return integer 
     */
    public function getVotiPositivi()
    {
        return $this->votiPositivi;
    }

    /**
     * Set votiNegativi
     *
     * @param integer $votiNegativi
     * @return Commenti
     */
    public function setVotiNegativi($votiNegativi)
    {
        $this->votiNegativi = $votiNegativi;

        return $this;
    }

    /**
     * Get votiNegativi
     *
     * @return integer 
     */
    public function getVotiNegativi()
    {
        return $this->votiNegativi;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     * @return Commenti
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }
}
