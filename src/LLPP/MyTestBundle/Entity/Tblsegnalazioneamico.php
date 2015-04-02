<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblsegnalazioneamico
 */
class Tblsegnalazioneamico
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomeMittente;

    /**
     * @var string
     */
    private $emailMittente;

    /**
     * @var string
     */
    private $nomeDestinatario;

    /**
     * @var string
     */
    private $emailDestinatario;

    /**
     * @var string
     */
    private $messaggio;

    /**
     * @var string
     */
    private $link;

    /**
     * @var \DateTime
     */
    private $ts;


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
     * Set nomeMittente
     *
     * @param string $nomeMittente
     * @return Tblsegnalazioneamico
     */
    public function setNomeMittente($nomeMittente)
    {
        $this->nomeMittente = $nomeMittente;

        return $this;
    }

    /**
     * Get nomeMittente
     *
     * @return string 
     */
    public function getNomeMittente()
    {
        return $this->nomeMittente;
    }

    /**
     * Set emailMittente
     *
     * @param string $emailMittente
     * @return Tblsegnalazioneamico
     */
    public function setEmailMittente($emailMittente)
    {
        $this->emailMittente = $emailMittente;

        return $this;
    }

    /**
     * Get emailMittente
     *
     * @return string 
     */
    public function getEmailMittente()
    {
        return $this->emailMittente;
    }

    /**
     * Set nomeDestinatario
     *
     * @param string $nomeDestinatario
     * @return Tblsegnalazioneamico
     */
    public function setNomeDestinatario($nomeDestinatario)
    {
        $this->nomeDestinatario = $nomeDestinatario;

        return $this;
    }

    /**
     * Get nomeDestinatario
     *
     * @return string 
     */
    public function getNomeDestinatario()
    {
        return $this->nomeDestinatario;
    }

    /**
     * Set emailDestinatario
     *
     * @param string $emailDestinatario
     * @return Tblsegnalazioneamico
     */
    public function setEmailDestinatario($emailDestinatario)
    {
        $this->emailDestinatario = $emailDestinatario;

        return $this;
    }

    /**
     * Get emailDestinatario
     *
     * @return string 
     */
    public function getEmailDestinatario()
    {
        return $this->emailDestinatario;
    }

    /**
     * Set messaggio
     *
     * @param string $messaggio
     * @return Tblsegnalazioneamico
     */
    public function setMessaggio($messaggio)
    {
        $this->messaggio = $messaggio;

        return $this;
    }

    /**
     * Get messaggio
     *
     * @return string 
     */
    public function getMessaggio()
    {
        return $this->messaggio;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Tblsegnalazioneamico
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set ts
     *
     * @param \DateTime $ts
     * @return Tblsegnalazioneamico
     */
    public function setTs($ts)
    {
        $this->ts = $ts;

        return $this;
    }

    /**
     * Get ts
     *
     * @return \DateTime 
     */
    public function getTs()
    {
        return $this->ts;
    }
}
