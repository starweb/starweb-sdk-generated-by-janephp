<?php

namespace Starweb\Sdk\Model;

class ShippingMethodModelItem
{
    /**
     * 
     *
     * @var ShippingMethodModel
     */
    protected $data;
    /**
     * 
     *
     * @return ShippingMethodModel
     */
    public function getData() : ?ShippingMethodModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ShippingMethodModel $data
     *
     * @return self
     */
    public function setData(?ShippingMethodModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}