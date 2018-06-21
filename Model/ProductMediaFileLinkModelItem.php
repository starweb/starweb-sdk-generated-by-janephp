<?php

namespace Starweb\Sdk\Model;

class ProductMediaFileLinkModelItem
{
    /**
     * 
     *
     * @var ProductMediaFileLinkModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductMediaFileLinkModel
     */
    public function getData() : ?ProductMediaFileLinkModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductMediaFileLinkModel $data
     *
     * @return self
     */
    public function setData(?ProductMediaFileLinkModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}