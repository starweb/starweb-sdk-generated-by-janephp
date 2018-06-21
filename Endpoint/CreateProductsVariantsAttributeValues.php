<?php

namespace Starweb\Sdk\Endpoint;

class CreateProductsVariantsAttributeValues extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantAttributeValueModelUpdatable $body Attribute value data
     */
    function __construct(\Starweb\Sdk\Model\ProductVariantAttributeValueModelUpdatable $body)
    {
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'POST';
    }
    function getUri() : string
    {
        return '/product-attributes/{attributeId}/values';
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
     * @throws \Starweb\Sdk\Exception\CreateProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantAttributeValueModelCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ProductVariantAttributeValueModelCollection', 'json');
        }
        if (400 === $status) {
            throw new \Starweb\Sdk\Exception\CreateProductsVariantsAttributeValuesBadRequestException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
    }
}