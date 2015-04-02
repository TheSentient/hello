<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BundleVarianti
 *
 * @ORM\Table(name="bundle_varianti")
 * @ORM\Entity
 */
class BundleVarianti
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_variante", type="integer", nullable=true)
     */
    private $idVariante;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_variante2", type="integer", nullable=true)
     */
    private $idVariante2;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_bundle", type="integer", nullable=true)
     */
    private $idBundle;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idVariante
     *
     * @param integer $idVariante
     * @return BundleVarianti
     */
    public function setIdVariante($idVariante)
    {
        $this->idVariante = $idVariante;

        return $this;
    }

    /**
     * Get idVariante
     *
     * @return integer 
     */
    public function getIdVariante()
    {
        return $this->idVariante;
    }

    /**
     * Set idVariante2
     *
     * @param integer $idVariante2
     * @return BundleVarianti
     */
    public function setIdVariante2($idVariante2)
    {
        $this->idVariante2 = $idVariante2;

        return $this;
    }

    /**
     * Get idVariante2
     *
     * @return integer 
     */
    public function getIdVariante2()
    {
        return $this->idVariante2;
    }

    /**
     * Set idBundle
     *
     * @param integer $idBundle
     * @return BundleVarianti
     */
    public function setIdBundle($idBundle)
    {
        $this->idBundle = $idBundle;

        return $this;
    }

    /**
     * Get idBundle
     *
     * @return integer 
     */
    public function getIdBundle()
    {
        return $this->idBundle;
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
