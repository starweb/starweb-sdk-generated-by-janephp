<?php

namespace Starweb\Sdk\Endpoint;

class ListProductMetaDataTypes extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return '/product-meta-data-types';
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
     * @throws \Starweb\Sdk\Exception\ListProductMetaDataTypesBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\ProductMetaDataTypeModelCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ProductMetaDataTypeModelCollection', 'json');
        }
        if (400 === $status) {
            throw new \Starweb\Sdk\Exception\ListProductMetaDataTypesBadRequestException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
    }
}