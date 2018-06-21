<?php

namespace Starweb\Sdk;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\CurrencyCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrencies(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetCurrencies(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetCurrencyNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\CurrencyModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrency(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetCurrency(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\CustomerAddedTagModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerTags(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetCustomerTags(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetCustomerTagNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\CustomerAddedTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerTag(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetCustomerTag(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page The page of customers to return
     *     @var string $sortBy Sort the result using a specified field. customerId is default. Valid options are: customerId
     *     @var string $sortOrder ASC for an ascending sort order; or DESC for a descending sort order. DESC is default
     *     @var string $createdSince Use this to only fetch customers that has been created since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var string $updatedSince Use this to only fetch customers that has been modified since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var bool $includeWithoutAccount Use this to also include customers without an account
     *     @var string $include If you want to include child data in the result. Example: ?include=tags (to include customer tags); ?include=tags,addresses (to include both customer tags and addresses). Available includes: tags, externalServices, addresses
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListCustomersBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\CustomerModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listCustomers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListCustomers($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\CustomerUpdateModel $body Customer data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateCustomerBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\CustomerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createCustomer(\Starweb\Sdk\Model\CustomerUpdateModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateCustomer($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteCustomer(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=tags (to include customer tags); ?include=tags,addresses (to include both customer tags and addresses). Available includes: tags, externalServices, addresses
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetCustomerNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\CustomerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomer(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetCustomer($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\CustomerUpdateModel $body Customer data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchCustomerBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchCustomerNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\CustomerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchCustomer(\Starweb\Sdk\Model\CustomerUpdateModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchCustomer($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\CustomerUpdateModel $body Customer data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutCustomerBadRequestException
     * @throws \Starweb\Sdk\Exception\PutCustomerNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\CustomerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomer(\Starweb\Sdk\Model\CustomerUpdateModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutCustomer($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\CustomerAddressesModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerGroups(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetCustomerGroups(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\RemoveAddressFromCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removeAddressFromCustomer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\RemoveAddressFromCustomer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetCustomerAddressNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\CustomerAddressesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetCustomerAddress(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\AddressModel $body Address data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchCustomerAddressBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchCustomerAddressNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\CustomerAddressesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchCustomerAddress(\Starweb\Sdk\Model\AddressModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchCustomerAddress($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\AddressModel $body Address data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutCustomerAddressBadRequestException
     * @throws \Starweb\Sdk\Exception\PutCustomerAddressNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\CustomerAddressesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomerAddress(\Starweb\Sdk\Model\AddressModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutCustomerAddress($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\CustomerExternalServicesModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerExternalServices(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetCustomerExternalServices(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetCustomerExternalServiceNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\CustomerExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerExternalService(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetCustomerExternalService(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\CustomerAddedTagModel $body Customer tag data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\AddTagToCustomerBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\CustomerAddedTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function addTagToCustomer(\Starweb\Sdk\Model\CustomerAddedTagModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\AddTagToCustomer($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\RemoveTagFromCustomerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removeTagFromCustomer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\RemoveTagFromCustomer(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\CustomerAddedTagModel $body Customer tag data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchTagOnCustomerByBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchTagOnCustomerByNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\CustomerAddedTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchTagOnCustomerBy(\Starweb\Sdk\Model\CustomerAddedTagModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchTagOnCustomerBy($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\CustomerAddedTagModel $body Customer tag data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutTagOnCustomerBadRequestException
     * @throws \Starweb\Sdk\Exception\PutTagOnCustomerNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\CustomerAddedTagModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putTagOnCustomer(\Starweb\Sdk\Model\CustomerAddedTagModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutTagOnCustomer($body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page The page of media files to return
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\MediaFileModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getMediaFiles(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetMediaFiles($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateMediaFileBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\MediaFileModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createMediaFile(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateMediaFile(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteMediaFileNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMediaFile(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteMediaFile(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetMediaFileNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\MediaFileModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getMediaFile(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetMediaFile(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchMediaFileBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchMediaFileNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\MediaFileModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchMediaFile(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchMediaFile(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutMediaFileBadRequestException
     * @throws \Starweb\Sdk\Exception\PutMediaFileNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\MediaFileModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putMediaFile(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutMediaFile(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\OrderStatusModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderStatuses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetOrderStatuses(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\OrderStatusModel $body Order status data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateOrderStatusBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\OrderStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createOrderStatus(\Starweb\Sdk\Model\OrderStatusModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateOrderStatus($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteOrderStatusForbiddenException
     * @throws \Starweb\Sdk\Exception\DeleteOrderStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteOrderStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetOrderStatusNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetOrderStatus(), $fetch);
    }
    /**
     * NB! You are not allowed to update standard order statuses (all statuses with an idCode set)
     *
     * @param \Starweb\Sdk\Model\OrderStatusModel $body Order status data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchOrderStatusBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchOrderStatusForbiddenException
     * @throws \Starweb\Sdk\Exception\PatchOrderStatusNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrderStatus(\Starweb\Sdk\Model\OrderStatusModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchOrderStatus($body), $fetch);
    }
    /**
     * NB! You are not allowed to update standard order statuses (all statuses with an idCode set)
     *
     * @param \Starweb\Sdk\Model\OrderStatusModel $body Order status data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutOrderStatusBadRequestException
     * @throws \Starweb\Sdk\Exception\PutOrderStatusForbiddenException
     * @throws \Starweb\Sdk\Exception\PutOrderStatusNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putOrderStatus(\Starweb\Sdk\Model\OrderStatusModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutOrderStatus($body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page The page of orders to return
     *     @var bool $includeNonCompletePayments Set to true if you want to fetch orders that has not been completed yet. An order is ”completed” when the payment step has been completed successfully.
     *     @var string $filterQuery A filter query to filter the fetched orders by. Will search in fields such as: customer/company name, order items sku and description, etc
     *     @var int $filterPaymentMethodId Only fetch orders with a certain payment method Id
     *     @var int $filterShippingMethodId Only fetch orders with a certain shipping method Id
     *     @var string $ordersCreatedAfter Only fetch orders created after this timestamp (The time should be formatted using ISO-8601 and url encoded)
     *     @var string $ordersCreatedBefore Only fetch orders created before this timestamp (The time should be formatted using ISO-8601 and url encoded)
     *     @var int $statusFilter Only fetch orders with the specifiec order status. Use order status ID
     *     @var string $sortBy Sort the result using a specified field. orderId is default
     *     @var string $sortOrder ASC for an ascending sort order; or DESC for a descending sort order. DESC is default
     *     @var string $include If you want to include child data in the result. Example: ?include=items (to include order items) or ?include=items,externalServices (to include order items as well as external ids). Available includes: items, externalServices, status, customer, addresses
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListOrdersBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\OrderModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listOrders(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListOrders($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\OrderUpdateModel $body Order data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateOrderBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\OrderModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createOrder(\Starweb\Sdk\Model\OrderUpdateModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateOrder($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteOrderNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrder(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteOrder(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=items (to include order items) or ?include=items,externalServices (to include order items as well as external ids). Available includes: items, externalServices, status, customer, addresses
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetOrderNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrder(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetOrder($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\OrderUpdateModel $body Order data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchOrderBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchOrderNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrder(\Starweb\Sdk\Model\OrderUpdateModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchOrder($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\OrderUpdateModel $body Order data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutOrderBadRequestException
     * @throws \Starweb\Sdk\Exception\PutOrderNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putOrder(\Starweb\Sdk\Model\OrderUpdateModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutOrder($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\OrderAddressCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listOrderAddresses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListOrderAddresses(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteOrderAddressNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteOrderAddress(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetOrderAddressNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\AddressModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetOrderAddress(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\AddressModel $body Address data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchOrderAddressBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchOrderAddressNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\AddressModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrderAddress(\Starweb\Sdk\Model\AddressModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchOrderAddress($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\AddressModel $body Address data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutOrderAddressBadRequestException
     * @throws \Starweb\Sdk\Exception\PutOrderAddressNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\AddressModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putOrderAddress(\Starweb\Sdk\Model\AddressModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutOrderAddress($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\OrderCommentModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderComments(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetOrderComments(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetOrderCommentNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderCommentModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderComment(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetOrderComment(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\OrderExternalServiceModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderExternalServices(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetOrderExternalServices(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\OrderExternalServiceModel $body Order external service data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateOrderExternalServiceBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\OrderExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createOrderExternalService(\Starweb\Sdk\Model\OrderExternalServiceModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateOrderExternalService($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteOrderExternalServiceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderExternalService(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteOrderExternalService(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetOrderExternalServiceNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderExternalService(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetOrderExternalService(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\OrderExternalServiceModel $body Order external service data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchOrderExternalServiceBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchOrderExternalServiceNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrderExternalService(\Starweb\Sdk\Model\OrderExternalServiceModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchOrderExternalService($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\OrderExternalServiceModel $body Order external service data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutOrderExternalServiceBadRequestException
     * @throws \Starweb\Sdk\Exception\PutOrderExternalServiceNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderExternalServicesModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putOrderExternalService(\Starweb\Sdk\Model\OrderExternalServiceModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutOrderExternalService($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\OrderItemModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderItems(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetOrderItems(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\OrderItemModel $body Order item data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateOrderItemBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\OrderItemModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createOrderItem(\Starweb\Sdk\Model\OrderItemModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateOrderItem($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteOrderItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderItem(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteOrderItem(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetOrderItemNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderItemModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderItem(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetOrderItem(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\OrderItemModel $body Order item data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchOrderItemBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchOrderItemNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderItemModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrderItem(\Starweb\Sdk\Model\OrderItemModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchOrderItem($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\OrderItemModel $body Order item data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutOrderItemBadRequestException
     * @throws \Starweb\Sdk\Exception\PutOrderItemNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderItemModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putOrderItem(\Starweb\Sdk\Model\OrderItemModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutOrderItem($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\PaymentMethodModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentMethods(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetPaymentMethods(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetPaymentMethodNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\PaymentMethodModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentMethod(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetPaymentMethod(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\PricelistModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getPricelists(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetPricelists(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetPricelistNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\PricelistModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getPricelist(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetPricelist(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=attribute (to include the attribute the values belongs to). Available includes: attribute
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantAttributeValueModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsAttributeValues(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductsVariantsAttributeValues($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantAttributeModelUpdatable $body Attribute data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateAttributeBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createAttribute(\Starweb\Sdk\Model\ProductVariantAttributeModelUpdatable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateAttribute($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteAttributeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAttribute(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteAttribute(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=attribute (to include the attribute the values belongs to). Available includes: attribute
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductsVariantsAttributeValueNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantAttributeValueModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariantsAttributeValue(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductsVariantsAttributeValue($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantAttributeModelUpdatable $body Attribute data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchAttributeBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchAttribute(\Starweb\Sdk\Model\ProductVariantAttributeModelUpdatable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchAttribute($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantAttributeModelUpdatable $body Attribute data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutAttributeBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putAttribute(\Starweb\Sdk\Model\ProductVariantAttributeModelUpdatable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutAttribute($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantAttributeValueModelUpdatable $body Attribute value data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantAttributeValueModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsVariantsAttributeValues(\Starweb\Sdk\Model\ProductVariantAttributeValueModelUpdatable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateProductsVariantsAttributeValues($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteAttributeValueNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAttributeValue(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteAttributeValue(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantAttributeValueModelUpdatable $body Attribute value data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantAttributeValueModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsVariantsAttributeValues(\Starweb\Sdk\Model\ProductVariantAttributeValueModelUpdatable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchProductsVariantsAttributeValues($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantAttributeValueModelUpdatable $body Attribute value data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantAttributeValueModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsVariantsAttributeValues(\Starweb\Sdk\Model\ProductVariantAttributeValueModelUpdatable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutProductsVariantsAttributeValues($body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page The page of categories to return
     *     @var string $externalId Use to fetch categories with a specific external id
     *     @var bool $filterVisible Only fetch categories visible to visitors
     *     @var string $include If you want to include child data in the result. Example: ?include=languages (to include language based data such as category names, description, etc). Available includes: languages
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductCategoriesBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductCategoryModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductCategories(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductCategories($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductCategoryModel $body Product category data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateProductCategoryBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductCategoryModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductCategory(\Starweb\Sdk\Model\ProductCategoryModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateProductCategory($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteProductCategoryNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductCategory(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteProductCategory(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=languages (to include language based data such as category names, description, etc). Available includes: languages
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductCategoryNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductCategoryModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductCategory(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductCategory($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductCategoryModel $body Product category data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchProductCategoryBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchProductCategoryNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductCategoryModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductCategory(\Starweb\Sdk\Model\ProductCategoryModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchProductCategory($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductCategoryModel $body Product category data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutProductCategoryBadRequestException
     * @throws \Starweb\Sdk\Exception\PutProductCategoryNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductCategoryModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductCategory(\Starweb\Sdk\Model\ProductCategoryModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutProductCategory($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductManufacturersBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductManufacturerModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductManufacturers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductManufacturers(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductManufacturerNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductManufacturerModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductManufacturer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductManufacturer(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductMetaDataTypesBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductMetaDataTypeModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductMetaDataTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductMetaDataTypes(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductMetaDataTypeNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductMetaDataTypeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductMetaDataType(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductMetaDataType(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductStockStatsesBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductStockStatusModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductStockStatses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductStockStatses(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductStockStatusModel $body Product stock status data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateProductStockStatusBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductStockStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductStockStatus(\Starweb\Sdk\Model\ProductStockStatusModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateProductStockStatus($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteProductStockStatusNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductStockStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteProductStockStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductStockStatusNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductStockStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductStockStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductStockStatus(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductStockStatusModel $body Product stock status data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchProductStockStatusBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchProductStockStatusNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductStockStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductStockStatus(\Starweb\Sdk\Model\ProductStockStatusModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchProductStockStatus($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductStockStatusModel $body Product stock status data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutProductStockStatusBadRequestException
     * @throws \Starweb\Sdk\Exception\PutProductStockStatusNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductStockStatusModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductStockStatus(\Starweb\Sdk\Model\ProductStockStatusModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutProductStockStatus($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductUnitsBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductUnitModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductUnits(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductUnits(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductUnitNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductUnitModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductUnit(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductUnit(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page The page of products to return
     *     @var string $createdSince Use this to only fetch products that has been created since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var string $updatedSince Use this to only fetch products that has been modified since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var string $include If you want to include child data in the result. Example: ?include=primaryVariant (to include primary product variant);?include=primaryVariant,languages (to include both primary product variant and languages). Available includes: primaryVariant, primaryVariant.prices, primaryVariant.attributes, attributes, mediaFiles, languages, vatRates, categories, unit, metaData. NOTE! Only one variant is included in result for performance reason. To fetch all variants, instead use /products/x/variants(unnecessary if hasSeveralVariants is false)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductsBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProducts(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProducts($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductModelUpdatable $body Product data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateProductBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProduct(\Starweb\Sdk\Model\ProductModelUpdatable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateProduct($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteProductNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProduct(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteProduct(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=variants (to include product variants); ?include=variants,languages (to include both product variants and languages). Available includes: primaryVariant, primaryVariant.prices, mediaFiles, languages, vatRates, categories, unit, metaData. NOTE! Only one variant is included in result for performance reason. To fetch all variants, instead use /products/x/variants (unnecessary if hasSeveralVariants is false)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProduct(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProduct($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductModelUpdatable $body Product data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchProductBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchProductNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProduct(\Starweb\Sdk\Model\ProductModelUpdatable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchProduct($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductModelUpdatable $body Product data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutProductBadRequestException
     * @throws \Starweb\Sdk\Exception\PutProductNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProduct(\Starweb\Sdk\Model\ProductModelUpdatable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutProduct($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductsAttributesNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantAttributeModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsAttributes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductsAttributes(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductsAttributeNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantAttributeModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsAttribute(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductsAttribute(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductsCategoryLinksBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductCategoryLinkModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsCategoryLinks(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductsCategoryLinks(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductCategoryLinkModel $body Product category link data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateProductsCategoryLinkBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductCategoryLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsCategoryLink(\Starweb\Sdk\Model\ProductCategoryLinkModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateProductsCategoryLink($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteProductsCategoryLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsCategoryLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteProductsCategoryLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductsCategoryLinkNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductCategoryLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsCategoryLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductsCategoryLink(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductCategoryLinkModel $body Product category link data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchProductsCategoryLinkBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchProductsCategoryLinkNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductCategoryLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsCategoryLink(\Starweb\Sdk\Model\ProductCategoryLinkModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchProductsCategoryLink($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductCategoryLinkModel $body Product category link data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutProductsCategoryLinkBadRequestException
     * @throws \Starweb\Sdk\Exception\PutProductsCategoryLinkNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductCategoryLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsCategoryLink(\Starweb\Sdk\Model\ProductCategoryLinkModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutProductsCategoryLink($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductsLanguagesBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductLanguageModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsLanguages(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductsLanguages(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductLanguageModel $body Product language data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateProductsLanguageBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductLanguageModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsLanguage(\Starweb\Sdk\Model\ProductLanguageModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateProductsLanguage($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteProductsLanguageNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsLanguage(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteProductsLanguage(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductsLanguageNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductLanguageModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsLanguage(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductsLanguage(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductLanguageModel $body Product language data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchProductsLanguageBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchProductsLanguageNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductLanguageModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsLanguage(\Starweb\Sdk\Model\ProductLanguageModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchProductsLanguage($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductLanguageModel $body Product language data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutProductsLanguageBadRequestException
     * @throws \Starweb\Sdk\Exception\PutProductsLanguageNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductLanguageModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsLanguage(\Starweb\Sdk\Model\ProductLanguageModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutProductsLanguage($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductsMediaFileLinksBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductMediaFileLinkModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsMediaFileLinks(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductsMediaFileLinks(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductMediaFileLinkModel $body Product media file link data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateProductsMediaFileLinkBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductMediaFileLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsMediaFileLink(\Starweb\Sdk\Model\ProductMediaFileLinkModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateProductsMediaFileLink($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteProductsMediaFileLinkNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsMediaFileLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteProductsMediaFileLink(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductsMediaFileLinkNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductMediaFileLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsMediaFileLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductsMediaFileLink(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductMediaFileLinkModel $body Product media file link data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchProductsMediaFileLinkBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchProductsMediaFileLinkNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductMediaFileLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsMediaFileLink(\Starweb\Sdk\Model\ProductMediaFileLinkModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchProductsMediaFileLink($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductMediaFileLinkModel $body Product media file link data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutProductsMediaFileLinkBadRequestException
     * @throws \Starweb\Sdk\Exception\PutProductsMediaFileLinkNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductMediaFileLinkModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsMediaFileLink(\Starweb\Sdk\Model\ProductMediaFileLinkModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutProductsMediaFileLink($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductsMetaDataBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductMetaDataModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsMetaData(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductsMetaData(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductMetaDataModelUpdatable $body Product meta data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateProductsMetaDataBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductMetaDataModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductsMetaData(\Starweb\Sdk\Model\ProductMetaDataModelUpdatable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateProductsMetaData($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteProductsMetaDataNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsMetaData(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteProductsMetaData(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductsMetaDataNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductMetaDataModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsMetaData(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductsMetaData(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductMetaDataModelUpdatable $body Product meta data data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchProductsMetaDataBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchProductsMetaDataNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductMetaDataModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsMetaData(\Starweb\Sdk\Model\ProductMetaDataModelUpdatable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchProductsMetaData($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductMetaDataModelUpdatable $body Product meta data data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutProductsMetaDataBadRequestException
     * @throws \Starweb\Sdk\Exception\PutProductsMetaDataNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductMetaDataModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsMetaData(\Starweb\Sdk\Model\ProductMetaDataModelUpdatable $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutProductsMetaData($body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page The page of customers to return
     *     @var string $include If you want to include child data in the result. Example: ?include=prices (to include variants prices). Available includes: prices, attributes, attributes.attribute
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductsVariantsBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariants(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductsVariants($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantModel $body Product variant data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateProductVariantBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductVariant(\Starweb\Sdk\Model\ProductVariantModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateProductVariant($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteProductsVariantNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVariant(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteProductsVariant(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=prices (to include variants prices). Available includes: prices,  attributes, attributes.attribute
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductsVariantNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariant(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductsVariant($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantModel $body Products variant data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchProductsVariantBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchProductsVariantNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsVariant(\Starweb\Sdk\Model\ProductVariantModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchProductsVariant($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantModel $body Products variant data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutProductsVariantBadRequestException
     * @throws \Starweb\Sdk\Exception\PutProductsVariantNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsVariant(\Starweb\Sdk\Model\ProductVariantModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutProductsVariant($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductsVariantsPricelistPricesBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantPriceModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVariantsPricelistPrices(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductsVariantsPricelistPrices(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantPriceModel $body Oricelist price data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateProductVariantPricelistPriceBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantPriceModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductVariantPricelistPrice(\Starweb\Sdk\Model\ProductVariantPriceModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateProductVariantPricelistPrice($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVariantsPricelistPrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteProductsVariantsPricelistPrice(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantPriceModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVariantsPricelistPrice(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductsVariantsPricelistPrice(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantPriceModel $body Pricelist price data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchProductsVariantsPricelistPriceBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantPriceModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsVariantsPricelistPrice(\Starweb\Sdk\Model\ProductVariantPriceModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchProductsVariantsPricelistPrice($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantPriceModel $body Pricelist price data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutProductsVariantsPricelistPriceBadRequestException
     * @throws \Starweb\Sdk\Exception\PutProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantPriceModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsVariantsPricelistPrice(\Starweb\Sdk\Model\ProductVariantPriceModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutProductsVariantsPricelistPrice($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\ListProductsVatRatesBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVatRateModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function listProductsVatRates(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\ListProductsVatRates(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVatRateModel $body Product vat rate data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\CreateProductVatRateBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVatRateModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function createProductVatRate(\Starweb\Sdk\Model\ProductVatRateModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\CreateProductVatRate($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\DeleteProductsVatRateNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsVatRate(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\DeleteProductsVatRate(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetProductsVatRateNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductVatRateModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsVatRate(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetProductsVatRate(), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVatRateModel $body Products vat rate data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PatchProductsVatRateBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchProductsVatRateNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductVatRateModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function patchProductsVatRate(\Starweb\Sdk\Model\ProductVatRateModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PatchProductsVatRate($body), $fetch);
    }
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVatRateModel $body Products vat rate data
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\PutProductsVatRateBadRequestException
     * @throws \Starweb\Sdk\Exception\PutProductsVatRateNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductVatRateModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductsVatRate(\Starweb\Sdk\Model\ProductVatRateModel $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\PutProductsVatRate($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\ShippingMethodModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingMethods(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetShippingMethods(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetShippingMethodNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ShippingMethodModelItem|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingMethod(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetShippingMethod(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Starweb\Sdk\Model\ShippingTrackingTypeModelCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingTrackingTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetShippingTrackingTypes(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GetShopNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ShopItem|\Psr\Http\Message\ResponseInterface
     */
    public function getShop(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GetShop(), $fetch);
    }
    /**
     * 
     *
     * @param array $formParameters {
     *     @var string $grant_type The grant type to use for the request. At this time, only client_credentials is allowed
     *     @var string $client_id Your client id
     *     @var string $client_secret Your client secret
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Starweb\Sdk\Exception\GenerateFetchAccessTokenBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\TokenModel|\Psr\Http\Message\ResponseInterface
     */
    public function generateFetchAccessToken(array $formParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Sdk\Endpoint\GenerateFetchAccessToken($formParameters), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri('https://{shopId}.starwebserver.se/api/v2');
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(\Starweb\Sdk\Normalizer\NormalizerFactory::create(), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}