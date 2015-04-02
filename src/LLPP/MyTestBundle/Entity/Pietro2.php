<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pietro2
 */
class Pietro2
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $codiceTributo;

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
     * Set tipo
     *
     * @param string $tipo
     * @return Pietro2
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Pietro2
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

    /**
     * Set codiceTributo
     *
     * @param string $codiceTributo
     * @return Pietro2
     */
    public function setCodiceTributo($codiceTributo)
    {
        $this->codiceTributo = $codiceTributo;

        return $this;
    }

    /**
     * Get codiceTributo
     *
     * @return string 
     */
    public function getCodiceTributo()
    {
        return $this->codiceTributo;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return Pietro2
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
