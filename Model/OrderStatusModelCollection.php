<?php

namespace Starweb\Sdk\Model;

class OrderStatusModelCollection
{
    /**
     * A list of order statuses
     *
     * @var OrderStatusModel[]
     */
    protected $data;
    /**
     * A list of order statuses
     *
     * @return OrderStatusModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of order statuses
     *
     * @param OrderStatusModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}