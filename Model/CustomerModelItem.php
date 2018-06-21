<?php

namespace Starweb\Sdk\Model;

class CustomerModelItem
{
    /**
     * 
     *
     * @var CustomerModel
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerModel
     */
    public function getData() : ?CustomerModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerModel $data
     *
     * @return self
     */
    public function setData(?CustomerModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}