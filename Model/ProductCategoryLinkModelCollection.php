<?php

namespace Starweb\Sdk\Model;

class ProductCategoryLinkModelCollection
{
    /**
     * A collection of product category links
     *
     * @var ProductCategoryLinkModel[]
     */
    protected $data;
    /**
     * A collection of product category links
     *
     * @return ProductCategoryLinkModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product category links
     *
     * @param ProductCategoryLinkModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}