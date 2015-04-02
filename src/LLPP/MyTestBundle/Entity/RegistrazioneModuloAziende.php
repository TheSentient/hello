<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistrazioneModuloAziende
 */
class RegistrazioneModuloAziende
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
     * @var string
     */
    private $regioneSociale;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $cognome;

    /**
     * @var string
     */
    private $professione;

    /**
     * @var string
     */
    private $indirizzo;

    /**
     * @var string
     */
    private $cap;

    /**
     * @var string
     */
    private $citta;

    /**
     * @var string
     */
    private $prov;

    /**
     * @var string
     */
    private $regione;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $testo;

    /**
     * @var string
     */
    private $html;

    /**
     * @var string
     */
    private $approvato;


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
     * @return RegistrazioneModuloAziende
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
     * @return RegistrazioneModuloAziende
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
     * Set regioneSociale
     *
     * @param string $regioneSociale
     * @return RegistrazioneModuloAziende
     */
    public function setRegioneSociale($regioneSociale)
    {
        $this->regioneSociale = $regioneSociale;

        return $this;
    }

    /**
     * Get regioneSociale
     *
     * @return string 
     */
    public function getRegioneSociale()
    {
        return $this->regioneSociale;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return RegistrazioneModuloAziende
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     * @return RegistrazioneModuloAziende
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string 
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set professione
     *
     * @param string $professione
     * @return RegistrazioneModuloAziende
     */
    public function setProfessione($professione)
    {
        $this->professione = $professione;

        return $this;
    }

    /**
     * Get professione
     *
     * @return string 
     */
    public function getProfessione()
    {
        return $this->professione;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return RegistrazioneModuloAziende
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string 
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set cap
     *
     * @param string $cap
     * @return RegistrazioneModuloAziende
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return string 
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set citta
     *
     * @param string $citta
     * @return RegistrazioneModuloAziende
     */
    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }

    /**
     * Get citta
     *
     * @return string 
     */
    public function getCitta()
    {
        return $this->citta;
    }

    /**
     * Set prov
     *
     * @param string $prov
     * @return RegistrazioneModuloAziende
     */
    public function setProv($prov)
    {
        $this->prov = $prov;

        return $this;
    }

    /**
     * Get prov
     *
     * @return string 
     */
    public function getProv()
    {
        return $this->prov;
    }

    /**
     * Set regione
     *
     * @param string $regione
     * @return RegistrazioneModuloAziende
     */
    public function setRegione($regione)
    {
        $this->regione = $regione;

        return $this;
    }

    /**
     * Get regione
     *
     * @return string 
     */
    public function getRegione()
    {
        return $this->regione;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return RegistrazioneModuloAziende
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return RegistrazioneModuloAziende
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set testo
     *
     * @param string $testo
     * @return RegistrazioneModuloAziende
     */
    public function setTesto($testo)
    {
        $this->testo = $testo;

        return $this;
    }

    /**
     * Get testo
     *
     * @return string 
     */
    public function getTesto()
    {
        return $this->testo;
    }

    /**
     * Set html
     *
     * @param string $html
     * @return RegistrazioneModuloAziende
     */
    public function setHtml($html)
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Get html
     *
     * @return string 
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * Set approvato
     *
     * @param string $approvato
     * @return RegistrazioneModuloAziende
     */
    public function setApprovato($approvato)
    {
        $this->approvato = $approvato;

        return $this;
    }

    /**
     * Get approvato
     *
     * @return string 
     */
    public function getApprovato()
    {
        return $this->approvato;
    }
}
