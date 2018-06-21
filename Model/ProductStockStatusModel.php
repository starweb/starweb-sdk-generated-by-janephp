<?php

namespace Starweb\Sdk\Model;

class ProductStockStatusModel
{
    /**
     * The idCode of the status. Only standard statuses has idCodes set. It is also not permitted to change names for standard statuses
     *
     * @var string
     */
    protected $idCode;
    /**
     * Should the product be displayed as "in stock" when this status is set?
     *
     * @var bool
     */
    protected $inStock;
    /**
     * 
     *
     * @var ProductStockStatusLanguageModel[]
     */
    protected $languages;
    /**
     * Is the product buyable when this status is set?
     *
     * @var bool
     */
    protected $productBuyable;
    /**
     * Sort index for this status
     *
     * @var int
     */
    protected $sortIndex;
    /**
     * The stock status id
     *
     * @var int
     */
    protected $stockStatusId;
    /**
     * This has to be set to another, existing stock status id, or null. If a product has its quantity changed to negative, the product will then change stock status to the one with this id
     *
     * @var int
     */
    protected $stockoutNewStatusId;
    /**
     * The idCode of the status. Only standard statuses has idCodes set. It is also not permitted to change names for standard statuses
     *
     * @return string
     */
    public function getIdCode() : ?string
    {
        return $this->idCode;
    }
    /**
     * The idCode of the status. Only standard statuses has idCodes set. It is also not permitted to change names for standard statuses
     *
     * @param string $idCode
     *
     * @return self
     */
    public function setIdCode(?string $idCode) : self
    {
        $this->idCode = $idCode;
        return $this;
    }
    /**
     * Should the product be displayed as "in stock" when this status is set?
     *
     * @return bool
     */
    public function getInStock() : ?bool
    {
        return $this->inStock;
    }
    /**
     * Should the product be displayed as "in stock" when this status is set?
     *
     * @param bool $inStock
     *
     * @return self
     */
    public function setInStock(?bool $inStock) : self
    {
        $this->inStock = $inStock;
        return $this;
    }
    /**
     * 
     *
     * @return ProductStockStatusLanguageModel[]
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductStockStatusLanguageModel[] $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     * Is the product buyable when this status is set?
     *
     * @return bool
     */
    public function getProductBuyable() : ?bool
    {
        return $this->productBuyable;
    }
    /**
     * Is the product buyable when this status is set?
     *
     * @param bool $productBuyable
     *
     * @return self
     */
    public function setProductBuyable(?bool $productBuyable) : self
    {
        $this->productBuyable = $productBuyable;
        return $this;
    }
    /**
     * Sort index for this status
     *
     * @return int
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * Sort index for this status
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
     * The stock status id
     *
     * @return int
     */
    public function getStockStatusId() : ?int
    {
        return $this->stockStatusId;
    }
    /**
     * The stock status id
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
     * This has to be set to another, existing stock status id, or null. If a product has its quantity changed to negative, the product will then change stock status to the one with this id
     *
     * @return int
     */
    public function getStockoutNewStatusId() : ?int
    {
        return $this->stockoutNewStatusId;
    }
    /**
     * This has to be set to another, existing stock status id, or null. If a product has its quantity changed to negative, the product will then change stock status to the one with this id
     *
     * @param int $stockoutNewStatusId
     *
     * @return self
     */
    public function setStockoutNewStatusId(?int $stockoutNewStatusId) : self
    {
        $this->stockoutNewStatusId = $stockoutNewStatusId;
        return $this;
    }
}