<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentivotiutenti
 */
class Commentivotiutenti
{
    /**
     * @var integer
     */
    private $commentoId;

    /**
     * @var integer
     */
    private $userId;


    /**
     * Get commentoId
     *
     * @return integer 
     */
    public function getCommentoId()
    {
        return $this->commentoId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Commentivotiutenti
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
