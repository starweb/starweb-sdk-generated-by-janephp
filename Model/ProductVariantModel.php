<?php

namespace Starweb\Sdk\Model;

class ProductVariantModel
{
    /**
     * An array of attribute value IDs that this variant belongs to. This field is mandatory for products variants if the product´s hasSeveralVariants field is set to true
     *
     * @var int[]
     */
    protected $attributeValueLinks;
    /**
     * A collection of product variant attribute values
     *
     * @var ProductVariantAttributeValueModel[]
     */
    protected $attributes;
    /**
     * The cost for this variant. Used for statistic and never displayed to customers
     *
     * @var string
     */
    protected $costPrice;
    /**
     * European article no
     *
     * @var string
     */
    protected $ean;
    /**
     * 
     *
     * @var int
     */
    protected $imageFileId;
    /**
     * Is this variant active? Only active variants are visible to customers
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Manufacturer part no
     *
     * @var string
     */
    protected $mpn;
    /**
     * A collection of product variant prices
     *
     * @var ProductVariantPriceModel[]
     */
    protected $prices;
    /**
     * The product variants SKU (stock keeping unit)
     *
     * @var string
     */
    protected $sku;
    /**
     * The current stock quantity for this variant
     *
     * @var int
     */
    protected $stockQuantity;
    /**
     * The ID of the variants stock status. Available stock statuses can be fetched using the /product-stock-statuses endpoint
     *
     * @var int
     */
    protected $stockStatusId;
    /**
     * The variants weight in KG
     *
     * @var float
     */
    protected $weightInKg;
    /**
     * An array of attribute value IDs that this variant belongs to. This field is mandatory for products variants if the product´s hasSeveralVariants field is set to true
     *
     * @return int[]
     */
    public function getAttributeValueLinks() : ?array
    {
        return $this->attributeValueLinks;
    }
    /**
     * An array of attribute value IDs that this variant belongs to. This field is mandatory for products variants if the product´s hasSeveralVariants field is set to true
     *
     * @param int[] $attributeValueLinks
     *
     * @return self
     */
    public function setAttributeValueLinks(?array $attributeValueLinks) : self
    {
        $this->attributeValueLinks = $attributeValueLinks;
        return $this;
    }
    /**
     * A collection of product variant attribute values
     *
     * @return ProductVariantAttributeValueModel[]
     */
    public function getAttributes() : ?array
    {
        return $this->attributes;
    }
    /**
     * A collection of product variant attribute values
     *
     * @param ProductVariantAttributeValueModel[] $attributes
     *
     * @return self
     */
    public function setAttributes(?array $attributes) : self
    {
        $this->attributes = $attributes;
        return $this;
    }
    /**
     * The cost for this variant. Used for statistic and never displayed to customers
     *
     * @return string
     */
    public function getCostPrice() : ?string
    {
        return $this->costPrice;
    }
    /**
     * The cost for this variant. Used for statistic and never displayed to customers
     *
     * @param string $costPrice
     *
     * @return self
     */
    public function setCostPrice(?string $costPrice) : self
    {
        $this->costPrice = $costPrice;
        return $this;
    }
    /**
     * European article no
     *
     * @return string
     */
    public function getEan() : ?string
    {
        return $this->ean;
    }
    /**
     * European article no
     *
     * @param string $ean
     *
     * @return self
     */
    public function setEan(?string $ean) : self
    {
        $this->ean = $ean;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getImageFileId() : ?int
    {
        return $this->imageFileId;
    }
    /**
     * 
     *
     * @param int $imageFileId
     *
     * @return self
     */
    public function setImageFileId(?int $imageFileId) : self
    {
        $this->imageFileId = $imageFileId;
        return $this;
    }
    /**
     * Is this variant active? Only active variants are visible to customers
     *
     * @return bool
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Is this variant active? Only active variants are visible to customers
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Manufacturer part no
     *
     * @return string
     */
    public function getMpn() : ?string
    {
        return $this->mpn;
    }
    /**
     * Manufacturer part no
     *
     * @param string $mpn
     *
     * @return self
     */
    public function setMpn(?string $mpn) : self
    {
        $this->mpn = $mpn;
        return $this;
    }
    /**
     * A collection of product variant prices
     *
     * @return ProductVariantPriceModel[]
     */
    public function getPrices() : ?array
    {
        return $this->prices;
    }
    /**
     * A collection of product variant prices
     *
     * @param ProductVariantPriceModel[] $prices
     *
     * @return self
     */
    public function setPrices(?array $prices) : self
    {
        $this->prices = $prices;
        return $this;
    }
    /**
     * The product variants SKU (stock keeping unit)
     *
     * @return string
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * The product variants SKU (stock keeping unit)
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(?string $sku) : self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * The current stock quantity for this variant
     *
     * @return int
     */
    public function getStockQuantity() : ?int
    {
        return $this->stockQuantity;
    }
    /**
     * The current stock quantity for this variant
     *
     * @param int $stockQuantity
     *
     * @return self
     */
    public function setStockQuantity(?int $stockQuantity) : self
    {
        $this->stockQuantity = $stockQuantity;
        return $this;
    }
    /**
     * The ID of the variants stock status. Available stock statuses can be fetched using the /product-stock-statuses endpoint
     *
     * @return int
     */
    public function getStockStatusId() : ?int
    {
        return $this->stockStatusId;
    }
    /**
     * The ID of the variants stock status. Available stock statuses can be fetched using the /product-stock-statuses endpoint
     *
     * @param int $stockStatusId
     *
     * @return self
     */
    public function setStockStatusId(?int $stockStatusId) : self
    {
        $this->stockStatusId = $stockStatusId;
        return $this;
    }
    /**
     * The variants weight in KG
     *
     * @return float
     */
    public function getWeightInKg() : ?float
    {
        return $this->weightInKg;
    }
    /**
     * The variants weight in KG
     *
     * @param float $weightInKg
     *
     * @return self
     */
    public function setWeightInKg(?float $weightInKg) : self
    {
        $this->weightInKg = $weightInKg;
        return $this;
    }
}