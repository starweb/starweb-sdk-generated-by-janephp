<?php

namespace Starweb\Sdk\Model;

class ProductUnitModelItem
{
    /**
     * 
     *
     * @var ProductUnitModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductUnitModel
     */
    public function getData() : ?ProductUnitModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductUnitModel $data
     *
     * @return self
     */
    public function setData(?ProductUnitModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}