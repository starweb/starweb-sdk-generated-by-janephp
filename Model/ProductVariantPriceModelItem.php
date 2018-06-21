<?php

namespace Starweb\Sdk\Model;

class ProductVariantPriceModelItem
{
    /**
     * 
     *
     * @var ProductVariantPriceModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantPriceModel
     */
    public function getData() : ?ProductVariantPriceModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantPriceModel $data
     *
     * @return self
     */
    public function setData(?ProductVariantPriceModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}