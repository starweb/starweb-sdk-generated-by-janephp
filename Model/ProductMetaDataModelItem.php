<?php

namespace Starweb\Sdk\Model;

class ProductMetaDataModelItem
{
    /**
     * 
     *
     * @var ProductMetaDataModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductMetaDataModel
     */
    public function getData() : ?ProductMetaDataModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductMetaDataModel $data
     *
     * @return self
     */
    public function setData(?ProductMetaDataModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}