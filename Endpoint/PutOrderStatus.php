<?php

namespace Starweb\Sdk\Endpoint;

class PutOrderStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * NB! You are not allowed to update standard order statuses (all statuses with an idCode set)
     *
     * @param \Starweb\Sdk\Model\OrderStatusModel $body Order status data
     */
    function __construct(\Starweb\Sdk\Model\OrderStatusModel $body)
    {
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return '/order-statuses/{orderStatusId}';
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Sdk\Exception\PutOrderStatusBadRequestException
     * @throws \Starweb\Sdk\Exception\PutOrderStatusForbiddenException
     * @throws \Starweb\Sdk\Exception\PutOrderStatusNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\OrderStatusModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Starweb\\Sdk\\Model\\OrderStatusModelItem', 'json');
        }
        if (400 === $status) {
            throw new \Starweb\Sdk\Exception\PutOrderStatusBadRequestException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
        if (403 === $status) {
            throw new \Starweb\Sdk\Exception\PutOrderStatusForbiddenException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status) {
            throw new \Starweb\Sdk\Exception\PutOrderStatusNotFoundException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
    }
}