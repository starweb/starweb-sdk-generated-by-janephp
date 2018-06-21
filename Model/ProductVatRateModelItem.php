<?php

namespace Starweb\Sdk\Model;

class ProductVatRateModelItem
{
    /**
     * 
     *
     * @var ProductVatRateModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVatRateModel
     */
    public function getData() : ?ProductVatRateModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVatRateModel $data
     *
     * @return self
     */
    public function setData(?ProductVatRateModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}