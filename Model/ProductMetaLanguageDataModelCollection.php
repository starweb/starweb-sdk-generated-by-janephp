<?php

namespace Starweb\Sdk\Model;

class ProductMetaLanguageDataModelCollection
{
    /**
     * A collection of product meta data
     *
     * @var ProductMetaLanguageDataModel[]
     */
    protected $data;
    /**
     * A collection of product meta data
     *
     * @return ProductMetaLanguageDataModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product meta data
     *
     * @param ProductMetaLanguageDataModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}