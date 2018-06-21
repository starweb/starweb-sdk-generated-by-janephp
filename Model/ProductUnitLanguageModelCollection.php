<?php

namespace Starweb\Sdk\Model;

class ProductUnitLanguageModelCollection
{
    /**
     * A collection of product unit languages
     *
     * @var ProductUnitLanguageModel[]
     */
    protected $data;
    /**
     * A collection of product unit languages
     *
     * @return ProductUnitLanguageModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product unit languages
     *
     * @param ProductUnitLanguageModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}