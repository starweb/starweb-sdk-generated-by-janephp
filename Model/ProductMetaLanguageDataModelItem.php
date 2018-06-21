<?php

namespace Starweb\Sdk\Model;

class ProductMetaLanguageDataModelItem
{
    /**
     * 
     *
     * @var ProductMetaLanguageDataModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductMetaLanguageDataModel
     */
    public function getData() : ?ProductMetaLanguageDataModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductMetaLanguageDataModel $data
     *
     * @return self
     */
    public function setData(?ProductMetaLanguageDataModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}