<?php

namespace Starweb\Sdk\Model;

class ProductVariantAttributeValueModel
{
    /**
     * 
     *
     * @var ProductVariantAttributeModel
     */
    protected $attribute;
    /**
     * The id for this attribute value
     *
     * @var int
     */
    protected $attributeValueId;
    /**
     * A collection of attribute value languages
     *
     * @var ProductVariantAttributeValueLanguageModel[]
     */
    protected $languages;
    /**
     * The suggested suffix for new Variants using this attribute value
     *
     * @var string
     */
    protected $skuSuffix;
    /**
     * The sort order for this attribute value
     *
     * @var int
     */
    protected $sortIndex;
    /**
     * 
     *
     * @return ProductVariantAttributeModel
     */
    public function getAttribute() : ?ProductVariantAttributeModel
    {
        return $this->attribute;
    }
    /**
     * 
     *
     * @param ProductVariantAttributeModel $attribute
     *
     * @return self
     */
    public function setAttribute(?ProductVariantAttributeModel $attribute) : self
    {
        $this->attribute = $attribute;
        return $this;
    }
    /**
     * The id for this attribute value
     *
     * @return int
     */
    public function getAttributeValueId() : ?int
    {
        return $this->attributeValueId;
    }
    /**
     * The id for this attribute value
     *
     * @param int $attributeValueId
     *
     * @return self
     */
    public function setAttributeValueId(?int $attributeValueId) : self
    {
        $this->attributeValueId = $attributeValueId;
        return $this;
    }
    /**
     * A collection of attribute value languages
     *
     * @return ProductVariantAttributeValueLanguageModel[]
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * A collection of attribute value languages
     *
     * @param ProductVariantAttributeValueLanguageModel[] $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     * The suggested suffix for new Variants using this attribute value
     *
     * @return string
     */
    public function getSkuSuffix() : ?string
    {
        return $this->skuSuffix;
    }
    /**
     * The suggested suffix for new Variants using this attribute value
     *
     * @param string $skuSuffix
     *
     * @return self
     */
    public function setSkuSuffix(?string $skuSuffix) : self
    {
        $this->skuSuffix = $skuSuffix;
        return $this;
    }
    /**
     * The sort order for this attribute value
     *
     * @return int
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * The sort order for this attribute value
     *
     * @param int $sortIndex
     *
     * @return self
     */
    public function setSortIndex(?int $sortIndex) : self
    {
        $this->sortIndex = $sortIndex;
        return $this;
    }
}