  <?php

  /**
   * @ORM\OneToMany(targetEntity="CommentiArticoli",mappedBy="articolo")
   * */
class Articoli {


private $commenti;
 
  public function __construct()
  {
    $this->categorie = new \Doctrine\Common\Collections\ArrayCollection();
    $this->commenti = new \Doctrine\Common\Collections\ArrayCollection();
  }



  /**
     * Add commenti
     *
     * @param \LLPP\IndexBundle\Entity\CommentiArticoli $commenti
     * @return Articoli
     */
    public function addCommenti(\LLPP\IndexBundle\Entity\CommentiArticoli $commenti)
    {
        $this->commenti[] = $commenti;

        return $this;
    }

    /**
     * Remove commenti
     *
     * @param \LLPP\IndexBundle\Entity\CommentiArticoli $commenti
     */
    public function removeCommenti(\LLPP\IndexBundle\Entity\CommentiArticoli $commenti)
    {
        $this->commenti->removeElement($commenti);
    }

    /**
     * Get commenti
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommenti()
    {
        return $this->commenti;
    }

    /**
   * @ORM\ManyToMany(targetEntity="Articoli",mappedBy="categorie")
   * */
  private $articoli;


}




  ?>