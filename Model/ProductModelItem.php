<?php

namespace Starweb\Sdk\Model;

class ProductModelItem
{
    /**
     * 
     *
     * @var ProductModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductModel
     */
    public function getData() : ?ProductModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductModel $data
     *
     * @return self
     */
    public function setData(?ProductModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}