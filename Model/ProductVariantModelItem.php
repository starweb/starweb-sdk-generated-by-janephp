<?php

namespace Starweb\Sdk\Model;

class ProductVariantModelItem
{
    /**
     * 
     *
     * @var ProductVariantModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantModel
     */
    public function getData() : ?ProductVariantModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantModel $data
     *
     * @return self
     */
    public function setData(?ProductVariantModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}