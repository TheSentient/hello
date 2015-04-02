<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TabellaA
 */
class TabellaA
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $classecategoria;

    /**
     * @var float
     */
    private $n;

    /**
     * @var float
     */
    private $q;

    /**
     * @var float
     */
    private $x3;


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
     * Set classecategoria
     *
     * @param string $classecategoria
     * @return TabellaA
     */
    public function setClassecategoria($classecategoria)
    {
        $this->classecategoria = $classecategoria;

        return $this;
    }

    /**
     * Get classecategoria
     *
     * @return string 
     */
    public function getClassecategoria()
    {
        return $this->classecategoria;
    }

    /**
     * Set n
     *
     * @param float $n
     * @return TabellaA
     */
    public function setN($n)
    {
        $this->n = $n;

        return $this;
    }

    /**
     * Get n
     *
     * @return float 
     */
    public function getN()
    {
        return $this->n;
    }

    /**
     * Set q
     *
     * @param float $q
     * @return TabellaA
     */
    public function setQ($q)
    {
        $this->q = $q;

        return $this;
    }

    /**
     * Get q
     *
     * @return float 
     */
    public function getQ()
    {
        return $this->q;
    }

    /**
     * Set x3
     *
     * @param float $x3
     * @return TabellaA
     */
    public function setX3($x3)
    {
        $this->x3 = $x3;

        return $this;
    }

    /**
     * Get x3
     *
     * @return float 
     */
    public function getX3()
    {
        return $this->x3;
    }
}
