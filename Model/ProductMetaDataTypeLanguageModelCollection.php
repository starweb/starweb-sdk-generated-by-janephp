<?php

namespace Starweb\Sdk\Model;

class ProductMetaDataTypeLanguageModelCollection
{
    /**
     * A collection of product meta data type languages
     *
     * @var ProductMetaDataTypeLanguageModel[]
     */
    protected $data;
    /**
     * A collection of product meta data type languages
     *
     * @return ProductMetaDataTypeLanguageModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product meta data type languages
     *
     * @param ProductMetaDataTypeLanguageModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}