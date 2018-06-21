<?php

namespace Starweb\Sdk\Model;

class OrderModel
{
    /**
     * 
     *
     * @var OrderAddressCollection
     */
    protected $addresses;
    /**
     * The amount paid via the payment method for this order
     *
     * @var float
     */
    protected $amountPaid;
    /**
     * Same as amountPaid, but in the shops base currency
     *
     * @var float
     */
    protected $amountPaidInBaseCurrency;
    /**
     * The total order amount to pay
     *
     * @var float
     */
    protected $amountToPay;
    /**
     * The total amount to pay, in the shops base currency
     *
     * @var float
     */
    protected $amountToPayInBaseCurrency;
    /**
     * The shops base currency code at the point of order creation
     *
     * @var string
     */
    protected $baseCurrencyCode;
    /**
     * A timestamp of when the order was created. The time should be formatted using ISO-8601
     *
     * @var string
     */
    protected $createdAt;
    /**
     * The currency code of the currency that was used for this order. Has to be a valid ISO 4217 currency code
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * The exchange rate between this orders currency and the shops base currency. Ff, for example, the shop base currency is SEK and this order was placed in NOK, where 1 SEK = 0.97 NOK - this value would be 0.97
     *
     * @var float
     */
    protected $currencyExchangeRate;
    /**
     * The number of decimals to display
     *
     * @var int
     */
    protected $currencyPrecision;
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @var string
     */
    protected $customInfo1;
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @var string
     */
    protected $customInfo2;
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @var string
     */
    protected $customInfo3;
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @var string
     */
    protected $customInfo4;
    /**
     * 
     *
     * @var CustomerModelItem
     */
    protected $customer;
    /**
     * The ID of the orders customer
     *
     * @var int
     */
    protected $customerId;
    /**
     * The code ID of a discount code that was used for this order
     *
     * @var string
     */
    protected $discountCode;
    /**
     * 
     *
     * @var OrderExternalServiceModelCollection
     */
    protected $externalServices;
    /**
     * Whether the customer or an admin has added a comment to the order
     *
     * @var bool
     */
    protected $hasComment;
    /**
     * An internal comment placed by an administrator. Not available to the customer
     *
     * @var string
     */
    protected $internalComment;
    /**
     * Is the order completed (that is, is it completely saved and has the payment method processed and confirmed it)
     *
     * @var bool
     */
    protected $isComplete;
    /**
     * An order is read when an administrator has read it via the admin GUI
     *
     * @var bool
     */
    protected $isRead;
    /**
     * 
     *
     * @var OrderItemModelCollection
     */
    protected $items;
    /**
     * Language Code (ISO 639-1) used for placing this order. Has to be a valid lang code that the shop has setup. Used for order update emails, etc. 
     *
     * @var string
     */
    protected $langCode;
    /**
     * A timestamp of when the order was modified. The time should be formatted using ISO-8601
     *
     * @var string
     */
    protected $modifiedAt;
    /**
     * Set this to false to prevent processing payment on changes to statusId. Only applies to payment methods that support processing payments. For example charging a reserved amount or cancel a created invoice
     *
     * @var bool
     */
    protected $onOrderStatusChangeProcessPayment;
    /**
     * Set this to false to prevent sending email to customer on changes to statusId and new orders
     *
     * @var bool
     */
    protected $onOrderStatusChangeSendEmail;
    /**
     * The orders ID
     *
     * @var int
     */
    protected $orderId;
    /**
     * Custom customer info at the point of order creation
     *
     * @var string
     */
    protected $originalCustomerCustomInfo1;
    /**
     * Custom customer info at the point of order creation
     *
     * @var string
     */
    protected $originalCustomerCustomInfo2;
    /**
     * The email address of the customer at the point of order creation
     *
     * @var string
     */
    protected $originalCustomerEmail;
    /**
     * The national id number of the customer at the point of order creation
     *
     * @var string
     */
    protected $originalCustomerNationalIdNo;
    /**
     * The VAT number of the customer at the point of order creation
     *
     * @var string
     */
    protected $originalCustomerVatNo;
    /**
     * Payment fee
     *
     * @var float
     */
    protected $paymentFee;
    /**
     * The ID of the orders payment method
     *
     * @var int
     */
    protected $paymentMethodId;
    /**
     * The ID code of the payment method.
     *
     * @var string
     */
    protected $paymentMethodIdCode;
    /**
     * Title of the orders payment method
     *
     * @var string
     */
    protected $paymentMethodName;
    /**
     * Reference to the payment methods payment transaction
     *
     * @var string
     */
    protected $paymentReference;
    /**
     * Status of the payment methods payment transaction
     *
     * @var string
     */
    protected $paymentStatus;
    /**
     * The VAT rate of the paymentFee in percent
     *
     * @var float
     */
    protected $paymentVatRate;
    /**
     * Shipping cost
     *
     * @var float
     */
    protected $shippingCost;
    /**
     * The ID of the orders shipping method
     *
     * @var int
     */
    protected $shippingMethodId;
    /**
     * Title of the orders shipping method
     *
     * @var string
     */
    protected $shippingMethodName;
    /**
     * The ID of the tracking number type. Types are available via: GET /shipping-tracker-types
     *
     * @var int
     */
    protected $shippingTrackerType;
    /**
     * The shipping tracking number. Has to be in the format that is used for the chosen tracking type (please contact the freight forwarder regarding this).
     *
     * @var string
     */
    protected $shippingTrackingNo;
    /**
     * The VAT rate of the shippingCost in percent
     *
     * @var float
     */
    protected $shippingVatRate;
    /**
     * The shops country code at the point of order creation
     *
     * @var string
     */
    protected $shopCountryCode;
    /**
     * 
     *
     * @var OrderStatusModelItem
     */
    protected $status;
    /**
     * The ID of the orders status
     *
     * @var int
     */
    protected $statusId;
    /**
     * The total order amount
     *
     * @var float
     */
    protected $totalAmount;
    /**
     * The total order amount, in the shops base currency
     *
     * @var float
     */
    protected $totalAmountInBaseCurrency;
    /**
     * The total order VAT amount
     *
     * @var float
     */
    protected $totalVat;
    /**
     * The total VAT amount, in the shops base currency
     *
     * @var float
     */
    protected $totalVatInBaseCurrency;
    /**
     * The total weight of the order in kg. This field is a calculated summary of all order items
     *
     * @var float
     */
    protected $totalWeight;
    /**
     * 
     *
     * @return OrderAddressCollection
     */
    public function getAddresses() : ?OrderAddressCollection
    {
        return $this->addresses;
    }
    /**
     * 
     *
     * @param OrderAddressCollection $addresses
     *
     * @return self
     */
    public function setAddresses(?OrderAddressCollection $addresses) : self
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * The amount paid via the payment method for this order
     *
     * @return float
     */
    public function getAmountPaid() : ?float
    {
        return $this->amountPaid;
    }
    /**
     * The amount paid via the payment method for this order
     *
     * @param float $amountPaid
     *
     * @return self
     */
    public function setAmountPaid(?float $amountPaid) : self
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }
    /**
     * Same as amountPaid, but in the shops base currency
     *
     * @return float
     */
    public function getAmountPaidInBaseCurrency() : ?float
    {
        return $this->amountPaidInBaseCurrency;
    }
    /**
     * Same as amountPaid, but in the shops base currency
     *
     * @param float $amountPaidInBaseCurrency
     *
     * @return self
     */
    public function setAmountPaidInBaseCurrency(?float $amountPaidInBaseCurrency) : self
    {
        $this->amountPaidInBaseCurrency = $amountPaidInBaseCurrency;
        return $this;
    }
    /**
     * The total order amount to pay
     *
     * @return float
     */
    public function getAmountToPay() : ?float
    {
        return $this->amountToPay;
    }
    /**
     * The total order amount to pay
     *
     * @param float $amountToPay
     *
     * @return self
     */
    public function setAmountToPay(?float $amountToPay) : self
    {
        $this->amountToPay = $amountToPay;
        return $this;
    }
    /**
     * The total amount to pay, in the shops base currency
     *
     * @return float
     */
    public function getAmountToPayInBaseCurrency() : ?float
    {
        return $this->amountToPayInBaseCurrency;
    }
    /**
     * The total amount to pay, in the shops base currency
     *
     * @param float $amountToPayInBaseCurrency
     *
     * @return self
     */
    public function setAmountToPayInBaseCurrency(?float $amountToPayInBaseCurrency) : self
    {
        $this->amountToPayInBaseCurrency = $amountToPayInBaseCurrency;
        return $this;
    }
    /**
     * The shops base currency code at the point of order creation
     *
     * @return string
     */
    public function getBaseCurrencyCode() : ?string
    {
        return $this->baseCurrencyCode;
    }
    /**
     * The shops base currency code at the point of order creation
     *
     * @param string $baseCurrencyCode
     *
     * @return self
     */
    public function setBaseCurrencyCode(?string $baseCurrencyCode) : self
    {
        $this->baseCurrencyCode = $baseCurrencyCode;
        return $this;
    }
    /**
     * A timestamp of when the order was created. The time should be formatted using ISO-8601
     *
     * @return string
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * A timestamp of when the order was created. The time should be formatted using ISO-8601
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
     * The currency code of the currency that was used for this order. Has to be a valid ISO 4217 currency code
     *
     * @return string
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * The currency code of the currency that was used for this order. Has to be a valid ISO 4217 currency code
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
     * The exchange rate between this orders currency and the shops base currency. Ff, for example, the shop base currency is SEK and this order was placed in NOK, where 1 SEK = 0.97 NOK - this value would be 0.97
     *
     * @return float
     */
    public function getCurrencyExchangeRate() : ?float
    {
        return $this->currencyExchangeRate;
    }
    /**
     * The exchange rate between this orders currency and the shops base currency. Ff, for example, the shop base currency is SEK and this order was placed in NOK, where 1 SEK = 0.97 NOK - this value would be 0.97
     *
     * @param float $currencyExchangeRate
     *
     * @return self
     */
    public function setCurrencyExchangeRate(?float $currencyExchangeRate) : self
    {
        $this->currencyExchangeRate = $currencyExchangeRate;
        return $this;
    }
    /**
     * The number of decimals to display
     *
     * @return int
     */
    public function getCurrencyPrecision() : ?int
    {
        return $this->currencyPrecision;
    }
    /**
     * The number of decimals to display
     *
     * @param int $currencyPrecision
     *
     * @return self
     */
    public function setCurrencyPrecision(?int $currencyPrecision) : self
    {
        $this->currencyPrecision = $currencyPrecision;
        return $this;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @return string
     */
    public function getCustomInfo1() : ?string
    {
        return $this->customInfo1;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @param string $customInfo1
     *
     * @return self
     */
    public function setCustomInfo1(?string $customInfo1) : self
    {
        $this->customInfo1 = $customInfo1;
        return $this;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @return string
     */
    public function getCustomInfo2() : ?string
    {
        return $this->customInfo2;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @param string $customInfo2
     *
     * @return self
     */
    public function setCustomInfo2(?string $customInfo2) : self
    {
        $this->customInfo2 = $customInfo2;
        return $this;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @return string
     */
    public function getCustomInfo3() : ?string
    {
        return $this->customInfo3;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @param string $customInfo3
     *
     * @return self
     */
    public function setCustomInfo3(?string $customInfo3) : self
    {
        $this->customInfo3 = $customInfo3;
        return $this;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @return string
     */
    public function getCustomInfo4() : ?string
    {
        return $this->customInfo4;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @param string $customInfo4
     *
     * @return self
     */
    public function setCustomInfo4(?string $customInfo4) : self
    {
        $this->customInfo4 = $customInfo4;
        return $this;
    }
    /**
     * 
     *
     * @return CustomerModelItem
     */
    public function getCustomer() : ?CustomerModelItem
    {
        return $this->customer;
    }
    /**
     * 
     *
     * @param CustomerModelItem $customer
     *
     * @return self
     */
    public function setCustomer(?CustomerModelItem $customer) : self
    {
        $this->customer = $customer;
        return $this;
    }
    /**
     * The ID of the orders customer
     *
     * @return int
     */
    public function getCustomerId() : ?int
    {
        return $this->customerId;
    }
    /**
     * The ID of the orders customer
     *
     * @param int $customerId
     *
     * @return self
     */
    public function setCustomerId(?int $customerId) : self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * The code ID of a discount code that was used for this order
     *
     * @return string
     */
    public function getDiscountCode() : ?string
    {
        return $this->discountCode;
    }
    /**
     * The code ID of a discount code that was used for this order
     *
     * @param string $discountCode
     *
     * @return self
     */
    public function setDiscountCode(?string $discountCode) : self
    {
        $this->discountCode = $discountCode;
        return $this;
    }
    /**
     * 
     *
     * @return OrderExternalServiceModelCollection
     */
    public function getExternalServices() : ?OrderExternalServiceModelCollection
    {
        return $this->externalServices;
    }
    /**
     * 
     *
     * @param OrderExternalServiceModelCollection $externalServices
     *
     * @return self
     */
    public function setExternalServices(?OrderExternalServiceModelCollection $externalServices) : self
    {
        $this->externalServices = $externalServices;
        return $this;
    }
    /**
     * Whether the customer or an admin has added a comment to the order
     *
     * @return bool
     */
    public function getHasComment() : ?bool
    {
        return $this->hasComment;
    }
    /**
     * Whether the customer or an admin has added a comment to the order
     *
     * @param bool $hasComment
     *
     * @return self
     */
    public function setHasComment(?bool $hasComment) : self
    {
        $this->hasComment = $hasComment;
        return $this;
    }
    /**
     * An internal comment placed by an administrator. Not available to the customer
     *
     * @return string
     */
    public function getInternalComment() : ?string
    {
        return $this->internalComment;
    }
    /**
     * An internal comment placed by an administrator. Not available to the customer
     *
     * @param string $internalComment
     *
     * @return self
     */
    public function setInternalComment(?string $internalComment) : self
    {
        $this->internalComment = $internalComment;
        return $this;
    }
    /**
     * Is the order completed (that is, is it completely saved and has the payment method processed and confirmed it)
     *
     * @return bool
     */
    public function getIsComplete() : ?bool
    {
        return $this->isComplete;
    }
    /**
     * Is the order completed (that is, is it completely saved and has the payment method processed and confirmed it)
     *
     * @param bool $isComplete
     *
     * @return self
     */
    public function setIsComplete(?bool $isComplete) : self
    {
        $this->isComplete = $isComplete;
        return $this;
    }
    /**
     * An order is read when an administrator has read it via the admin GUI
     *
     * @return bool
     */
    public function getIsRead() : ?bool
    {
        return $this->isRead;
    }
    /**
     * An order is read when an administrator has read it via the admin GUI
     *
     * @param bool $isRead
     *
     * @return self
     */
    public function setIsRead(?bool $isRead) : self
    {
        $this->isRead = $isRead;
        return $this;
    }
    /**
     * 
     *
     * @return OrderItemModelCollection
     */
    public function getItems() : ?OrderItemModelCollection
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param OrderItemModelCollection $items
     *
     * @return self
     */
    public function setItems(?OrderItemModelCollection $items) : self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Language Code (ISO 639-1) used for placing this order. Has to be a valid lang code that the shop has setup. Used for order update emails, etc. 
     *
     * @return string
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * Language Code (ISO 639-1) used for placing this order. Has to be a valid lang code that the shop has setup. Used for order update emails, etc. 
     *
     * @param string $langCode
     *
     * @return self
     */
    public function setLangCode(?string $langCode) : self
    {
        $this->langCode = $langCode;
        return $this;
    }
    /**
     * A timestamp of when the order was modified. The time should be formatted using ISO-8601
     *
     * @return string
     */
    public function getModifiedAt() : ?string
    {
        return $this->modifiedAt;
    }
    /**
     * A timestamp of when the order was modified. The time should be formatted using ISO-8601
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
     * Set this to false to prevent processing payment on changes to statusId. Only applies to payment methods that support processing payments. For example charging a reserved amount or cancel a created invoice
     *
     * @return bool
     */
    public function getOnOrderStatusChangeProcessPayment() : ?bool
    {
        return $this->onOrderStatusChangeProcessPayment;
    }
    /**
     * Set this to false to prevent processing payment on changes to statusId. Only applies to payment methods that support processing payments. For example charging a reserved amount or cancel a created invoice
     *
     * @param bool $onOrderStatusChangeProcessPayment
     *
     * @return self
     */
    public function setOnOrderStatusChangeProcessPayment(?bool $onOrderStatusChangeProcessPayment) : self
    {
        $this->onOrderStatusChangeProcessPayment = $onOrderStatusChangeProcessPayment;
        return $this;
    }
    /**
     * Set this to false to prevent sending email to customer on changes to statusId and new orders
     *
     * @return bool
     */
    public function getOnOrderStatusChangeSendEmail() : ?bool
    {
        return $this->onOrderStatusChangeSendEmail;
    }
    /**
     * Set this to false to prevent sending email to customer on changes to statusId and new orders
     *
     * @param bool $onOrderStatusChangeSendEmail
     *
     * @return self
     */
    public function setOnOrderStatusChangeSendEmail(?bool $onOrderStatusChangeSendEmail) : self
    {
        $this->onOrderStatusChangeSendEmail = $onOrderStatusChangeSendEmail;
        return $this;
    }
    /**
     * The orders ID
     *
     * @return int
     */
    public function getOrderId() : ?int
    {
        return $this->orderId;
    }
    /**
     * The orders ID
     *
     * @param int $orderId
     *
     * @return self
     */
    public function setOrderId(?int $orderId) : self
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Custom customer info at the point of order creation
     *
     * @return string
     */
    public function getOriginalCustomerCustomInfo1() : ?string
    {
        return $this->originalCustomerCustomInfo1;
    }
    /**
     * Custom customer info at the point of order creation
     *
     * @param string $originalCustomerCustomInfo1
     *
     * @return self
     */
    public function setOriginalCustomerCustomInfo1(?string $originalCustomerCustomInfo1) : self
    {
        $this->originalCustomerCustomInfo1 = $originalCustomerCustomInfo1;
        return $this;
    }
    /**
     * Custom customer info at the point of order creation
     *
     * @return string
     */
    public function getOriginalCustomerCustomInfo2() : ?string
    {
        return $this->originalCustomerCustomInfo2;
    }
    /**
     * Custom customer info at the point of order creation
     *
     * @param string $originalCustomerCustomInfo2
     *
     * @return self
     */
    public function setOriginalCustomerCustomInfo2(?string $originalCustomerCustomInfo2) : self
    {
        $this->originalCustomerCustomInfo2 = $originalCustomerCustomInfo2;
        return $this;
    }
    /**
     * The email address of the customer at the point of order creation
     *
     * @return string
     */
    public function getOriginalCustomerEmail() : ?string
    {
        return $this->originalCustomerEmail;
    }
    /**
     * The email address of the customer at the point of order creation
     *
     * @param string $originalCustomerEmail
     *
     * @return self
     */
    public function setOriginalCustomerEmail(?string $originalCustomerEmail) : self
    {
        $this->originalCustomerEmail = $originalCustomerEmail;
        return $this;
    }
    /**
     * The national id number of the customer at the point of order creation
     *
     * @return string
     */
    public function getOriginalCustomerNationalIdNo() : ?string
    {
        return $this->originalCustomerNationalIdNo;
    }
    /**
     * The national id number of the customer at the point of order creation
     *
     * @param string $originalCustomerNationalIdNo
     *
     * @return self
     */
    public function setOriginalCustomerNationalIdNo(?string $originalCustomerNationalIdNo) : self
    {
        $this->originalCustomerNationalIdNo = $originalCustomerNationalIdNo;
        return $this;
    }
    /**
     * The VAT number of the customer at the point of order creation
     *
     * @return string
     */
    public function getOriginalCustomerVatNo() : ?string
    {
        return $this->originalCustomerVatNo;
    }
    /**
     * The VAT number of the customer at the point of order creation
     *
     * @param string $originalCustomerVatNo
     *
     * @return self
     */
    public function setOriginalCustomerVatNo(?string $originalCustomerVatNo) : self
    {
        $this->originalCustomerVatNo = $originalCustomerVatNo;
        return $this;
    }
    /**
     * Payment fee
     *
     * @return float
     */
    public function getPaymentFee() : ?float
    {
        return $this->paymentFee;
    }
    /**
     * Payment fee
     *
     * @param float $paymentFee
     *
     * @return self
     */
    public function setPaymentFee(?float $paymentFee) : self
    {
        $this->paymentFee = $paymentFee;
        return $this;
    }
    /**
     * The ID of the orders payment method
     *
     * @return int
     */
    public function getPaymentMethodId() : ?int
    {
        return $this->paymentMethodId;
    }
    /**
     * The ID of the orders payment method
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
     * The ID code of the payment method.
     *
     * @return string
     */
    public function getPaymentMethodIdCode() : ?string
    {
        return $this->paymentMethodIdCode;
    }
    /**
     * The ID code of the payment method.
     *
     * @param string $paymentMethodIdCode
     *
     * @return self
     */
    public function setPaymentMethodIdCode(?string $paymentMethodIdCode) : self
    {
        $this->paymentMethodIdCode = $paymentMethodIdCode;
        return $this;
    }
    /**
     * Title of the orders payment method
     *
     * @return string
     */
    public function getPaymentMethodName() : ?string
    {
        return $this->paymentMethodName;
    }
    /**
     * Title of the orders payment method
     *
     * @param string $paymentMethodName
     *
     * @return self
     */
    public function setPaymentMethodName(?string $paymentMethodName) : self
    {
        $this->paymentMethodName = $paymentMethodName;
        return $this;
    }
    /**
     * Reference to the payment methods payment transaction
     *
     * @return string
     */
    public function getPaymentReference() : ?string
    {
        return $this->paymentReference;
    }
    /**
     * Reference to the payment methods payment transaction
     *
     * @param string $paymentReference
     *
     * @return self
     */
    public function setPaymentReference(?string $paymentReference) : self
    {
        $this->paymentReference = $paymentReference;
        return $this;
    }
    /**
     * Status of the payment methods payment transaction
     *
     * @return string
     */
    public function getPaymentStatus() : ?string
    {
        return $this->paymentStatus;
    }
    /**
     * Status of the payment methods payment transaction
     *
     * @param string $paymentStatus
     *
     * @return self
     */
    public function setPaymentStatus(?string $paymentStatus) : self
    {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }
    /**
     * The VAT rate of the paymentFee in percent
     *
     * @return float
     */
    public function getPaymentVatRate() : ?float
    {
        return $this->paymentVatRate;
    }
    /**
     * The VAT rate of the paymentFee in percent
     *
     * @param float $paymentVatRate
     *
     * @return self
     */
    public function setPaymentVatRate(?float $paymentVatRate) : self
    {
        $this->paymentVatRate = $paymentVatRate;
        return $this;
    }
    /**
     * Shipping cost
     *
     * @return float
     */
    public function getShippingCost() : ?float
    {
        return $this->shippingCost;
    }
    /**
     * Shipping cost
     *
     * @param float $shippingCost
     *
     * @return self
     */
    public function setShippingCost(?float $shippingCost) : self
    {
        $this->shippingCost = $shippingCost;
        return $this;
    }
    /**
     * The ID of the orders shipping method
     *
     * @return int
     */
    public function getShippingMethodId() : ?int
    {
        return $this->shippingMethodId;
    }
    /**
     * The ID of the orders shipping method
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
     * Title of the orders shipping method
     *
     * @return string
     */
    public function getShippingMethodName() : ?string
    {
        return $this->shippingMethodName;
    }
    /**
     * Title of the orders shipping method
     *
     * @param string $shippingMethodName
     *
     * @return self
     */
    public function setShippingMethodName(?string $shippingMethodName) : self
    {
        $this->shippingMethodName = $shippingMethodName;
        return $this;
    }
    /**
     * The ID of the tracking number type. Types are available via: GET /shipping-tracker-types
     *
     * @return int
     */
    public function getShippingTrackerType() : ?int
    {
        return $this->shippingTrackerType;
    }
    /**
     * The ID of the tracking number type. Types are available via: GET /shipping-tracker-types
     *
     * @param int $shippingTrackerType
     *
     * @return self
     */
    public function setShippingTrackerType(?int $shippingTrackerType) : self
    {
        $this->shippingTrackerType = $shippingTrackerType;
        return $this;
    }
    /**
     * The shipping tracking number. Has to be in the format that is used for the chosen tracking type (please contact the freight forwarder regarding this).
     *
     * @return string
     */
    public function getShippingTrackingNo() : ?string
    {
        return $this->shippingTrackingNo;
    }
    /**
     * The shipping tracking number. Has to be in the format that is used for the chosen tracking type (please contact the freight forwarder regarding this).
     *
     * @param string $shippingTrackingNo
     *
     * @return self
     */
    public function setShippingTrackingNo(?string $shippingTrackingNo) : self
    {
        $this->shippingTrackingNo = $shippingTrackingNo;
        return $this;
    }
    /**
     * The VAT rate of the shippingCost in percent
     *
     * @return float
     */
    public function getShippingVatRate() : ?float
    {
        return $this->shippingVatRate;
    }
    /**
     * The VAT rate of the shippingCost in percent
     *
     * @param float $shippingVatRate
     *
     * @return self
     */
    public function setShippingVatRate(?float $shippingVatRate) : self
    {
        $this->shippingVatRate = $shippingVatRate;
        return $this;
    }
    /**
     * The shops country code at the point of order creation
     *
     * @return string
     */
    public function getShopCountryCode() : ?string
    {
        return $this->shopCountryCode;
    }
    /**
     * The shops country code at the point of order creation
     *
     * @param string $shopCountryCode
     *
     * @return self
     */
    public function setShopCountryCode(?string $shopCountryCode) : self
    {
        $this->shopCountryCode = $shopCountryCode;
        return $this;
    }
    /**
     * 
     *
     * @return OrderStatusModelItem
     */
    public function getStatus() : ?OrderStatusModelItem
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param OrderStatusModelItem $status
     *
     * @return self
     */
    public function setStatus(?OrderStatusModelItem $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The ID of the orders status
     *
     * @return int
     */
    public function getStatusId() : ?int
    {
        return $this->statusId;
    }
    /**
     * The ID of the orders status
     *
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId(?int $statusId) : self
    {
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * The total order amount
     *
     * @return float
     */
    public function getTotalAmount() : ?float
    {
        return $this->totalAmount;
    }
    /**
     * The total order amount
     *
     * @param float $totalAmount
     *
     * @return self
     */
    public function setTotalAmount(?float $totalAmount) : self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }
    /**
     * The total order amount, in the shops base currency
     *
     * @return float
     */
    public function getTotalAmountInBaseCurrency() : ?float
    {
        return $this->totalAmountInBaseCurrency;
    }
    /**
     * The total order amount, in the shops base currency
     *
     * @param float $totalAmountInBaseCurrency
     *
     * @return self
     */
    public function setTotalAmountInBaseCurrency(?float $totalAmountInBaseCurrency) : self
    {
        $this->totalAmountInBaseCurrency = $totalAmountInBaseCurrency;
        return $this;
    }
    /**
     * The total order VAT amount
     *
     * @return float
     */
    public function getTotalVat() : ?float
    {
        return $this->totalVat;
    }
    /**
     * The total order VAT amount
     *
     * @param float $totalVat
     *
     * @return self
     */
    public function setTotalVat(?float $totalVat) : self
    {
        $this->totalVat = $totalVat;
        return $this;
    }
    /**
     * The total VAT amount, in the shops base currency
     *
     * @return float
     */
    public function getTotalVatInBaseCurrency() : ?float
    {
        return $this->totalVatInBaseCurrency;
    }
    /**
     * The total VAT amount, in the shops base currency
     *
     * @param float $totalVatInBaseCurrency
     *
     * @return self
     */
    public function setTotalVatInBaseCurrency(?float $totalVatInBaseCurrency) : self
    {
        $this->totalVatInBaseCurrency = $totalVatInBaseCurrency;
        return $this;
    }
    /**
     * The total weight of the order in kg. This field is a calculated summary of all order items
     *
     * @return float
     */
    public function getTotalWeight() : ?float
    {
        return $this->totalWeight;
    }
    /**
     * The total weight of the order in kg. This field is a calculated summary of all order items
     *
     * @param float $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(?float $totalWeight) : self
    {
        $this->totalWeight = $totalWeight;
        return $this;
    }
}