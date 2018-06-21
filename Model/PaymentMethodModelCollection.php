<?php

namespace Starweb\Sdk\Model;

class PaymentMethodModelCollection
{
    /**
     * A collection of payment methods
     *
     * @var PaymentMethodModel[]
     */
    protected $data;
    /**
     * A collection of payment methods
     *
     * @return PaymentMethodModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of payment methods
     *
     * @param PaymentMethodModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}