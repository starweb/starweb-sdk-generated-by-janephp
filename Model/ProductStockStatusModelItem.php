<?php

namespace Starweb\Sdk\Model;

class ProductStockStatusModelItem
{
    /**
     * 
     *
     * @var ProductStockStatusModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductStockStatusModel
     */
    public function getData() : ?ProductStockStatusModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductStockStatusModel $data
     *
     * @return self
     */
    public function setData(?ProductStockStatusModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}