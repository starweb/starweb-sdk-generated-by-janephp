<?php

namespace Starweb\Sdk\Model;

class ProductMediaFileLinkModelCollection
{
    /**
     * A collection of product media file links
     *
     * @var ProductMediaFileLinkModel[]
     */
    protected $data;
    /**
     * A collection of product media file links
     *
     * @return ProductMediaFileLinkModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product media file links
     *
     * @param ProductMediaFileLinkModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}