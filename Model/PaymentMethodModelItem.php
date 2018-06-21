<?php

namespace Starweb\Sdk\Model;

class PaymentMethodModelItem
{
    /**
     * 
     *
     * @var PaymentMethodModel
     */
    protected $data;
    /**
     * 
     *
     * @return PaymentMethodModel
     */
    public function getData() : ?PaymentMethodModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PaymentMethodModel $data
     *
     * @return self
     */
    public function setData(?PaymentMethodModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}