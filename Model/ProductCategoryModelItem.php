<?php

namespace Starweb\Sdk\Model;

class ProductCategoryModelItem
{
    /**
     * 
     *
     * @var ProductCategoryModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductCategoryModel
     */
    public function getData() : ?ProductCategoryModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductCategoryModel $data
     *
     * @return self
     */
    public function setData(?ProductCategoryModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}