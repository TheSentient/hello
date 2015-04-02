<?php

namespace Grafill\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientillpp
 *
 * @ORM\Table(name="clientillpp", indexes={@ORM\Index(name="facebook_id", columns={"facebook_id"})})
 * @ORM\Entity
 */
class Clientillpp
{
    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=60, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=30, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Nome", type="string", length=40, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="Cognome", type="string", length=40, nullable=true)
     */
    private $cognome;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Professione", type="string", length=30, nullable=true)
     */
    private $professione;

    /**
     * @var string
     *
     * @ORM\Column(name="Societa", type="string", length=100, nullable=true)
     */
    private $societa;

    /**
     * @var string
     *
     * @ORM\Column(name="CodiceFiscale", type="string", length=17, nullable=true)
     */
    private $codicefiscale;

    /**
     * @var string
     *
     * @ORM\Column(name="PartitaIva", type="string", length=12, nullable=true)
     */
    private $partitaiva;

    /**
     * @var string
     *
     * @ORM\Column(name="Indirizzo", type="string", length=100, nullable=true)
     */
    private $indirizzo;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroCivico", type="string", length=20, nullable=true)
     */
    private $numerocivico;

    /**
     * @var string
     *
     * @ORM\Column(name="Citta", type="string", length=80, nullable=true)
     */
    private $citta;

    /**
     * @var string
     *
     * @ORM\Column(name="Cap", type="string", length=20, nullable=true)
     */
    private $cap;

    /**
     * @var string
     *
     * @ORM\Column(name="Regione", type="string", length=20, nullable=true)
     */
    private $regione;

