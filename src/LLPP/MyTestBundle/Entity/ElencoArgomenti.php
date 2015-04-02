<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElencoArgomenti
 */
class ElencoArgomenti
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomeArgomento;


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
     * Set nomeArgomento
     *
     * @param string $nomeArgomento
     * @return ElencoArgomenti
     */
    public function setNomeArgomento($nomeArgomento)
    {
        $this->nomeArgomento = $nomeArgomento;

        return $this;
    }

    /**
     * Get nomeArgomento
     *
     * @return string 
     */
    public function getNomeArgomento()
    {
        return $this->nomeArgomento;
    }
}
