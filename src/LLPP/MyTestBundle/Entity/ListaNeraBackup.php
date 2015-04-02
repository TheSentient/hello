<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListaNeraBackup
 */
class ListaNeraBackup
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $indirizzo;

    /**
     * @var string
     */
    private $dataInserimento;


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
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return ListaNeraBackup
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
     * Set dataInserimento
     *
     * @param string $dataInserimento
     * @return ListaNeraBackup
     */
    public function setDataInserimento($dataInserimento)
    {
        $this->dataInserimento = $dataInserimento;

        return $this;
    }

    /**
     * Get dataInserimento
     *
     * @return string 
     */
    public function getDataInserimento()
    {
        return $this->dataInserimento;
    }
}
