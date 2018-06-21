<?php

namespace Starweb\Sdk\Model;

class ProductModel
{
    /**
     * 
     *
     * @var ProductCategoryLinkModelCollection
     */
    protected $categories;
    /**
     * A timestamp of when the product was created. The time should be formatted using ISO-8601
     *
     * @var string
     */
    protected $createdAt;
    /**
     * The default vat rate for this product. Will fall back to shop default if null. To fetch country specific vat rates, please use include=vatRates or use the /products/x/vat-rates endpoint.
     *
     * @var string
     */
    protected $defaultVatRate;
    /**
     * Indicates if the products has several variants or not. The remaining variants can be fetched using the /products/{product id}/variants endpoint
     *
     * @var bool
     */
    protected $hasSeveralVariants;
    /**
     * Should this product be watchable for customers when it is back in stock?
     *
     * @var bool
     */
    protected $isBackInStockWatchable;
    /**
     * 
     *
     * @var ProductLanguageModelCollection
     */
    protected $languages;
    /**
     * The id of the manufacturer to use for this product. Fetch and handle available manufacturers using the /product-manufacturers endpoint
     *
     * @var int
     */
    protected $manufacturerId;
    /**
     * 
     *
     * @var ProductMediaFileLinkModelCollection
     */
    protected $mediaFiles;
    /**
     * 
     *
     * @var ProductMetaDataModelCollection
     */
    protected $metaData;
    /**
     * A timestamp of when the product was modified. The time should be formatted using ISO-8601
     *
     * @var string
     */
    protected $modifiedAt;
    /**
     * A valid URL to a web page with more information for this product
     *
     * @var string
     */
    protected $moreInfoUrl;
    /**
     * 
     *
     * @var int
     */
    protected $productId;
    /**
     * Sort index for this product in a list
     *
     * @var int
     */
    protected $sortIndex;
    /**
     * 
     *
     * @var ProductUnitModelItem
     */
    protected $unit;
    /**
     * The id of the unit to use for this product if not standard. Fetch and handle available units using the /product-units endpoint
     *
     * @var int
     */
    protected $unitId;
    /**
     * 
     *
     * @var ProductVariantModelCollection
     */
    protected $variants;
    /**
     * 
     *
     * @var ProductVatRateModelCollection
     */
    protected $vatRates;
    /**
     * The visibility of this product. Supported values are: hidden, visible, pricelists
     *
     * @var string
     */
    protected $visibility;
    /**
     * 
     *
     * @return ProductCategoryLinkModelCollection
     */
    public function getCategories() : ?ProductCategoryLinkModelCollection
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param ProductCategoryLinkModelCollection $categories
     *
     * @return self
     */
    public function setCategories(?ProductCategoryLinkModelCollection $categories) : self
    {
        $this->categories = $categories;
        return $this;
    }
    /**
     * A timestamp of when the product was created. The time should be formatted using ISO-8601
     *
     * @return string
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * A timestamp of when the product was created. The time should be formatted using ISO-8601
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The default vat rate for this product. Will fall back to shop default if null. To fetch country specific vat rates, please use include=vatRates or use the /products/x/vat-rates endpoint.
     *
     * @return string
     */
    public function getDefaultVatRate() : ?string
    {
        return $this->defaultVatRate;
    }
    /**
     * The default vat rate for this product. Will fall back to shop default if null. To fetch country specific vat rates, please use include=vatRates or use the /products/x/vat-rates endpoint.
     *
     * @param string $defaultVatRate
     *
     * @return self
     */
    public function setDefaultVatRate(?string $defaultVatRate) : self
    {
        $this->defaultVatRate = $defaultVatRate;
        return $this;
    }
    /**
     * Indicates if the products has several variants or not. The remaining variants can be fetched using the /products/{product id}/variants endpoint
     *
     * @return bool
     */
    public function getHasSeveralVariants() : ?bool
    {
        return $this->hasSeveralVariants;
    }
    /**
     * Indicates if the products has several variants or not. The remaining variants can be fetched using the /products/{product id}/variants endpoint
     *
     * @param bool $hasSeveralVariants
     *
     * @return self
     */
    public function setHasSeveralVariants(?bool $hasSeveralVariants) : self
    {
        $this->hasSeveralVariants = $hasSeveralVariants;
        return $this;
    }
    /**
     * Should this product be watchable for customers when it is back in stock?
     *
     * @return bool
     */
    public function getIsBackInStockWatchable() : ?bool
    {
        return $this->isBackInStockWatchable;
    }
    /**
     * Should this product be watchable for customers when it is back in stock?
     *
     * @param bool $isBackInStockWatchable
     *
     * @return self
     */
    public function setIsBackInStockWatchable(?bool $isBackInStockWatchable) : self
    {
        $this->isBackInStockWatchable = $isBackInStockWatchable;
        return $this;
    }
    /**
     * 
     *
     * @return ProductLanguageModelCollection
     */
    public function getLanguages() : ?ProductLanguageModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductLanguageModelCollection $languages
     *
     * @return self
     */
    public function setLanguages(?ProductLanguageModelCollection $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     * The id of the manufacturer to use for this product. Fetch and handle available manufacturers using the /product-manufacturers endpoint
     *
     * @return int
     */
    public function getManufacturerId() : ?int
    {
        return $this->manufacturerId;
    }
    /**
     * The id of the manufacturer to use for this product. Fetch and handle available manufacturers using the /product-manufacturers endpoint
     *
     * @param int $manufacturerId
     *
     * @return self
     */
    public function setManufacturerId(?int $manufacturerId) : self
    {
        $this->manufacturerId = $manufacturerId;
        return $this;
    }
    /**
     * 
     *
     * @return ProductMediaFileLinkModelCollection
     */
    public function getMediaFiles() : ?ProductMediaFileLinkModelCollection
    {
        return $this->mediaFiles;
    }
    /**
     * 
     *
     * @param ProductMediaFileLinkModelCollection $mediaFiles
     *
     * @return self
     */
    public function setMediaFiles(?ProductMediaFileLinkModelCollection $mediaFiles) : self
    {
        $this->mediaFiles = $mediaFiles;
        return $this;
    }
    /**
     * 
     *
     * @return ProductMetaDataModelCollection
     */
    public function getMetaData() : ?ProductMetaDataModelCollection
    {
        return $this->metaData;
    }
    /**
     * 
     *
     * @param ProductMetaDataModelCollection $metaData
     *
     * @return self
     */
    public function setMetaData(?ProductMetaDataModelCollection $metaData) : self
    {
        $this->metaData = $metaData;
        return $this;
    }
    /**
     * A timestamp of when the product was modified. The time should be formatted using ISO-8601
     *
     * @return string
     */
    public function getModifiedAt() : ?string
    {
        return $this->modifiedAt;
    }
    /**
     * A timestamp of when the product was modified. The time should be formatted using ISO-8601
     *
     * @param string $modifiedAt
     *
     * @return self
     */
    public function setModifiedAt(?string $modifiedAt) : self
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }
    /**
     * A valid URL to a web page with more information for this product
     *
     * @return string
     */
    public function getMoreInfoUrl() : ?string
    {
        return $this->moreInfoUrl;
    }
    /**
     * A valid URL to a web page with more information for this product
     *
     * @param string $moreInfoUrl
     *
     * @return self
     */
    public function setMoreInfoUrl(?string $moreInfoUrl) : self
    {
        $this->moreInfoUrl = $moreInfoUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getProductId() : ?int
    {
        return $this->productId;
    }
    /**
     * 
     *
     * @param int $productId
     *
     * @return self
     */
    public function setProductId(?int $productId) : self
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     * Sort index for this product in a list
     *
     * @return int
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * Sort index for this product in a list
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
    /**
     * 
     *
     * @return ProductUnitModelItem
     */
    public function getUnit() : ?ProductUnitModelItem
    {
        return $this->unit;
    }
    /**
     * 
     *
     * @param ProductUnitModelItem $unit
     *
     * @return self
     */
    public function setUnit(?ProductUnitModelItem $unit) : self
    {
        $this->unit = $unit;
        return $this;
    }
    /**
     * The id of the unit to use for this product if not standard. Fetch and handle available units using the /product-units endpoint
     *
     * @return int
     */
    public function getUnitId() : ?int
    {
        return $this->unitId;
    }
    /**
     * The id of the unit to use for this product if not standard. Fetch and handle available units using the /product-units endpoint
     *
     * @param int $unitId
     *
     * @return self
     */
    public function setUnitId(?int $unitId) : self
    {
        $this->unitId = $unitId;
        return $this;
    }
    /**
     * 
     *
     * @return ProductVariantModelCollection
     */
    public function getVariants() : ?ProductVariantModelCollection
    {
        return $this->variants;
    }
    /**
     * 
     *
     * @param ProductVariantModelCollection $variants
     *
     * @return self
     */
    public function setVariants(?ProductVariantModelCollection $variants) : self
    {
        $this->variants = $variants;
        return $this;
    }
    /**
     * 
     *
     * @return ProductVatRateModelCollection
     */
    public function getVatRates() : ?ProductVatRateModelCollection
    {
        return $this->vatRates;
    }
    /**
     * 
     *
     * @param ProductVatRateModelCollection $vatRates
     *
     * @return self
     */
    public function setVatRates(?ProductVatRateModelCollection $vatRates) : self
    {
        $this->vatRates = $vatRates;
        return $this;
    }
    /**
     * The visibility of this product. Supported values are: hidden, visible, pricelists
     *
     * @return string
     */
    public function getVisibility() : ?string
    {
        return $this->visibility;
    }
    /**
     * The visibility of this product. Supported values are: hidden, visible, pricelists
     *
     * @param string $visibility
     *
     * @return self
     */
    public function setVisibility(?string $visibility) : self
    {
        $this->visibility = $visibility;
        return $this;
    }
}