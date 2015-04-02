<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConteggiNewsletterAziende
 */
class ConteggiNewsletterAziende
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $newsletter;

    /**
     * @var \DateTime
     */
    private $ts;

    /**
     * @var string
     */
    private $linkEseguito;

    /**
     * @var string
     */
    private $codiceNewsletter;


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
     * Set newsletter
     *
     * @param string $newsletter
     * @return ConteggiNewsletterAziende
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return string 
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set ts
     *
     * @param \DateTime $ts
     * @return ConteggiNewsletterAziende
     */
    public function setTs($ts)
    {
        $this->ts = $ts;

        return $this;
    }

    /**
     * Get ts
     *
     * @return \DateTime 
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * Set linkEseguito
     *
     * @param string $linkEseguito
     * @return ConteggiNewsletterAziende
     */
    public function setLinkEseguito($linkEseguito)
    {
        $this->linkEseguito = $linkEseguito;

        return $this;
    }

    /**
     * Get linkEseguito
     *
     * @return string 
     */
    public function getLinkEseguito()
    {
        return $this->linkEseguito;
    }

    /**
     * Set codiceNewsletter
     *
     * @param string $codiceNewsletter
     * @return ConteggiNewsletterAziende
     */
    public function setCodiceNewsletter($codiceNewsletter)
    {
        $this->codiceNewsletter = $codiceNewsletter;

        return $this;
    }

    /**
     * Get codiceNewsletter
     *
     * @return string 
     */
    public function getCodiceNewsletter()
    {
        return $this->codiceNewsletter;
    }
}
