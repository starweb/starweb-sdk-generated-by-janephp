<?php

namespace Starweb\Sdk\Model;

class ProductVariantAttributeModelCollection
{
    /**
     * A collection of attribute values
     *
     * @var ProductVariantAttributeModel[]
     */
    protected $data;
    /**
     * A collection of attribute values
     *
     * @return ProductVariantAttributeModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of attribute values
     *
     * @param ProductVariantAttributeModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}