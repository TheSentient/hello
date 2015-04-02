<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Storicomagazzinopalagonia
 */
class Storicomagazzinopalagonia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $distributore;

    /**
     * @var string
     */
    private $articolo;

    /**
     * @var string
     */
    private $tipomovimento;

    /**
     * @var string
     */
    private $qta;

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var string
     */
    private $note;


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
     * Set distributore
     *
     * @param integer $distributore
     * @return Storicomagazzinopalagonia
     */
    public function setDistributore($distributore)
    {
        $this->distributore = $distributore;

        return $this;
    }

    /**
     * Get distributore
     *
     * @return integer 
     */
    public function getDistributore()
    {
        return $this->distributore;
    }

    /**
     * Set articolo
     *
     * @param string $articolo
     * @return Storicomagazzinopalagonia
     */
    public function setArticolo($articolo)
    {
        $this->articolo = $articolo;

        return $this;
    }

    /**
     * Get articolo
     *
     * @return string 
     */
    public function getArticolo()
    {
        return $this->articolo;
    }

    /**
     * Set tipomovimento
     *
     * @param string $tipomovimento
     * @return Storicomagazzinopalagonia
     */
    public function setTipomovimento($tipomovimento)
    {
        $this->tipomovimento = $tipomovimento;

        return $this;
    }

    /**
     * Get tipomovimento
     *
     * @return string 
     */
    public function getTipomovimento()
    {
        return $this->tipomovimento;
    }

    /**
     * Set qta
     *
     * @param string $qta
     * @return Storicomagazzinopalagonia
     */
    public function setQta($qta)
    {
        $this->qta = $qta;

        return $this;
    }

    /**
     * Get qta
     *
     * @return string 
     */
    public function getQta()
    {
        return $this->qta;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return Storicomagazzinopalagonia
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
     * Set note
     *
     * @param string $note
     * @return Storicomagazzinopalagonia
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }
}
