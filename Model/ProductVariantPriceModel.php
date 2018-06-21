<?php

namespace Starweb\Sdk\Model;

class ProductVariantPriceModel
{
    /**
     * The price excluding vat
     *
     * @var float
     */
    protected $priceExVat;
    /**
     * The pricelist this price is for
     *
     * @var int
     */
    protected $pricelistId;
    /**
     * The special price excluding vat (a discounted price)
     *
     * @var float
     */
    protected $specialPriceExVat;
    /**
     * The price excluding vat
     *
     * @return float
     */
    public function getPriceExVat() : ?float
    {
        return $this->priceExVat;
    }
    /**
     * The price excluding vat
     *
     * @param float $priceExVat
     *
     * @return self
     */
    public function setPriceExVat(?float $priceExVat) : self
    {
        $this->priceExVat = $priceExVat;
        return $this;
    }
    /**
     * The pricelist this price is for
     *
     * @return int
     */
    public function getPricelistId() : ?int
    {
        return $this->pricelistId;
    }
    /**
     * The pricelist this price is for
     *
     * @param int $pricelistId
     *
     * @return self
     */
    public function setPricelistId(?int $pricelistId) : self
    {
        $this->pricelistId = $pricelistId;
        return $this;
    }
    /**
     * The special price excluding vat (a discounted price)
     *
     * @return float
     */
    public function getSpecialPriceExVat() : ?float
    {
        return $this->specialPriceExVat;
    }
    /**
     * The special price excluding vat (a discounted price)
     *
     * @param float $specialPriceExVat
     *
     * @return self
     */
    public function setSpecialPriceExVat(?float $specialPriceExVat) : self
    {
        $this->specialPriceExVat = $specialPriceExVat;
        return $this;
    }
}