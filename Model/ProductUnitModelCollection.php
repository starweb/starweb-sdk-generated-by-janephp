<?php

namespace Starweb\Sdk\Model;

class ProductUnitModelCollection
{
    /**
     * A collection of product units
     *
     * @var ProductUnitModel[]
     */
    protected $data;
    /**
     * A collection of product units
     *
     * @return ProductUnitModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product units
     *
     * @param ProductUnitModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}