    /**
     * @var string
     *
     * @ORM\Column(name="Provincia", type="string", length=30, nullable=true)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Cellulare", type="string", length=15, nullable=true)
     */
    private $cellulare;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @var integer
     *
     * @ORM\Column(name="ModalitaPagamento", type="integer", nullable=true)
     */
    private $modalitapagamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="ModalitaSpedizione", type="integer", nullable=true)
     */
    private $modalitaspedizione;

    /**
     * @var string
     *
     * @ORM\Column(name="Attivo", type="string", length=50, nullable=true)
     */
    private $attivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="RefIndirizzoSpedizione", type="integer", nullable=true)
     */
    private $refindirizzospedizione;

    /**
     * @var integer
     *
     * @ORM\Column(name="RefIndirizzoFatturazione", type="integer", nullable=false)
     */
    private $refindirizzofatturazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="quando", type="datetime", nullable=true)
     */
    private $quando;

    /**
     * @var integer
     *
     * @ORM\Column(name="facebook_id", type="bigint", nullable=true)
     */
    private $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="google_plus_id", type="string", length=255, nullable=true)
     */
    private $googlePlusId;

    /**
     * @var integer
     *
     * @ORM\Column(name="twitter_id", type="bigint", nullable=true)
     */
    private $twitterId;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedin_id", type="string", length=255, nullable=true)
     */
    private $linkedinId;

    /**
     * @var string
     *
     * @ORM\Column(name="social_avatar", type="string", length=255, nullable=true)
     */
    private $socialAvatar;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set username
     *
     * @param string $username
     * @return Clientillpp
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Clientillpp
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Clientillpp
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
     * @return Clientillpp
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
     * Set email
     *
     * @param string $email
     * @return Clientillpp
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
     * Set professione
     *
     * @param string $professione
     * @return Clientillpp
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
     * Set societa
     *
     * @param string $societa
     * @return Clientillpp
     */
    public function setSocieta($societa)
    {
        $this->societa = $societa;

        return $this;
    }

    /**
     * Get societa
     *
     * @return string 
     */
    public function getSocieta()
    {
        return $this->societa;
    }

    /**
     * Set codicefiscale
     *
     * @param string $codicefiscale
     * @return Clientillpp
     */
    public function setCodicefiscale($codicefiscale)
    {
        $this->codicefiscale = $codicefiscale;

        return $this;
    }

    /**
     * Get codicefiscale
     *
     * @return string 
     */
    public function getCodicefiscale()
    {
        return $this->codicefiscale;
    }

    /**
     * Set partitaiva
     *
     * @param string $partitaiva
     * @return Clientillpp
     */
    public function setPartitaiva($partitaiva)
    {
        $this->partitaiva = $partitaiva;

        return $this;
    }

    /**
     * Get partitaiva
     *
     * @return string 
     */
    public function getPartitaiva()
    {
        return $this->partitaiva;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return Clientillpp
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
     * Set numerocivico
     *
     * @param string $numerocivico
     * @return Clientillpp
     */
    public function setNumerocivico($numerocivico)
    {
        $this->numerocivico = $numerocivico;

        return $this;
    }

    /**
     * Get numerocivico
     *
     * @return string 
     */
    public function getNumerocivico()
    {
        return $this->numerocivico;
    }

    /**
     * Set citta
     *
     * @param string $citta
     * @return Clientillpp
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
     * Set cap
     *
     * @param string $cap
     * @return Clientillpp
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
     * Set regione
     *
     * @param string $regione
     * @return Clientillpp
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
     * Set provincia
     *
     * @param string $provincia
     * @return Clientillpp
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Clientillpp
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
     * Set cellulare
     *
     * @param string $cellulare
     * @return Clientillpp
     */
    public function setCellulare($cellulare)
    {
        $this->cellulare = $cellulare;

        return $this;
    }

    /**
     * Get cellulare
     *
     * @return string 
     */
    public function getCellulare()
    {
        return $this->cellulare;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Clientillpp
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set modalitapagamento
     *
     * @param integer $modalitapagamento
     * @return Clientillpp
     */
    public function setModalitapagamento($modalitapagamento)
    {
        $this->modalitapagamento = $modalitapagamento;

        return $this;
    }

    /**
     * Get modalitapagamento
     *
     * @return integer 
     */
    public function getModalitapagamento()
    {
        return $this->modalitapagamento;
    }

    /**
     * Set modalitaspedizione
     *
     * @param integer $modalitaspedizione
     * @return Clientillpp
     */
    public function setModalitaspedizione($modalitaspedizione)
    {
        $this->modalitaspedizione = $modalitaspedizione;

        return $this;
    }

    /**
     * Get modalitaspedizione
     *
     * @return integer 
     */
    public function getModalitaspedizione()
    {
        return $this->modalitaspedizione;
    }

    /**
     * Set attivo
     *
     * @param string $attivo
     * @return Clientillpp
     */
    public function setAttivo($attivo)
    {
        $this->attivo = $attivo;

        return $this;
    }

    /**
     * Get attivo
     *
     * @return string 
     */
    public function getAttivo()
    {
        return $this->attivo;
    }

    /**
     * Set refindirizzospedizione
     *
     * @param integer $refindirizzospedizione
     * @return Clientillpp
     */
    public function setRefindirizzospedizione($refindirizzospedizione)
    {
        $this->refindirizzospedizione = $refindirizzospedizione;

        return $this;
    }

    /**
     * Get refindirizzospedizione
     *
     * @return integer 
     */
    public function getRefindirizzospedizione()
    {
        return $this->refindirizzospedizione;
    }

    /**
     * Set refindirizzofatturazione
     *
     * @param integer $refindirizzofatturazione
     * @return Clientillpp
     */
    public function setRefindirizzofatturazione($refindirizzofatturazione)
    {
        $this->refindirizzofatturazione = $refindirizzofatturazione;

        return $this;
    }

    /**
     * Get refindirizzofatturazione
     *
     * @return integer 
     */
    public function getRefindirizzofatturazione()
    {
        return $this->refindirizzofatturazione;
    }

    /**
     * Set quando
     *
     * @param \DateTime $quando
     * @return Clientillpp
     */
    public function setQuando($quando)
    {
        $this->quando = $quando;

        return $this;
    }

    /**
     * Get quando
     *
     * @return \DateTime 
     */
    public function getQuando()
    {
        return $this->quando;
    }

    /**
     * Set facebookId
     *
     * @param integer $facebookId
     * @return Clientillpp
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return integer 
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set googlePlusId
     *
     * @param string $googlePlusId
     * @return Clientillpp
     */
    public function setGooglePlusId($googlePlusId)
    {
        $this->googlePlusId = $googlePlusId;

        return $this;
    }

    /**
     * Get googlePlusId
     *
     * @return string 
     */
    public function getGooglePlusId()
    {
        return $this->googlePlusId;
    }

    /**
     * Set twitterId
     *
     * @param integer $twitterId
     * @return Clientillpp
     */
    public function setTwitterId($twitterId)
    {
        $this->twitterId = $twitterId;

        return $this;
    }

    /**
     * Get twitterId
     *
     * @return integer 
     */
    public function getTwitterId()
    {
        return $this->twitterId;
    }

    /**
     * Set linkedinId
     *
     * @param string $linkedinId
     * @return Clientillpp
     */
    public function setLinkedinId($linkedinId)
    {
        $this->linkedinId = $linkedinId;

        return $this;
    }

    /**
     * Get linkedinId
     *
     * @return string 
     */
    public function getLinkedinId()
    {
        return $this->linkedinId;
    }

    /**
     * Set socialAvatar
     *
     * @param string $socialAvatar
     * @return Clientillpp
     */
    public function setSocialAvatar($socialAvatar)
    {
        $this->socialAvatar = $socialAvatar;

        return $this;
    }

    /**
     * Get socialAvatar
     *
     * @return string 
     */
    public function getSocialAvatar()
    {
        return $this->socialAvatar;
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
