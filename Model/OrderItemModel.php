<?php

namespace Starweb\Sdk\Model;

class OrderItemModel
{
    /**
     * The description of the order item
     *
     * @var string
     */
    protected $description;
    /**
     * The discount for the entire order row. Either as a percentage or an amount. If this is an amount and set to 20.0, the sum 20.0 will be subtracted from the order total no matter what the quantity is set to.
     *
     * @var float
     */
    protected $discount;
    /**
     * The type of discount. Either ”amount” or ”percent”. Default is ”percent”
     *
     * @var string
     */
    protected $discountType;
    /**
     * The id of the order item
     *
     * @var int
     */
    protected $itemId;
    /**
     * The quantity of the order item
     *
     * @var int
     */
    protected $quantity;
    /**
     * The SKU of the order item
     *
     * @var string
     */
    protected $sku;
    /**
     * The sort order of the order items
     *
     * @var int
     */
    protected $sortIndex;
    /**
     * The price per unit excluding VAT
     *
     * @var float
     */
    protected $unitPrice;
    /**
     * The unit symbol of the order item
     *
     * @var string
     */
    protected $unitSymbol;
    /**
     * The items VAT rate in percent. 25.0 = 25% VAT
     *
     * @var float
     */
    protected $vatRate;
    /**
     * The description of the order item
     *
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The description of the order item
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * The discount for the entire order row. Either as a percentage or an amount. If this is an amount and set to 20.0, the sum 20.0 will be subtracted from the order total no matter what the quantity is set to.
     *
     * @return float
     */
    public function getDiscount() : ?float
    {
        return $this->discount;
    }
    /**
     * The discount for the entire order row. Either as a percentage or an amount. If this is an amount and set to 20.0, the sum 20.0 will be subtracted from the order total no matter what the quantity is set to.
     *
     * @param float $discount
     *
     * @return self
     */
    public function setDiscount(?float $discount) : self
    {
        $this->discount = $discount;
        return $this;
    }
    /**
     * The type of discount. Either ”amount” or ”percent”. Default is ”percent”
     *
     * @return string
     */
    public function getDiscountType() : ?string
    {
        return $this->discountType;
    }
    /**
     * The type of discount. Either ”amount” or ”percent”. Default is ”percent”
     *
     * @param string $discountType
     *
     * @return self
     */
    public function setDiscountType(?string $discountType) : self
    {
        $this->discountType = $discountType;
        return $this;
    }
    /**
     * The id of the order item
     *
     * @return int
     */
    public function getItemId() : ?int
    {
        return $this->itemId;
    }
    /**
     * The id of the order item
     *
     * @param int $itemId
     *
     * @return self
     */
    public function setItemId(?int $itemId) : self
    {
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * The quantity of the order item
     *
     * @return int
     */
    public function getQuantity() : ?int
    {
        return $this->quantity;
    }
    /**
     * The quantity of the order item
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * The SKU of the order item
     *
     * @return string
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * The SKU of the order item
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
     * The sort order of the order items
     *
     * @return int
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * The sort order of the order items
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
     * The price per unit excluding VAT
     *
     * @return float
     */
    public function getUnitPrice() : ?float
    {
        return $this->unitPrice;
    }
    /**
     * The price per unit excluding VAT
     *
     * @param float $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(?float $unitPrice) : self
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * The unit symbol of the order item
     *
     * @return string
     */
    public function getUnitSymbol() : ?string
    {
        return $this->unitSymbol;
    }
    /**
     * The unit symbol of the order item
     *
     * @param string $unitSymbol
     *
     * @return self
     */
    public function setUnitSymbol(?string $unitSymbol) : self
    {
        $this->unitSymbol = $unitSymbol;
        return $this;
    }
    /**
     * The items VAT rate in percent. 25.0 = 25% VAT
     *
     * @return float
     */
    public function getVatRate() : ?float
    {
        return $this->vatRate;
    }
    /**
     * The items VAT rate in percent. 25.0 = 25% VAT
     *
     * @param float $vatRate
     *
     * @return self
     */
    public function setVatRate(?float $vatRate) : self
    {
        $this->vatRate = $vatRate;
        return $this;
    }
}