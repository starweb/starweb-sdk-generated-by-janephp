<?php

namespace Starweb\Sdk\Model;

class OrderExternalServiceModel
{
    /**
     * The external id
     *
     * @var string
     */
    protected $externalIdValue;
    /**
     * Some external services cannot be updated and they have readOnly set to true
     *
     * @var bool
     */
    protected $readOnly;
    /**
     * The service name that this external id is linked to
     *
     * @var string
     */
    protected $serviceName;
    /**
     * The external id
     *
     * @return string
     */
    public function getExternalIdValue() : ?string
    {
        return $this->externalIdValue;
    }
    /**
     * The external id
     *
     * @param string $externalIdValue
     *
     * @return self
     */
    public function setExternalIdValue(?string $externalIdValue) : self
    {
        $this->externalIdValue = $externalIdValue;
        return $this;
    }
    /**
     * Some external services cannot be updated and they have readOnly set to true
     *
     * @return bool
     */
    public function getReadOnly() : ?bool
    {
        return $this->readOnly;
    }
    /**
     * Some external services cannot be updated and they have readOnly set to true
     *
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly) : self
    {
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * The service name that this external id is linked to
     *
     * @return string
     */
    public function getServiceName() : ?string
    {
        return $this->serviceName;
    }
    /**
     * The service name that this external id is linked to
     *
     * @param string $serviceName
     *
     * @return self
     */
    public function setServiceName(?string $serviceName) : self
    {
        $this->serviceName = $serviceName;
        return $this;
    }
}