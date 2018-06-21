<?php

namespace Starweb\Sdk\Model;

class ProductVariantAttributeModelItem
{
    /**
     * 
     *
     * @var ProductVariantAttributeModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantAttributeModel
     */
    public function getData() : ?ProductVariantAttributeModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantAttributeModel $data
     *
     * @return self
     */
    public function setData(?ProductVariantAttributeModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}