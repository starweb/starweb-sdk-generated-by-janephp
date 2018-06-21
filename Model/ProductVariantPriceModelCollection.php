<?php

namespace Starweb\Sdk\Model;

class ProductVariantPriceModelCollection
{
    /**
     * A collection of product variants
     *
     * @var ProductVariantPriceModel[]
     */
    protected $data;
    /**
     * A collection of product variants
     *
     * @return ProductVariantPriceModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product variants
     *
     * @param ProductVariantPriceModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}