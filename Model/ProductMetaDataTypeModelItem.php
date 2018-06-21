<?php

namespace Starweb\Sdk\Model;

class ProductMetaDataTypeModelItem
{
    /**
     * 
     *
     * @var ProductMetaDataTypeModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductMetaDataTypeModel
     */
    public function getData() : ?ProductMetaDataTypeModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductMetaDataTypeModel $data
     *
     * @return self
     */
    public function setData(?ProductMetaDataTypeModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}