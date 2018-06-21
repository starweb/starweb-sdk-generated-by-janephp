<?php

namespace Starweb\Sdk\Model;

class ProductStockStatusModelCollection
{
    /**
     * A list of product stock statuses
     *
     * @var ProductStockStatusModel[]
     */
    protected $data;
    /**
     * A list of product stock statuses
     *
     * @return ProductStockStatusModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of product stock statuses
     *
     * @param ProductStockStatusModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}