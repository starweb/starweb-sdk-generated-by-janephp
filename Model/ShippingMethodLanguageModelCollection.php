<?php

namespace Starweb\Sdk\Model;

class ShippingMethodLanguageModelCollection
{
    /**
     * A collection of shipping method languages
     *
     * @var ShippingMethodLanguageModel[]
     */
    protected $data;
    /**
     * A collection of shipping method languages
     *
     * @return ShippingMethodLanguageModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of shipping method languages
     *
     * @param ShippingMethodLanguageModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}