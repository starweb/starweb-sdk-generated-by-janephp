<?php

namespace Starweb\Sdk\Model;

class CustomerModel
{
    /**
     * 
     *
     * @var CustomerTagModelCollection
     */
    protected $tags;
    /**
     * 
     *
     * @var CustomerAddressesModelCollection
     */
    protected $addresses;
    /**
     * If the customer is approved or not. Can be null if the customer is neither approved nor disapproved yet
     *
     * @var bool
     */
    protected $approved;
    /**
     * A timestamp of when the customer was was approved/disapproved. The time should be formatted using ISO-8601
     *
     * @var string
     */
    protected $approvedAt;
    /**
     * A timestamp of when the customer was created. The time should be formatted using ISO-8601
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
     *
     * @var string
     */
    protected $customInfo1;
    /**
     * Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
     *
     * @var string
     */
    protected $customInfo2;
    /**
     * The customers ID
     *
     * @var int
     */
    protected $customerId;
    /**
     * Email address of the customer
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var CustomerExternalServicesModelCollection
     */
    protected $externalServices;
    /**
     * A timestamp of when the customer was modified. The time should be formatted using ISO-8601
     *
     * @var string
     */
    protected $modifiedAt;
    /**
     * National id number of the customer
     *
     * @var string
     */
    protected $nationalIdNo;
    /**
     * The id of the pricelist the customer is linked to (or null if the customer has no specific pricelist linked)
     *
     * @var int
     */
    protected $pricelistId;
    /**
     * The type of customer this is. Either: ”person” or ”company”
     *
     * @var string
     */
    protected $type;
    /**
     * VAT number of the customer
     *
     * @var string
     */
    protected $vatNo;
    /**
     * 
     *
     * @return CustomerTagModelCollection
     */
    public function getTags() : ?CustomerTagModelCollection
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param CustomerTagModelCollection $tags
     *
     * @return self
     */
    public function setTags(?CustomerTagModelCollection $tags) : self
    {
        $this->tags = $tags;
        return $this;
    }
    /**
     * 
     *
     * @return CustomerAddressesModelCollection
     */
    public function getAddresses() : ?CustomerAddressesModelCollection
    {
        return $this->addresses;
    }
    /**
     * 
     *
     * @param CustomerAddressesModelCollection $addresses
     *
     * @return self
     */
    public function setAddresses(?CustomerAddressesModelCollection $addresses) : self
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * If the customer is approved or not. Can be null if the customer is neither approved nor disapproved yet
     *
     * @return bool
     */
    public function getApproved() : ?bool
    {
        return $this->approved;
    }
    /**
     * If the customer is approved or not. Can be null if the customer is neither approved nor disapproved yet
     *
     * @param bool $approved
     *
     * @return self
     */
    public function setApproved(?bool $approved) : self
    {
        $this->approved = $approved;
        return $this;
    }
    /**
     * A timestamp of when the customer was was approved/disapproved. The time should be formatted using ISO-8601
     *
     * @return string
     */
    public function getApprovedAt() : ?string
    {
        return $this->approvedAt;
    }
    /**
     * A timestamp of when the customer was was approved/disapproved. The time should be formatted using ISO-8601
     *
     * @param string $approvedAt
     *
     * @return self
     */
    public function setApprovedAt(?string $approvedAt) : self
    {
        $this->approvedAt = $approvedAt;
        return $this;
    }
    /**
     * A timestamp of when the customer was created. The time should be formatted using ISO-8601
     *
     * @return string
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * A timestamp of when the customer was created. The time should be formatted using ISO-8601
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
     * Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
     *
     * @return string
     */
    public function getCustomInfo1() : ?string
    {
        return $this->customInfo1;
    }
    /**
     * Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
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
     * Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
     *
     * @return string
     */
    public function getCustomInfo2() : ?string
    {
        return $this->customInfo2;
    }
    /**
     * Custom info saved to a customer. Can be linked to text fields on the customer registration page for additional data collection
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
     * The customers ID
     *
     * @return int
     */
    public function getCustomerId() : ?int
    {
        return $this->customerId;
    }
    /**
     * The customers ID
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
     * Email address of the customer
     *
     * @return string
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * Email address of the customer
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return CustomerExternalServicesModelCollection
     */
    public function getExternalServices() : ?CustomerExternalServicesModelCollection
    {
        return $this->externalServices;
    }
    /**
     * 
     *
     * @param CustomerExternalServicesModelCollection $externalServices
     *
     * @return self
     */
    public function setExternalServices(?CustomerExternalServicesModelCollection $externalServices) : self
    {
        $this->externalServices = $externalServices;
        return $this;
    }
    /**
     * A timestamp of when the customer was modified. The time should be formatted using ISO-8601
     *
     * @return string
     */
    public function getModifiedAt() : ?string
    {
        return $this->modifiedAt;
    }
    /**
     * A timestamp of when the customer was modified. The time should be formatted using ISO-8601
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
     * National id number of the customer
     *
     * @return string
     */
    public function getNationalIdNo() : ?string
    {
        return $this->nationalIdNo;
    }
    /**
     * National id number of the customer
     *
     * @param string $nationalIdNo
     *
     * @return self
     */
    public function setNationalIdNo(?string $nationalIdNo) : self
    {
        $this->nationalIdNo = $nationalIdNo;
        return $this;
    }
    /**
     * The id of the pricelist the customer is linked to (or null if the customer has no specific pricelist linked)
     *
     * @return int
     */
    public function getPricelistId() : ?int
    {
        return $this->pricelistId;
    }
    /**
     * The id of the pricelist the customer is linked to (or null if the customer has no specific pricelist linked)
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
     * The type of customer this is. Either: ”person” or ”company”
     *
     * @return string
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The type of customer this is. Either: ”person” or ”company”
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * VAT number of the customer
     *
     * @return string
     */
    public function getVatNo() : ?string
    {
        return $this->vatNo;
    }
    /**
     * VAT number of the customer
     *
     * @param string $vatNo
     *
     * @return self
     */
    public function setVatNo(?string $vatNo) : self
    {
        $this->vatNo = $vatNo;
        return $this;
    }
}