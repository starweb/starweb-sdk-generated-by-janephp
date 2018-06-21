<?php

namespace Starweb\Sdk\Model;

class OrderExternalServiceModelCollection
{
    /**
     * A list of order external services
     *
     * @var OrderExternalServiceModel[]
     */
    protected $data;
    /**
     * A list of order external services
     *
     * @return OrderExternalServiceModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of order external services
     *
     * @param OrderExternalServiceModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}