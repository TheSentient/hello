<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivioNewsletter
 */
class ArchivioNewsletter
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $azienda;

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var integer
     */
    private $numero;

    /**
     * @var integer
     */
    private $anno;

    /**
     * @var \DateTime
     */
    private $data;

    /**
     * @var string
     */
    private $imagine;

    /**
     * @var string
     */
    private $file;

    /**
     * @var integer
     */
    private $idazienda;

    /**
     * @var integer
     */
    private $emailinviate;

    /**
     * @var string
     */
    private $statisticheattive;

    /**
     * @var string
     */
    private $overviewlinkattivo;


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
     * Set tipo
     *
     * @param string $tipo
     * @return ArchivioNewsletter
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set azienda
     *
     * @param string $azienda
     * @return ArchivioNewsletter
     */
    public function setAzienda($azienda)
    {
        $this->azienda = $azienda;

        return $this;
    }

    /**
     * Get azienda
     *
     * @return string 
     */
    public function getAzienda()
    {
        return $this->azienda;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     * @return ArchivioNewsletter
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string 
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return ArchivioNewsletter
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set anno
     *
     * @param integer $anno
     * @return ArchivioNewsletter
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;

        return $this;
    }

    /**
     * Get anno
     *
     * @return integer 
     */
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return ArchivioNewsletter
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set imagine
     *
     * @param string $imagine
     * @return ArchivioNewsletter
     */
    public function setImagine($imagine)
    {
        $this->imagine = $imagine;

        return $this;
    }

    /**
     * Get imagine
     *
     * @return string 
     */
    public function getImagine()
    {
        return $this->imagine;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return ArchivioNewsletter
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set idazienda
     *
     * @param integer $idazienda
     * @return ArchivioNewsletter
     */
    public function setIdazienda($idazienda)
    {
        $this->idazienda = $idazienda;

        return $this;
    }

    /**
     * Get idazienda
     *
     * @return integer 
     */
    public function getIdazienda()
    {
        return $this->idazienda;
    }

    /**
     * Set emailinviate
     *
     * @param integer $emailinviate
     * @return ArchivioNewsletter
     */
    public function setEmailinviate($emailinviate)
    {
        $this->emailinviate = $emailinviate;

        return $this;
    }

    /**
     * Get emailinviate
     *
     * @return integer 
     */
    public function getEmailinviate()
    {
        return $this->emailinviate;
    }

    /**
     * Set statisticheattive
     *
     * @param string $statisticheattive
     * @return ArchivioNewsletter
     */
    public function setStatisticheattive($statisticheattive)
    {
        $this->statisticheattive = $statisticheattive;

        return $this;
    }

    /**
     * Get statisticheattive
     *
     * @return string 
     */
    public function getStatisticheattive()
    {
        return $this->statisticheattive;
    }

    /**
     * Set overviewlinkattivo
     *
     * @param string $overviewlinkattivo
     * @return ArchivioNewsletter
     */
    public function setOverviewlinkattivo($overviewlinkattivo)
    {
        $this->overviewlinkattivo = $overviewlinkattivo;

        return $this;
    }

    /**
     * Get overviewlinkattivo
     *
     * @return string 
     */
    public function getOverviewlinkattivo()
    {
        return $this->overviewlinkattivo;
    }
}
