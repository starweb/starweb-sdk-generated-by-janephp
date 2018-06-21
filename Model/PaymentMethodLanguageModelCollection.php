<?php

namespace Starweb\Sdk\Model;

class PaymentMethodLanguageModelCollection
{
    /**
     * A collection of payment method languages
     *
     * @var PaymentMethodLanguageModel[]
     */
    protected $data;
    /**
     * A collection of payment method languages
     *
     * @return PaymentMethodLanguageModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of payment method languages
     *
     * @param PaymentMethodLanguageModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}