<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlppArticoliVenditaOfferte
 *
 * @ORM\Table(name="llpp_articoli_vendita_offerte")
 * @ORM\Entity
 */
class LlppArticoliVenditaOfferte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_articolo_vendita", type="integer", nullable=false)
     */
    private $idArticoloVendita;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="offertai", type="date", nullable=false)
     */
    private $offertai;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="offertaf", type="date", nullable=false)
     */
    private $offertaf;

    /**
     * @var integer
     *
     * @ORM\Column(name="sconto", type="integer", nullable=false)
     */
    private $sconto;

    /**
     * @var string
     *
     * @ORM\Column(name="spedizione", type="string", length=50, nullable=false)
     */
    private $spedizione;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_origine", type="integer", nullable=false)
     */
    private $idOrigine;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idArticoloVendita
     *
     * @param integer $idArticoloVendita
     * @return LlppArticoliVenditaOfferte
     */
    public function setIdArticoloVendita($idArticoloVendita)
    {
        $this->idArticoloVendita = $idArticoloVendita;

        return $this;
    }

    /**
     * Get idArticoloVendita
     *
     * @return integer 
     */
    public function getIdArticoloVendita()
    {
        return $this->idArticoloVendita;
    }

    /**
     * Set offertai
     *
     * @param \DateTime $offertai
     * @return LlppArticoliVenditaOfferte
     */
    public function setOffertai($offertai)
    {
        $this->offertai = $offertai;

        return $this;
    }

    /**
     * Get offertai
     *
     * @return \DateTime 
     */
    public function getOffertai()
    {
        return $this->offertai;
    }

    /**
     * Set offertaf
     *
     * @param \DateTime $offertaf
     * @return LlppArticoliVenditaOfferte
     */
    public function setOffertaf($offertaf)
    {
        $this->offertaf = $offertaf;

        return $this;
    }

    /**
     * Get offertaf
     *
     * @return \DateTime 
     */
    public function getOffertaf()
    {
        return $this->offertaf;
    }

    /**
     * Set sconto
     *
     * @param integer $sconto
     * @return LlppArticoliVenditaOfferte
     */
    public function setSconto($sconto)
    {
        $this->sconto = $sconto;

        return $this;
    }

    /**
     * Get sconto
     *
     * @return integer 
     */
    public function getSconto()
    {
        return $this->sconto;
    }

    /**
     * Set spedizione
     *
     * @param string $spedizione
     * @return LlppArticoliVenditaOfferte
     */
    public function setSpedizione($spedizione)
    {
        $this->spedizione = $spedizione;

        return $this;
    }

    /**
     * Get spedizione
     *
     * @return string 
     */
    public function getSpedizione()
    {
        return $this->spedizione;
    }

    /**
     * Set idOrigine
     *
     * @param integer $idOrigine
     * @return LlppArticoliVenditaOfferte
     */
    public function setIdOrigine($idOrigine)
    {
        $this->idOrigine = $idOrigine;

        return $this;
    }

    /**
     * Get idOrigine
     *
     * @return integer 
     */
    public function getIdOrigine()
    {
        return $this->idOrigine;
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
