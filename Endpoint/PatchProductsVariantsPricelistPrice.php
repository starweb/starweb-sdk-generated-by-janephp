<?php

namespace Starweb\Sdk\Endpoint;

class PatchProductsVariantsPricelistPrice extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * 
     *
     * @param \Starweb\Sdk\Model\ProductVariantPriceModel $body Pricelist price data
     */
    function __construct(\Starweb\Sdk\Model\ProductVariantPriceModel $body)
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
        return '/products/{productId}/variants/{variantId}/prices/{pricelistId}';
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
     * @throws \Starweb\Sdk\Exception\PatchProductsVariantsPricelistPriceBadRequestException
     * @throws \Starweb\Sdk\Exception\PatchProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Starweb\Sdk\Model\ProductVariantPriceModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ProductVariantPriceModelItem', 'json');
        }
        if (400 === $status) {
            throw new \Starweb\Sdk\Exception\PatchProductsVariantsPricelistPriceBadRequestException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status) {
            throw new \Starweb\Sdk\Exception\PatchProductsVariantsPricelistPriceNotFoundException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
    }
}