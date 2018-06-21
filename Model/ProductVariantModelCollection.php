<?php

namespace Starweb\Sdk\Model;

class ProductVariantModelCollection
{
    /**
     * A collection of product variants
     *
     * @var ProductVariantModel[]
     */
    protected $data;
    /**
     * A collection of product variants
     *
     * @return ProductVariantModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product variants
     *
     * @param ProductVariantModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}