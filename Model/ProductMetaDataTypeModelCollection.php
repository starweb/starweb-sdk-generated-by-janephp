<?php

namespace Starweb\Sdk\Model;

class ProductMetaDataTypeModelCollection
{
    /**
     * A collection of product meta data types
     *
     * @var ProductMetaDataTypeModel[]
     */
    protected $data;
    /**
     * A collection of product meta data types
     *
     * @return ProductMetaDataTypeModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product meta data types
     *
     * @param ProductMetaDataTypeModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}