<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContenutiModuloAziende
 */
class ContenutiModuloAziende
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idAzienda;

    /**
     * @var string
     */
    private $nomeAzienda;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $contenuto;

    /**
     * @var string
     */
    private $testoRisposta;


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
     * Set idAzienda
     *
     * @param integer $idAzienda
     * @return ContenutiModuloAziende
     */
    public function setIdAzienda($idAzienda)
    {
        $this->idAzienda = $idAzienda;

        return $this;
    }

    /**
     * Get idAzienda
     *
     * @return integer 
     */
    public function getIdAzienda()
    {
        return $this->idAzienda;
    }

    /**
     * Set nomeAzienda
     *
     * @param string $nomeAzienda
     * @return ContenutiModuloAziende
     */
    public function setNomeAzienda($nomeAzienda)
    {
        $this->nomeAzienda = $nomeAzienda;

        return $this;
    }

    /**
     * Get nomeAzienda
     *
     * @return string 
     */
    public function getNomeAzienda()
    {
        return $this->nomeAzienda;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return ContenutiModuloAziende
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
     * Set contenuto
     *
     * @param string $contenuto
     * @return ContenutiModuloAziende
     */
    public function setContenuto($contenuto)
    {
        $this->contenuto = $contenuto;

        return $this;
    }

    /**
     * Get contenuto
     *
     * @return string 
     */
    public function getContenuto()
    {
        return $this->contenuto;
    }

    /**
     * Set testoRisposta
     *
     * @param string $testoRisposta
     * @return ContenutiModuloAziende
     */
    public function setTestoRisposta($testoRisposta)
    {
        $this->testoRisposta = $testoRisposta;

        return $this;
    }

    /**
     * Get testoRisposta
     *
     * @return string 
     */
    public function getTestoRisposta()
    {
        return $this->testoRisposta;
    }
}
