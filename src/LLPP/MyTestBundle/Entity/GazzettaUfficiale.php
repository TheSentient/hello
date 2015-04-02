<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GazzettaUfficiale
 */
class GazzettaUfficiale
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $file;

    /**
     * @var string
     */
    private $fileCert;

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var string
     */
    private $numero;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $numeroTipo;


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
     * Set nome
     *
     * @param string $nome
     * @return GazzettaUfficiale
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
     * Set file
     *
     * @param string $file
     * @return GazzettaUfficiale
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set fileCert
     *
     * @param string $fileCert
     * @return GazzettaUfficiale
     */
    public function setFileCert($fileCert)
    {
        $this->fileCert = $fileCert;

        return $this;
    }

    /**
     * Get fileCert
     *
     * @return string 
     */
    public function getFileCert()
    {
        return $this->fileCert;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return GazzettaUfficiale
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
     * Set numero
     *
     * @param string $numero
     * @return GazzettaUfficiale
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return GazzettaUfficiale
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
     * Set numeroTipo
     *
     * @param string $numeroTipo
     * @return GazzettaUfficiale
     */
    public function setNumeroTipo($numeroTipo)
    {
        $this->numeroTipo = $numeroTipo;

        return $this;
    }

    /**
     * Get numeroTipo
     *
     * @return string 
     */
    public function getNumeroTipo()
    {
        return $this->numeroTipo;
    }
}
