<?php

namespace Starweb\Sdk\Endpoint;

class PatchProductStockStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductStockStatusModel $body Product stock status data
     */
    function __construct(\Starweb\Sdk\Model\ProductStockStatusModel $body)
    {
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PATCH';
    }
    function getUri() : string
    {
        return '/product-stock-statuses/{stockStatusId}';
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
     * @throws \Starweb\Sdk\Exception\PatchProductStockStatusBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchProductStockStatusNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductStockStatusModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ProductStockStatusModelItem', 'json');
        }
        if (400 === $status) {
            throw new \Starweb\Sdk\Exception\PatchProductStockStatusBadRequestException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status) {
            throw new \Starweb\Sdk\Exception\PatchProductStockStatusNotFoundException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
    }
}