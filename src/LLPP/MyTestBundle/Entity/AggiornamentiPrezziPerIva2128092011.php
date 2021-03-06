<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AggiornamentiPrezziPerIva2128092011
 */
class AggiornamentiPrezziPerIva2128092011
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $isbn;

    /**
     * @var string
     */
    private $prezzoNuovo;


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
     * Set isbn
     *
     * @param string $isbn
     * @return AggiornamentiPrezziPerIva2128092011
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set prezzoNuovo
     *
     * @param string $prezzoNuovo
     * @return AggiornamentiPrezziPerIva2128092011
     */
    public function setPrezzoNuovo($prezzoNuovo)
    {
        $this->prezzoNuovo = $prezzoNuovo;

        return $this;
    }

    /**
     * Get prezzoNuovo
     *
     * @return string 
     */
    public function getPrezzoNuovo()
    {
        return $this->prezzoNuovo;
    }
}
