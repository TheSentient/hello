<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpostazioniNewsletter
 */
class ImpostazioniNewsletter
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $oggetto;

    /**
     * @var string
     */
    private $testo;

    /**
     * @var string
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
     * Set oggetto
     *
     * @param string $oggetto
     * @return ImpostazioniNewsletter
     */
    public function setOggetto($oggetto)
    {
        $this->oggetto = $oggetto;

        return $this;
    }

    /**
     * Get oggetto
     *
     * @return string 
     */
    public function getOggetto()
    {
        return $this->oggetto;
    }

    /**
     * Set testo
     *
     * @param string $testo
     * @return ImpostazioniNewsletter
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
     * @param string $data
     * @return ImpostazioniNewsletter
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }
}
