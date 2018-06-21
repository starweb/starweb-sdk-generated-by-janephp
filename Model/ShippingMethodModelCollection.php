<?php

namespace Starweb\Sdk\Model;

class ShippingMethodModelCollection
{
    /**
     * A collection of shipping methods
     *
     * @var ShippingMethodModel[]
     */
    protected $data;
    /**
     * A collection of shipping methods
     *
     * @return ShippingMethodModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of shipping methods
     *
     * @param ShippingMethodModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}