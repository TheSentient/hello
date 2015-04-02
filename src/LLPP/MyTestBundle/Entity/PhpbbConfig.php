<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbConfig
 */
class PhpbbConfig
{
    /**
     * @var string
     */
    private $configName;

    /**
     * @var string
     */
    private $configValue;


    /**
     * Get configName
     *
     * @return string 
     */
    public function getConfigName()
    {
        return $this->configName;
    }

    /**
     * Set configValue
     *
     * @param string $configValue
     * @return PhpbbConfig
     */
    public function setConfigValue($configValue)
    {
        $this->configValue = $configValue;

        return $this;
    }

    /**
     * Get configValue
     *
     * @return string 
     */
    public function getConfigValue()
    {
        return $this->configValue;
    }
}
