<?php

namespace Starweb\Sdk\Model;

class OrderModelItem
{
    /**
     * 
     *
     * @var OrderModel
     */
    protected $data;
    /**
     * 
     *
     * @return OrderModel
     */
    public function getData() : ?OrderModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderModel $data
     *
     * @return self
     */
    public function setData(?OrderModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}