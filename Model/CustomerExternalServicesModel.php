<?php

namespace Starweb\Sdk\Model;

class CustomerExternalServicesModel
{
    /**
     * The external service ID
     *
     * @var string
     */
    protected $externalIdValue;
    /**
     * The service name of the external service
     *
     * @var string
     */
    protected $serviceName;
    /**
     * The external service ID
     *
     * @return string
     */
    public function getExternalIdValue() : ?string
    {
        return $this->externalIdValue;
    }
    /**
     * The external service ID
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
     * The service name of the external service
     *
     * @return string
     */
    public function getServiceName() : ?string
    {
        return $this->serviceName;
    }
    /**
     * The service name of the external service
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