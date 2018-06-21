<?php

namespace Starweb\Sdk\Model;

class OrderStatusModel
{
    /**
     * Standard order statuses has an idCode as well. These are: created, picking, completed, canceled
     *
     * @var string
     */
    protected $idCode;
    /**
     * 
     *
     * @var OrderStatusLanguageModel[]
     */
    protected $languages;
    /**
     * Should an order status update email be sent out when an order gets this status
     *
     * @var bool
     */
    protected $sendEmail;
    /**
     * The id of the order status
     *
     * @var int
     */
    protected $statusId;
    /**
     * Standard order statuses has an idCode as well. These are: created, picking, completed, canceled
     *
     * @return string
     */
    public function getIdCode() : ?string
    {
        return $this->idCode;
    }
    /**
     * Standard order statuses has an idCode as well. These are: created, picking, completed, canceled
     *
     * @param string $idCode
     *
     * @return self
     */
    public function setIdCode(?string $idCode) : self
    {
        $this->idCode = $idCode;
        return $this;
    }
    /**
     * 
     *
     * @return OrderStatusLanguageModel[]
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param OrderStatusLanguageModel[] $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     * Should an order status update email be sent out when an order gets this status
     *
     * @return bool
     */
    public function getSendEmail() : ?bool
    {
        return $this->sendEmail;
    }
    /**
     * Should an order status update email be sent out when an order gets this status
     *
     * @param bool $sendEmail
     *
     * @return self
     */
    public function setSendEmail(?bool $sendEmail) : self
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }
    /**
     * The id of the order status
     *
     * @return int
     */
    public function getStatusId() : ?int
    {
        return $this->statusId;
    }
    /**
     * The id of the order status
     *
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId(?int $statusId) : self
    {
        $this->statusId = $statusId;
        return $this;
    }
}