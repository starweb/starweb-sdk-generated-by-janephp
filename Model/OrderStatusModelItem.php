<?php

namespace Starweb\Sdk\Model;

class OrderStatusModelItem
{
    /**
     * 
     *
     * @var OrderStatusModel
     */
    protected $data;
    /**
     * 
     *
     * @return OrderStatusModel
     */
    public function getData() : ?OrderStatusModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderStatusModel $data
     *
     * @return self
     */
    public function setData(?OrderStatusModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}