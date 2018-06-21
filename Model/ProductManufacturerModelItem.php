<?php

namespace Starweb\Sdk\Model;

class ProductManufacturerModelItem
{
    /**
     * 
     *
     * @var ProductManufacturerModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductManufacturerModel
     */
    public function getData() : ?ProductManufacturerModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductManufacturerModel $data
     *
     * @return self
     */
    public function setData(?ProductManufacturerModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}