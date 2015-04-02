<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CertificazioniAziende
 */
class CertificazioniAziende
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idAzienda;

    /**
     * @var string
     */
    private $nomeAzienda;

    /**
     * @var integer
     */
    private $idCertificazione;

    /**
     * @var string
     */
    private $nomeCertificazione;


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
     * Set idAzienda
     *
     * @param integer $idAzienda
     * @return CertificazioniAziende
     */
    public function setIdAzienda($idAzienda)
    {
        $this->idAzienda = $idAzienda;

        return $this;
    }

    /**
     * Get idAzienda
     *
     * @return integer 
     */
    public function getIdAzienda()
    {
        return $this->idAzienda;
    }

    /**
     * Set nomeAzienda
     *
     * @param string $nomeAzienda
     * @return CertificazioniAziende
     */
    public function setNomeAzienda($nomeAzienda)
    {
        $this->nomeAzienda = $nomeAzienda;

        return $this;
    }

    /**
     * Get nomeAzienda
     *
     * @return string 
     */
    public function getNomeAzienda()
    {
        return $this->nomeAzienda;
    }

    /**
     * Set idCertificazione
     *
     * @param integer $idCertificazione
     * @return CertificazioniAziende
     */
    public function setIdCertificazione($idCertificazione)
    {
        $this->idCertificazione = $idCertificazione;

        return $this;
    }

    /**
     * Get idCertificazione
     *
     * @return integer 
     */
    public function getIdCertificazione()
    {
        return $this->idCertificazione;
    }

    /**
     * Set nomeCertificazione
     *
     * @param string $nomeCertificazione
     * @return CertificazioniAziende
     */
    public function setNomeCertificazione($nomeCertificazione)
    {
        $this->nomeCertificazione = $nomeCertificazione;

        return $this;
    }

    /**
     * Get nomeCertificazione
     *
     * @return string 
     */
    public function getNomeCertificazione()
    {
        return $this->nomeCertificazione;
    }
}
