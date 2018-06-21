<?php

namespace Starweb\Sdk\Model;

class CustomerTagModelItem
{
    /**
     * 
     *
     * @var CustomerTagModel
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerTagModel
     */
    public function getData() : ?CustomerTagModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerTagModel $data
     *
     * @return self
     */
    public function setData(?CustomerTagModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}