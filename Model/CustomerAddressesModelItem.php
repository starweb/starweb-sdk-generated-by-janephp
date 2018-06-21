<?php

namespace Starweb\Sdk\Model;

class CustomerAddressesModelItem
{
    /**
     * 
     *
     * @var AddressModel
     */
    protected $data;
    /**
     * 
     *
     * @return AddressModel
     */
    public function getData() : ?AddressModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param AddressModel $data
     *
     * @return self
     */
    public function setData(?AddressModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}