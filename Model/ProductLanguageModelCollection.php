<?php

namespace Starweb\Sdk\Model;

class ProductLanguageModelCollection
{
    /**
     * A collection of product languages
     *
     * @var ProductLanguageModel[]
     */
    protected $data;
    /**
     * A collection of product languages
     *
     * @return ProductLanguageModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product languages
     *
     * @param ProductLanguageModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}