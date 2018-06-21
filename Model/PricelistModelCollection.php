<?php

namespace Starweb\Sdk\Model;

class PricelistModelCollection
{
    /**
     * A collection of shipping methods
     *
     * @var PricelistModel[]
     */
    protected $data;
    /**
     * A collection of shipping methods
     *
     * @return PricelistModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of shipping methods
     *
     * @param PricelistModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}