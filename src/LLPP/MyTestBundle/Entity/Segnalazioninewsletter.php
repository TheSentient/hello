<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Segnalazioninewsletter
 */
class Segnalazioninewsletter
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomemittente;

    /**
     * @var string
     */
    private $emailmittente;

    /**
     * @var string
     */
    private $nomedestinatario;

    /**
     * @var string
     */
    private $emaildestinatario;

    /**
     * @var string
     */
    private $testoaggiuntivo;

    /**
     * @var string
     */
    private $linksegnalato;


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
     * Set nomemittente
     *
     * @param string $nomemittente
     * @return Segnalazioninewsletter
     */
    public function setNomemittente($nomemittente)
    {
        $this->nomemittente = $nomemittente;

        return $this;
    }

    /**
     * Get nomemittente
     *
     * @return string 
     */
    public function getNomemittente()
    {
        return $this->nomemittente;
    }

    /**
     * Set emailmittente
     *
     * @param string $emailmittente
     * @return Segnalazioninewsletter
     */
    public function setEmailmittente($emailmittente)
    {
        $this->emailmittente = $emailmittente;

        return $this;
    }

    /**
     * Get emailmittente
     *
     * @return string 
     */
    public function getEmailmittente()
    {
        return $this->emailmittente;
    }

    /**
     * Set nomedestinatario
     *
     * @param string $nomedestinatario
     * @return Segnalazioninewsletter
     */
    public function setNomedestinatario($nomedestinatario)
    {
        $this->nomedestinatario = $nomedestinatario;

        return $this;
    }

    /**
     * Get nomedestinatario
     *
     * @return string 
     */
    public function getNomedestinatario()
    {
        return $this->nomedestinatario;
    }

    /**
     * Set emaildestinatario
     *
     * @param string $emaildestinatario
     * @return Segnalazioninewsletter
     */
    public function setEmaildestinatario($emaildestinatario)
    {
        $this->emaildestinatario = $emaildestinatario;

        return $this;
    }

    /**
     * Get emaildestinatario
     *
     * @return string 
     */
    public function getEmaildestinatario()
    {
        return $this->emaildestinatario;
    }

    /**
     * Set testoaggiuntivo
     *
     * @param string $testoaggiuntivo
     * @return Segnalazioninewsletter
     */
    public function setTestoaggiuntivo($testoaggiuntivo)
    {
        $this->testoaggiuntivo = $testoaggiuntivo;

        return $this;
    }

    /**
     * Get testoaggiuntivo
     *
     * @return string 
     */
    public function getTestoaggiuntivo()
    {
        return $this->testoaggiuntivo;
    }

    /**
     * Set linksegnalato
     *
     * @param string $linksegnalato
     * @return Segnalazioninewsletter
     */
    public function setLinksegnalato($linksegnalato)
    {
        $this->linksegnalato = $linksegnalato;

        return $this;
    }

    /**
     * Get linksegnalato
     *
     * @return string 
     */
    public function getLinksegnalato()
    {
        return $this->linksegnalato;
    }
}
