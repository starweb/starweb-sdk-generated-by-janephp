<?php

namespace Starweb\Sdk\Model;

class ShippingMethodModel
{
    /**
     * If the shipping method is actively available on checkout or not
     *
     * @var bool
     */
    protected $active;
    /**
     * Offer free shipping with this method if the minimum order sub total amount is at least this value
     *
     * @var float
     */
    protected $freeShippingMinItemsSubtotal;
    /**
     * Offer free shipping with this method if the minimum order total weight is at least this value
     *
     * @var float
     */
    protected $freeShippingMinWeight;
    /**
     * 
     *
     * @var ShippingMethodLanguageModelCollection
     */
    protected $languages;
    /**
     * The shipping methods Id
     *
     * @var int
     */
    protected $shippingMethodId;
    /**
     * The countries this method is valid for (if validForCountries is set to ”selected”)
     *
     * @var string[]
     */
    protected $validCountriesSelected;
    /**
     * The restrictions to countries this shipping method is valid for. Valid values are: all, EU, non-EU, selected, none
     *
     * @var string
     */
    protected $validForCountries;
    /**
     * The customer type this method is valid for. Valid values are: null (no restriction), person, company
     *
     * @var string
     */
    protected $validForCustomerType;
    /**
     * The max order sub total that this method is valid for
     *
     * @var float
     */
    protected $validForMaxItemsSubtotal;
    /**
     * The max order weight that this method is valid for.
     *
     * @var float
     */
    protected $validForMaxWeight;
    /**
     * The min order sub total that this method is valid for
     *
     * @var float
     */
    protected $validForMinItemsSubtotal;
    /**
     * The min order weight that this method is valid for
     *
     * @var float
     */
    protected $validForMinWeight;
    /**
     * If the shipping method is actively available on checkout or not
     *
     * @return bool
     */
    public function getActive() : ?bool
    {
        return $this->active;
    }
    /**
     * If the shipping method is actively available on checkout or not
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(?bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
    /**
     * Offer free shipping with this method if the minimum order sub total amount is at least this value
     *
     * @return float
     */
    public function getFreeShippingMinItemsSubtotal() : ?float
    {
        return $this->freeShippingMinItemsSubtotal;
    }
    /**
     * Offer free shipping with this method if the minimum order sub total amount is at least this value
     *
     * @param float $freeShippingMinItemsSubtotal
     *
     * @return self
     */
    public function setFreeShippingMinItemsSubtotal(?float $freeShippingMinItemsSubtotal) : self
    {
        $this->freeShippingMinItemsSubtotal = $freeShippingMinItemsSubtotal;
        return $this;
    }
    /**
     * Offer free shipping with this method if the minimum order total weight is at least this value
     *
     * @return float
     */
    public function getFreeShippingMinWeight() : ?float
    {
        return $this->freeShippingMinWeight;
    }
    /**
     * Offer free shipping with this method if the minimum order total weight is at least this value
     *
     * @param float $freeShippingMinWeight
     *
     * @return self
     */
    public function setFreeShippingMinWeight(?float $freeShippingMinWeight) : self
    {
        $this->freeShippingMinWeight = $freeShippingMinWeight;
        return $this;
    }
    /**
     * 
     *
     * @return ShippingMethodLanguageModelCollection
     */
    public function getLanguages() : ?ShippingMethodLanguageModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ShippingMethodLanguageModelCollection $languages
     *
     * @return self
     */
    public function setLanguages(?ShippingMethodLanguageModelCollection $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     * The shipping methods Id
     *
     * @return int
     */
    public function getShippingMethodId() : ?int
    {
        return $this->shippingMethodId;
    }
    /**
     * The shipping methods Id
     *
     * @param int $shippingMethodId
     *
     * @return self
     */
    public function setShippingMethodId(?int $shippingMethodId) : self
    {
        $this->shippingMethodId = $shippingMethodId;
        return $this;
    }
    /**
     * The countries this method is valid for (if validForCountries is set to ”selected”)
     *
     * @return string[]
     */
    public function getValidCountriesSelected() : ?array
    {
        return $this->validCountriesSelected;
    }
    /**
     * The countries this method is valid for (if validForCountries is set to ”selected”)
     *
     * @param string[] $validCountriesSelected
     *
     * @return self
     */
    public function setValidCountriesSelected(?array $validCountriesSelected) : self
    {
        $this->validCountriesSelected = $validCountriesSelected;
        return $this;
    }
    /**
     * The restrictions to countries this shipping method is valid for. Valid values are: all, EU, non-EU, selected, none
     *
     * @return string
     */
    public function getValidForCountries() : ?string
    {
        return $this->validForCountries;
    }
    /**
     * The restrictions to countries this shipping method is valid for. Valid values are: all, EU, non-EU, selected, none
     *
     * @param string $validForCountries
     *
     * @return self
     */
    public function setValidForCountries(?string $validForCountries) : self
    {
        $this->validForCountries = $validForCountries;
        return $this;
    }
    /**
     * The customer type this method is valid for. Valid values are: null (no restriction), person, company
     *
     * @return string
     */
    public function getValidForCustomerType() : ?string
    {
        return $this->validForCustomerType;
    }
    /**
     * The customer type this method is valid for. Valid values are: null (no restriction), person, company
     *
     * @param string $validForCustomerType
     *
     * @return self
     */
    public function setValidForCustomerType(?string $validForCustomerType) : self
    {
        $this->validForCustomerType = $validForCustomerType;
        return $this;
    }
    /**
     * The max order sub total that this method is valid for
     *
     * @return float
     */
    public function getValidForMaxItemsSubtotal() : ?float
    {
        return $this->validForMaxItemsSubtotal;
    }
    /**
     * The max order sub total that this method is valid for
     *
     * @param float $validForMaxItemsSubtotal
     *
     * @return self
     */
    public function setValidForMaxItemsSubtotal(?float $validForMaxItemsSubtotal) : self
    {
        $this->validForMaxItemsSubtotal = $validForMaxItemsSubtotal;
        return $this;
    }
    /**
     * The max order weight that this method is valid for.
     *
     * @return float
     */
    public function getValidForMaxWeight() : ?float
    {
        return $this->validForMaxWeight;
    }
    /**
     * The max order weight that this method is valid for.
     *
     * @param float $validForMaxWeight
     *
     * @return self
     */
    public function setValidForMaxWeight(?float $validForMaxWeight) : self
    {
        $this->validForMaxWeight = $validForMaxWeight;
        return $this;
    }
    /**
     * The min order sub total that this method is valid for
     *
     * @return float
     */
    public function getValidForMinItemsSubtotal() : ?float
    {
        return $this->validForMinItemsSubtotal;
    }
    /**
     * The min order sub total that this method is valid for
     *
     * @param float $validForMinItemsSubtotal
     *
     * @return self
     */
    public function setValidForMinItemsSubtotal(?float $validForMinItemsSubtotal) : self
    {
        $this->validForMinItemsSubtotal = $validForMinItemsSubtotal;
        return $this;
    }
    /**
     * The min order weight that this method is valid for
     *
     * @return float
     */
    public function getValidForMinWeight() : ?float
    {
        return $this->validForMinWeight;
    }
    /**
     * The min order weight that this method is valid for
     *
     * @param float $validForMinWeight
     *
     * @return self
     */
    public function setValidForMinWeight(?float $validForMinWeight) : self
    {
        $this->validForMinWeight = $validForMinWeight;
        return $this;
    }
}