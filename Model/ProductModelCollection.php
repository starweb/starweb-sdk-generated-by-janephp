<?php

namespace Starweb\Sdk\Model;

class ProductModelCollection
{
    /**
     * A collection of products
     *
     * @var ProductModel[]
     */
    protected $data;
    /**
     * 
     *
     * @var ProductModelCollectionMeta
     */
    protected $meta;
    /**
     * A collection of products
     *
     * @return ProductModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of products
     *
     * @param ProductModel[] $data
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
     * @return ProductModelCollectionMeta
     */
    public function getMeta() : ?ProductModelCollectionMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param ProductModelCollectionMeta $meta
     *
     * @return self
     */
    public function setMeta(?ProductModelCollectionMeta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}