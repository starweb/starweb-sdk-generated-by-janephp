<?php

namespace Starweb\Sdk\Model;

class CustomerExternalServicesModelCollection
{
    /**
     * A list of customer external services
     *
     * @var CustomerExternalServicesModel[]
     */
    protected $data;
    /**
     * A list of customer external services
     *
     * @return CustomerExternalServicesModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of customer external services
     *
     * @param CustomerExternalServicesModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}