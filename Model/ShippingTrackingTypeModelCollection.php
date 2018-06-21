<?php

namespace Starweb\Sdk\Model;

class ShippingTrackingTypeModelCollection
{
    /**
     * A list of shipping tracking types
     *
     * @var ShippingTrackingTypeModel[]
     */
    protected $data;
    /**
     * A list of shipping tracking types
     *
     * @return ShippingTrackingTypeModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of shipping tracking types
     *
     * @param ShippingTrackingTypeModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}