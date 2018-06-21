<?php

namespace Starweb\Sdk\Model;

class OrderItemModelCollection
{
    /**
     * A list of order items
     *
     * @var OrderItemModel[]
     */
    protected $data;
    /**
     * A list of order items
     *
     * @return OrderItemModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of order items
     *
     * @param OrderItemModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}