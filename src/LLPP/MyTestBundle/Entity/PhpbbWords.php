<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbWords
 */
class PhpbbWords
{
    /**
     * @var integer
     */
    private $wordId;

    /**
     * @var string
     */
    private $word;

    /**
     * @var string
     */
    private $replacement;


    /**
     * Get wordId
     *
     * @return integer 
     */
    public function getWordId()
    {
        return $this->wordId;
    }

    /**
     * Set word
     *
     * @param string $word
     * @return PhpbbWords
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Set replacement
     *
     * @param string $replacement
     * @return PhpbbWords
     */
    public function setReplacement($replacement)
    {
        $this->replacement = $replacement;

        return $this;
    }

    /**
     * Get replacement
     *
     * @return string 
     */
    public function getReplacement()
    {
        return $this->replacement;
    }
}
