<?php

namespace Starweb\Sdk\Model;

class CurrencyModelItem
{
    /**
     * 
     *
     * @var CurrencyModel
     */
    protected $data;
    /**
     * 
     *
     * @return CurrencyModel
     */
    public function getData() : ?CurrencyModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CurrencyModel $data
     *
     * @return self
     */
    public function setData(?CurrencyModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}