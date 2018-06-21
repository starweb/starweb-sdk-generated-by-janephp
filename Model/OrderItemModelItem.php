<?php

namespace Starweb\Sdk\Model;

class OrderItemModelItem
{
    /**
     * 
     *
     * @var OrderItemModel
     */
    protected $data;
    /**
     * 
     *
     * @return OrderItemModel
     */
    public function getData() : ?OrderItemModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderItemModel $data
     *
     * @return self
     */
    public function setData(?OrderItemModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}