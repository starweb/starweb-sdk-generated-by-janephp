<?php

namespace Starweb\Sdk\Model;

class ProductVatRateModelCollection
{
    /**
     * A collection of product vat rates
     *
     * @var ProductVatRateModel[]
     */
    protected $data;
    /**
     * A collection of product vat rates
     *
     * @return ProductVatRateModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product vat rates
     *
     * @param ProductVatRateModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}