<?php

namespace Starweb\Sdk\Model;

class PricelistModel
{
    /**
     * The countryCodes this pricelist is valid for
     *
     * @var string[]
     */
    protected $countryCodes;
    /**
     * The currencyCode this pricelist is valid for
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Is this pricelist a ”country” pricelist (base pricelist for a certain country)
     *
     * @var bool
     */
    protected $isCountryPricelist;
    /**
     * Is this pricelist a ”customer” pricelist (for selected customer groups)
     *
     * @var bool
     */
    protected $isCustomerPricelist;
    /**
     * If this pricelist is the default ”master” pricelist or not. Only one pricelist can be the master pricelist
     *
     * @var bool
     */
    protected $isMaster;
    /**
     * The name of this pricelist
     *
     * @var string
     */
    protected $name;
    /**
     * Does this pricelist has a parent price list. 
     *
     * @var int
     */
    protected $parentPricelistId;
    /**
     * The shipping methods Id
     *
     * @var int
     */
    protected $pricelistId;
    /**
     * The countryCodes this pricelist is valid for
     *
     * @return string[]
     */
    public function getCountryCodes() : ?array
    {
        return $this->countryCodes;
    }
    /**
     * The countryCodes this pricelist is valid for
     *
     * @param string[] $countryCodes
     *
     * @return self
     */
    public function setCountryCodes(?array $countryCodes) : self
    {
        $this->countryCodes = $countryCodes;
        return $this;
    }
    /**
     * The currencyCode this pricelist is valid for
     *
     * @return string
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * The currencyCode this pricelist is valid for
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode) : self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Is this pricelist a ”country” pricelist (base pricelist for a certain country)
     *
     * @return bool
     */
    public function getIsCountryPricelist() : ?bool
    {
        return $this->isCountryPricelist;
    }
    /**
     * Is this pricelist a ”country” pricelist (base pricelist for a certain country)
     *
     * @param bool $isCountryPricelist
     *
     * @return self
     */
    public function setIsCountryPricelist(?bool $isCountryPricelist) : self
    {
        $this->isCountryPricelist = $isCountryPricelist;
        return $this;
    }
    /**
     * Is this pricelist a ”customer” pricelist (for selected customer groups)
     *
     * @return bool
     */
    public function getIsCustomerPricelist() : ?bool
    {
        return $this->isCustomerPricelist;
    }
    /**
     * Is this pricelist a ”customer” pricelist (for selected customer groups)
     *
     * @param bool $isCustomerPricelist
     *
     * @return self
     */
    public function setIsCustomerPricelist(?bool $isCustomerPricelist) : self
    {
        $this->isCustomerPricelist = $isCustomerPricelist;
        return $this;
    }
    /**
     * If this pricelist is the default ”master” pricelist or not. Only one pricelist can be the master pricelist
     *
     * @return bool
     */
    public function getIsMaster() : ?bool
    {
        return $this->isMaster;
    }
    /**
     * If this pricelist is the default ”master” pricelist or not. Only one pricelist can be the master pricelist
     *
     * @param bool $isMaster
     *
     * @return self
     */
    public function setIsMaster(?bool $isMaster) : self
    {
        $this->isMaster = $isMaster;
        return $this;
    }
    /**
     * The name of this pricelist
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this pricelist
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Does this pricelist has a parent price list. 
     *
     * @return int
     */
    public function getParentPricelistId() : ?int
    {
        return $this->parentPricelistId;
    }
    /**
     * Does this pricelist has a parent price list. 
     *
     * @param int $parentPricelistId
     *
     * @return self
     */
    public function setParentPricelistId(?int $parentPricelistId) : self
    {
        $this->parentPricelistId = $parentPricelistId;
        return $this;
    }
    /**
     * The shipping methods Id
     *
     * @return int
     */
    public function getPricelistId() : ?int
    {
        return $this->pricelistId;
    }
    /**
     * The shipping methods Id
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
}