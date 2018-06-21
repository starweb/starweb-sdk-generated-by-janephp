<?php

namespace Starweb\Sdk\Model;

class OrderModelCollection
{
    /**
     * A list of orders
     *
     * @var OrderModel[]
     */
    protected $data;
    /**
     * 
     *
     * @var OrderModelCollectionMeta
     */
    protected $meta;
    /**
     * A list of orders
     *
     * @return OrderModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of orders
     *
     * @param OrderModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return OrderModelCollectionMeta
     */
    public function getMeta() : ?OrderModelCollectionMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param OrderModelCollectionMeta $meta
     *
     * @return self
     */
    public function setMeta(?OrderModelCollectionMeta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}