<?php

namespace Starweb\Sdk\Model;

class ProductVariantAttributeModelLanguages
{
    /**
     * 
     *
     * @var ProductVariantAttributeLanguageModel[]
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantAttributeLanguageModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantAttributeLanguageModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}