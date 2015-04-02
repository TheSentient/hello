<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScadenzarioFiscaleReminder
 */
class ScadenzarioFiscaleReminder
{
    /**
     * @var integer
     */
    private $reminderId;

    /**
     * @var integer
     */
    private $utenteId;

    /**
     * @var integer
     */
    private $scadenzaId;

    /**
     * @var \DateTime
     */
    private $reminderDataScadenza;

    /**
     * @var integer
     */
    private $reminderData;

    /**
     * @var boolean
     */
    private $reminderSent;


    /**
     * Get reminderId
     *
     * @return integer 
     */
    public function getReminderId()
    {
        return $this->reminderId;
    }

    /**
     * Set utenteId
     *
     * @param integer $utenteId
     * @return ScadenzarioFiscaleReminder
     */
    public function setUtenteId($utenteId)
    {
        $this->utenteId = $utenteId;

        return $this;
    }

    /**
     * Get utenteId
     *
     * @return integer 
     */
    public function getUtenteId()
    {
        return $this->utenteId;
    }

    /**
     * Set scadenzaId
     *
     * @param integer $scadenzaId
     * @return ScadenzarioFiscaleReminder
     */
    public function setScadenzaId($scadenzaId)
    {
        $this->scadenzaId = $scadenzaId;

        return $this;
    }

    /**
     * Get scadenzaId
     *
     * @return integer 
     */
    public function getScadenzaId()
    {
        return $this->scadenzaId;
    }

    /**
     * Set reminderDataScadenza
     *
     * @param \DateTime $reminderDataScadenza
     * @return ScadenzarioFiscaleReminder
     */
    public function setReminderDataScadenza($reminderDataScadenza)
    {
        $this->reminderDataScadenza = $reminderDataScadenza;

        return $this;
    }

    /**
     * Get reminderDataScadenza
     *
     * @return \DateTime 
     */
    public function getReminderDataScadenza()
    {
        return $this->reminderDataScadenza;
    }

    /**
     * Set reminderData
     *
     * @param integer $reminderData
     * @return ScadenzarioFiscaleReminder
     */
    public function setReminderData($reminderData)
    {
        $this->reminderData = $reminderData;

        return $this;
    }

    /**
     * Get reminderData
     *
     * @return integer 
     */
    public function getReminderData()
    {
        return $this->reminderData;
    }

    /**
     * Set reminderSent
     *
     * @param boolean $reminderSent
     * @return ScadenzarioFiscaleReminder
     */
    public function setReminderSent($reminderSent)
    {
        $this->reminderSent = $reminderSent;

        return $this;
    }

    /**
     * Get reminderSent
     *
     * @return boolean 
     */
    public function getReminderSent()
    {
        return $this->reminderSent;
    }
}
