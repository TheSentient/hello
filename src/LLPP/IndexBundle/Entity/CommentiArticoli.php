<?php

namespace LLPP\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentiArticoli
 *
 * @ORM\Table(name="commenti")
 * @ORM\Entity
 */
class CommentiArticoli
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

      // ...
    /**
     * @ORM\ManyToOne(targetEntity="Articoli", inversedBy="commenti")
     * @ORM\JoinColumn(name="id_news", referencedColumnName="id")
     **/

    private $articoli;

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
