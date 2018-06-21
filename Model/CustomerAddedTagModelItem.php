<?php

namespace Starweb\Sdk\Model;

class CustomerAddedTagModelItem
{
    /**
     * 
     *
     * @var CustomerAddedTagModel
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerAddedTagModel
     */
    public function getData() : ?CustomerAddedTagModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerAddedTagModel $data
     *
     * @return self
     */
    public function setData(?CustomerAddedTagModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}