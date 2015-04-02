<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LibreriaSpessoCompratiAssiemeCategorie
 */
class LibreriaSpessoCompratiAssiemeCategorie
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $categorie;

    /**
     * @var string
     */
    private $isbns;


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
     * Set categorie
     *
     * @param string $categorie
     * @return LibreriaSpessoCompratiAssiemeCategorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set isbns
     *
     * @param string $isbns
     * @return LibreriaSpessoCompratiAssiemeCategorie
     */
    public function setIsbns($isbns)
    {
        $this->isbns = $isbns;

        return $this;
    }

    /**
     * Get isbns
     *
     * @return string 
     */
    public function getIsbns()
    {
        return $this->isbns;
    }
}
