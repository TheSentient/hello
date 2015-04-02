<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlppArticoliCategoria
 *
 * @ORM\Table(name="llpp_articoli_categoria")
 * @ORM\Entity
 */
class LlppArticoliCategoria
{
    /**
     * @var string
     *
     * @ORM\Column(name="argomento", type="string", length=40, nullable=true)
     */
    private $argomento;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=40, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="icona", type="string", length=255, nullable=true)
     */
    private $icona;

    /**
     * @var string
     *
     * @ORM\Column(name="topTenHome", type="string", length=50, nullable=false)
     */
    private $toptenhome;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set argomento
     *
     * @param string $argomento
     * @return LlppArticoliCategoria
     */
    public function setArgomento($argomento)
    {
        $this->argomento = $argomento;

        return $this;
    }

    /**
     * Get argomento
     *
     * @return string 
     */
    public function getArgomento()
    {
        return $this->argomento;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return LlppArticoliCategoria
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
     * Set icona
     *
     * @param string $icona
     * @return LlppArticoliCategoria
     */
    public function setIcona($icona)
    {
        $this->icona = $icona;

        return $this;
    }

    /**
     * Get icona
     *
     * @return string 
     */
    public function getIcona()
    {
        return $this->icona;
    }

    /**
     * Set toptenhome
     *
     * @param string $toptenhome
     * @return LlppArticoliCategoria
     */
    public function setToptenhome($toptenhome)
    {
        $this->toptenhome = $toptenhome;

        return $this;
    }

    /**
     * Get toptenhome
     *
     * @return string 
     */
    public function getToptenhome()
    {
        return $this->toptenhome;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
