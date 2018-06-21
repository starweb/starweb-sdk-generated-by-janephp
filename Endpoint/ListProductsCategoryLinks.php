<?php

namespace Starweb\Sdk\Endpoint;

class ListProductsCategoryLinks extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return '/products/{productId}/categories';
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Sdk\Exception\ListProductsCategoryLinksBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductCategoryLinkModelCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ProductCategoryLinkModelCollection', 'json');
        }
        if (400 === $status) {
            throw new \Starweb\Sdk\Exception\ListProductsCategoryLinksBadRequestException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
    }
}