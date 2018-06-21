<?php

namespace Starweb\Sdk\Model;

class ProductVariantAttributeModel
{
    /**
     * The id for this attribute
     *
     * @var int
     */
    protected $attributeId;
    /**
     * A collection of attribute languages
     *
     * @var ProductVariantAttributeModelLanguages
     */
    protected $languages;
    /**
     * The id for this attribute
     *
     * @return int
     */
    public function getAttributeId() : ?int
    {
        return $this->attributeId;
    }
    /**
     * The id for this attribute
     *
     * @param int $attributeId
     *
     * @return self
     */
    public function setAttributeId(?int $attributeId) : self
    {
        $this->attributeId = $attributeId;
        return $this;
    }
    /**
     * A collection of attribute languages
     *
     * @return ProductVariantAttributeModelLanguages
     */
    public function getLanguages() : ?ProductVariantAttributeModelLanguages
    {
        return $this->languages;
    }
    /**
     * A collection of attribute languages
     *
     * @param ProductVariantAttributeModelLanguages $languages
     *
     * @return self
     */
    public function setLanguages(?ProductVariantAttributeModelLanguages $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}