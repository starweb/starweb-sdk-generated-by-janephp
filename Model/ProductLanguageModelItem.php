<?php

namespace Starweb\Sdk\Model;

class ProductLanguageModelItem
{
    /**
     * 
     *
     * @var ProductLanguageModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductLanguageModel
     */
    public function getData() : ?ProductLanguageModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductLanguageModel $data
     *
     * @return self
     */
    public function setData(?ProductLanguageModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}