<?php

namespace Starweb\Sdk\Endpoint;

class PatchProductsCategoryLink extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductCategoryLinkModel $body Product category link data
     */
    function __construct(\Starweb\Sdk\Model\ProductCategoryLinkModel $body)
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
        return '/products/{productId}/categories/{categoryId}';
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
     * @throws \Starweb\Sdk\Exception\PatchProductsCategoryLinkBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchProductsCategoryLinkNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductCategoryLinkModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ProductCategoryLinkModelItem', 'json');
        }
        if (400 === $status) {
            throw new \Starweb\Sdk\Exception\PatchProductsCategoryLinkBadRequestException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status) {
            throw new \Starweb\Sdk\Exception\PatchProductsCategoryLinkNotFoundException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
    }
}