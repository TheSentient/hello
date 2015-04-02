<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientiNetwork
 */
class ClientiNetwork
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cognome;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $professione;

    /**
     * @var string
     */
    private $societa;

    /**
     * @var string
     */
    private $codiceFiscale;

    /**
     * @var string
     */
    private $partitaIva;

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
    private $provincia;

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
    private $fax;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $trattDati;

    /**
     * @var integer
     */
    private $tipoSpedizione;

    /**
     * @var integer
     */
    private $tipoPagamento;

    /**
     * @var string
     */
    private $tipoAccount;

    /**
     * @var string
     */
    private $cognomeSped;

    /**
     * @var string
     */
    private $nomeSped;

    /**
     * @var string
     */
    private $indirizzoSped;

    /**
     * @var string
     */
    private $cittaSped;

    /**
     * @var string
     */
    private $capSped;

    /**
     * @var string
     */
    private $provSped;

    /**
     * @var string
     */
    private $llppCode1;

    /**
     * @var string
     */
    private $llppCode2;

    /**
     * @var string
     */
    private $attivo;


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
     * Set cognome
     *
     * @param string $cognome
     * @return ClientiNetwork
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
     * Set nome
     *
     * @param string $nome
     * @return ClientiNetwork
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
     * Set username
     *
     * @param string $username
     * @return ClientiNetwork
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
     * @return ClientiNetwork
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
     * Set professione
     *
     * @param string $professione
     * @return ClientiNetwork
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
     * @return ClientiNetwork
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
     * Set codiceFiscale
     *
     * @param string $codiceFiscale
     * @return ClientiNetwork
     */
    public function setCodiceFiscale($codiceFiscale)
    {
        $this->codiceFiscale = $codiceFiscale;

        return $this;
    }

    /**
     * Get codiceFiscale
     *
     * @return string 
     */
    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
    }

    /**
     * Set partitaIva
     *
     * @param string $partitaIva
     * @return ClientiNetwork
     */
    public function setPartitaIva($partitaIva)
    {
        $this->partitaIva = $partitaIva;

        return $this;
    }

    /**
     * Get partitaIva
     *
     * @return string 
     */
    public function getPartitaIva()
    {
        return $this->partitaIva;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return ClientiNetwork
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
     * @return ClientiNetwork
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
     * @return ClientiNetwork
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
     * Set provincia
     *
     * @param string $provincia
     * @return ClientiNetwork
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
     * Set regione
     *
     * @param string $regione
     * @return ClientiNetwork
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
     * @return ClientiNetwork
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
     * Set fax
     *
     * @param string $fax
     * @return ClientiNetwork
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
     * Set email
     *
     * @param string $email
     * @return ClientiNetwork
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
     * Set trattDati
     *
     * @param string $trattDati
     * @return ClientiNetwork
     */
    public function setTrattDati($trattDati)
    {
        $this->trattDati = $trattDati;

        return $this;
    }

    /**
     * Get trattDati
     *
     * @return string 
     */
    public function getTrattDati()
    {
        return $this->trattDati;
    }

    /**
     * Set tipoSpedizione
     *
     * @param integer $tipoSpedizione
     * @return ClientiNetwork
     */
    public function setTipoSpedizione($tipoSpedizione)
    {
        $this->tipoSpedizione = $tipoSpedizione;

        return $this;
    }

    /**
     * Get tipoSpedizione
     *
     * @return integer 
     */
    public function getTipoSpedizione()
    {
        return $this->tipoSpedizione;
    }

    /**
     * Set tipoPagamento
     *
     * @param integer $tipoPagamento
     * @return ClientiNetwork
     */
    public function setTipoPagamento($tipoPagamento)
    {
        $this->tipoPagamento = $tipoPagamento;

        return $this;
    }

    /**
     * Get tipoPagamento
     *
     * @return integer 
     */
    public function getTipoPagamento()
    {
        return $this->tipoPagamento;
    }

    /**
     * Set tipoAccount
     *
     * @param string $tipoAccount
     * @return ClientiNetwork
     */
    public function setTipoAccount($tipoAccount)
    {
        $this->tipoAccount = $tipoAccount;

        return $this;
    }

    /**
     * Get tipoAccount
     *
     * @return string 
     */
    public function getTipoAccount()
    {
        return $this->tipoAccount;
    }

    /**
     * Set cognomeSped
     *
     * @param string $cognomeSped
     * @return ClientiNetwork
     */
    public function setCognomeSped($cognomeSped)
    {
        $this->cognomeSped = $cognomeSped;

        return $this;
    }

    /**
     * Get cognomeSped
     *
     * @return string 
     */
    public function getCognomeSped()
    {
        return $this->cognomeSped;
    }

    /**
     * Set nomeSped
     *
     * @param string $nomeSped
     * @return ClientiNetwork
     */
    public function setNomeSped($nomeSped)
    {
        $this->nomeSped = $nomeSped;

        return $this;
    }

    /**
     * Get nomeSped
     *
     * @return string 
     */
    public function getNomeSped()
    {
        return $this->nomeSped;
    }

    /**
     * Set indirizzoSped
     *
     * @param string $indirizzoSped
     * @return ClientiNetwork
     */
    public function setIndirizzoSped($indirizzoSped)
    {
        $this->indirizzoSped = $indirizzoSped;

        return $this;
    }

    /**
     * Get indirizzoSped
     *
     * @return string 
     */
    public function getIndirizzoSped()
    {
        return $this->indirizzoSped;
    }

    /**
     * Set cittaSped
     *
     * @param string $cittaSped
     * @return ClientiNetwork
     */
    public function setCittaSped($cittaSped)
    {
        $this->cittaSped = $cittaSped;

        return $this;
    }

    /**
     * Get cittaSped
     *
     * @return string 
     */
    public function getCittaSped()
    {
        return $this->cittaSped;
    }

    /**
     * Set capSped
     *
     * @param string $capSped
     * @return ClientiNetwork
     */
    public function setCapSped($capSped)
    {
        $this->capSped = $capSped;

        return $this;
    }

    /**
     * Get capSped
     *
     * @return string 
     */
    public function getCapSped()
    {
        return $this->capSped;
    }

    /**
     * Set provSped
     *
     * @param string $provSped
     * @return ClientiNetwork
     */
    public function setProvSped($provSped)
    {
        $this->provSped = $provSped;

        return $this;
    }

    /**
     * Get provSped
     *
     * @return string 
     */
    public function getProvSped()
    {
        return $this->provSped;
    }

    /**
     * Set llppCode1
     *
     * @param string $llppCode1
     * @return ClientiNetwork
     */
    public function setLlppCode1($llppCode1)
    {
        $this->llppCode1 = $llppCode1;

        return $this;
    }

    /**
     * Get llppCode1
     *
     * @return string 
     */
    public function getLlppCode1()
    {
        return $this->llppCode1;
    }

    /**
     * Set llppCode2
     *
     * @param string $llppCode2
     * @return ClientiNetwork
     */
    public function setLlppCode2($llppCode2)
    {
        $this->llppCode2 = $llppCode2;

        return $this;
    }

    /**
     * Get llppCode2
     *
     * @return string 
     */
    public function getLlppCode2()
    {
        return $this->llppCode2;
    }

    /**
     * Set attivo
     *
     * @param string $attivo
     * @return ClientiNetwork
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
}
