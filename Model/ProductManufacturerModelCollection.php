<?php

namespace Starweb\Sdk\Model;

class ProductManufacturerModelCollection
{
    /**
     * A collection of product manufacturers
     *
     * @var ProductManufacturerModel[]
     */
    protected $data;
    /**
     * A collection of product manufacturers
     *
     * @return ProductManufacturerModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product manufacturers
     *
     * @param ProductManufacturerModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}