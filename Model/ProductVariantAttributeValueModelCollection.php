<?php

namespace Starweb\Sdk\Model;

class ProductVariantAttributeValueModelCollection
{
    /**
     * A collection of attribute values
     *
     * @var ProductVariantAttributeValueModel[]
     */
    protected $data;
    /**
     * A collection of attribute values
     *
     * @return ProductVariantAttributeValueModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of attribute values
     *
     * @param ProductVariantAttributeValueModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}