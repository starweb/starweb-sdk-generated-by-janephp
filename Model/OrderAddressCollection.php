<?php

namespace Starweb\Sdk\Model;

class OrderAddressCollection
{
    /**
     * 
     *
     * @var OrderAddressModel
     */
    protected $data;
    /**
     * 
     *
     * @return OrderAddressModel
     */
    public function getData() : ?OrderAddressModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderAddressModel $data
     *
     * @return self
     */
    public function setData(?OrderAddressModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}