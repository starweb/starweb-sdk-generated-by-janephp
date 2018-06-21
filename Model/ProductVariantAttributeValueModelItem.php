<?php

namespace Starweb\Sdk\Model;

class ProductVariantAttributeValueModelItem
{
    /**
     * 
     *
     * @var ProductVariantAttributeValueModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantAttributeValueModel
     */
    public function getData() : ?ProductVariantAttributeValueModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantAttributeValueModel $data
     *
     * @return self
     */
    public function setData(?ProductVariantAttributeValueModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}