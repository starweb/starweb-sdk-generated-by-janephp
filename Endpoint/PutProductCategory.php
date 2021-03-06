<?php

namespace Starweb\Sdk\Endpoint;

class PutProductCategory extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductCategoryModel $body Product category data
     */
    function __construct(\Starweb\Sdk\Model\ProductCategoryModel $body)
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
        return '/product-categories/{categoryId}';
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
     * @throws \Starweb\Sdk\Exception\PutProductCategoryBadRequestException
     * @throws \Starweb\Sdk\Exception\PutProductCategoryNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductCategoryModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ProductCategoryModelItem', 'json');
        }
        if (400 === $status) {
            throw new \Starweb\Sdk\Exception\PutProductCategoryBadRequestException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status) {
            throw new \Starweb\Sdk\Exception\PutProductCategoryNotFoundException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
    }
}