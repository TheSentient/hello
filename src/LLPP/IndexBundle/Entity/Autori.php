<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autori
 *
 * @ORM\Table(name="autori")
 * @ORM\Entity
 */
class Autori
{
    /**
     * @var string
     *
     * @ORM\Column(name="autore", type="string", length=50, nullable=false)
     */
    private $autore;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set autore
     *
     * @param string $autore
     * @return Autori
     */
    public function setAutore($autore)
    {
        $this->autore = $autore;

        return $this;
    }

    /**
     * Get autore
     *
     * @return string 
     */
    public function getAutore()
    {
        return $this->autore;
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
