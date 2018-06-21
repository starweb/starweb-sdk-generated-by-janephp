<?php

namespace Starweb\Sdk\Model;

class PaymentMethodModel
{
    /**
     * If the payment method is actively available on checkout or not
     *
     * @var bool
     */
    protected $active;
    /**
     * Fee associated with this method
     *
     * @var float
     */
    protected $fee;
    /**
     * The payment methods idCode. This can be used to identify a payment method of a standarized type
     *
     * @var string
     */
    protected $idCode;
    /**
     * 
     *
     * @var PaymentMethodLanguageModelCollection
     */
    protected $languages;
    /**
     * The payment methods Id
     *
     * @var int
     */
    protected $paymentMethodId;
    /**
     * The countries this method is valid for (if validForCountries is set to ”selected”)
     *
     * @var string[]
     */
    protected $validCountriesSelected;
    /**
     * The restrictions to countries this payment method is valid for. Valid values are: all, EU, non-EU, selected, none
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
     * The shipping methods this is valid for. Valid values are: all, selected
     *
     * @var string
     */
    protected $validForShippingMethods;
    /**
     * If the payment method is actively available on checkout or not
     *
     * @return bool
     */
    public function getActive() : ?bool
    {
        return $this->active;
    }
    /**
     * If the payment method is actively available on checkout or not
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
     * Fee associated with this method
     *
     * @return float
     */
    public function getFee() : ?float
    {
        return $this->fee;
    }
    /**
     * Fee associated with this method
     *
     * @param float $fee
     *
     * @return self
     */
    public function setFee(?float $fee) : self
    {
        $this->fee = $fee;
        return $this;
    }
    /**
     * The payment methods idCode. This can be used to identify a payment method of a standarized type
     *
     * @return string
     */
    public function getIdCode() : ?string
    {
        return $this->idCode;
    }
    /**
     * The payment methods idCode. This can be used to identify a payment method of a standarized type
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
     * 
     *
     * @return PaymentMethodLanguageModelCollection
     */
    public function getLanguages() : ?PaymentMethodLanguageModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param PaymentMethodLanguageModelCollection $languages
     *
     * @return self
     */
    public function setLanguages(?PaymentMethodLanguageModelCollection $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     * The payment methods Id
     *
     * @return int
     */
    public function getPaymentMethodId() : ?int
    {
        return $this->paymentMethodId;
    }
    /**
     * The payment methods Id
     *
     * @param int $paymentMethodId
     *
     * @return self
     */
    public function setPaymentMethodId(?int $paymentMethodId) : self
    {
        $this->paymentMethodId = $paymentMethodId;
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
     * The restrictions to countries this payment method is valid for. Valid values are: all, EU, non-EU, selected, none
     *
     * @return string
     */
    public function getValidForCountries() : ?string
    {
        return $this->validForCountries;
    }
    /**
     * The restrictions to countries this payment method is valid for. Valid values are: all, EU, non-EU, selected, none
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
    /**
     * The shipping methods this is valid for. Valid values are: all, selected
     *
     * @return string
     */
    public function getValidForShippingMethods() : ?string
    {
        return $this->validForShippingMethods;
    }
    /**
     * The shipping methods this is valid for. Valid values are: all, selected
     *
     * @param string $validForShippingMethods
     *
     * @return self
     */
    public function setValidForShippingMethods(?string $validForShippingMethods) : self
    {
        $this->validForShippingMethods = $validForShippingMethods;
        return $this;
    }
}