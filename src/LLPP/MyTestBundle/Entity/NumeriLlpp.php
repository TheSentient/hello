<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NumeriLlpp
 */
class NumeriLlpp
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $anno;

    /**
     * @var string
     */
    private $numero;

    /**
     * @var string
     */
    private $cartella;

    /**
     * @var string
     */
    private $linkSommario;

    /**
     * @var string
     */
    private $linkNumero;

    /**
     * @var string
     */
    private $linkEpub;


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
     * Set anno
     *
     * @param integer $anno
     * @return NumeriLlpp
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
     * Set numero
     *
     * @param string $numero
     * @return NumeriLlpp
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set cartella
     *
     * @param string $cartella
     * @return NumeriLlpp
     */
    public function setCartella($cartella)
    {
        $this->cartella = $cartella;

        return $this;
    }

    /**
     * Get cartella
     *
     * @return string 
     */
    public function getCartella()
    {
        return $this->cartella;
    }

    /**
     * Set linkSommario
     *
     * @param string $linkSommario
     * @return NumeriLlpp
     */
    public function setLinkSommario($linkSommario)
    {
        $this->linkSommario = $linkSommario;

        return $this;
    }

    /**
     * Get linkSommario
     *
     * @return string 
     */
    public function getLinkSommario()
    {
        return $this->linkSommario;
    }

    /**
     * Set linkNumero
     *
     * @param string $linkNumero
     * @return NumeriLlpp
     */
    public function setLinkNumero($linkNumero)
    {
        $this->linkNumero = $linkNumero;

        return $this;
    }

    /**
     * Get linkNumero
     *
     * @return string 
     */
    public function getLinkNumero()
    {
        return $this->linkNumero;
    }

    /**
     * Set linkEpub
     *
     * @param string $linkEpub
     * @return NumeriLlpp
     */
    public function setLinkEpub($linkEpub)
    {
        $this->linkEpub = $linkEpub;

        return $this;
    }

    /**
     * Get linkEpub
     *
     * @return string 
     */
    public function getLinkEpub()
    {
        return $this->linkEpub;
    }
}
