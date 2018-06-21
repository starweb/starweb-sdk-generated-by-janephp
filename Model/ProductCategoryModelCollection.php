<?php

namespace Starweb\Sdk\Model;

class ProductCategoryModelCollection
{
    /**
     * A list of product categories
     *
     * @var ProductCategoryModel[]
     */
    protected $data;
    /**
     * 
     *
     * @var ProductCategoryModelCollectionMeta
     */
    protected $meta;
    /**
     * A list of product categories
     *
     * @return ProductCategoryModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of product categories
     *
     * @param ProductCategoryModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return ProductCategoryModelCollectionMeta
     */
    public function getMeta() : ?ProductCategoryModelCollectionMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param ProductCategoryModelCollectionMeta $meta
     *
     * @return self
     */
    public function setMeta(?ProductCategoryModelCollectionMeta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}