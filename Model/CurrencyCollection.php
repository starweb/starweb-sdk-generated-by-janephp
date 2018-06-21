<?php

namespace Starweb\Sdk\Model;

class CurrencyCollection
{
    /**
     * A collection of currencies
     *
     * @var CurrencyModel[]
     */
    protected $data;
    /**
     * A collection of currencies
     *
     * @return CurrencyModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of currencies
     *
     * @param CurrencyModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}