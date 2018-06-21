<?php

namespace Starweb\Sdk\Model;

class ProductCategoryLinkModelItem
{
    /**
     * 
     *
     * @var ProductCategoryLinkModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductCategoryLinkModel
     */
    public function getData() : ?ProductCategoryLinkModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductCategoryLinkModel $data
     *
     * @return self
     */
    public function setData(?ProductCategoryLinkModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}