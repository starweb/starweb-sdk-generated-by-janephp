<?php

namespace Starweb\Sdk\Endpoint;

class ListCustomers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
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
     */
    function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return '/customers';
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('page', 'sortBy', 'sortOrder', 'createdSince', 'updatedSince', 'includeWithoutAccount', 'include'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('sortBy', array('string'));
        $optionsResolver->setAllowedTypes('sortOrder', array('string'));
        $optionsResolver->setAllowedTypes('createdSince', array('string'));
        $optionsResolver->setAllowedTypes('updatedSince', array('string'));
        $optionsResolver->setAllowedTypes('includeWithoutAccount', array('bool'));
        $optionsResolver->setAllowedTypes('include', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Sdk\Exception\ListCustomersBadRequestException
     *
     * @return null|\Starweb\Sdk\Model\CustomerModelCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Starweb\\Sdk\\Model\\CustomerModelCollection', 'json');
        }
        if (400 === $status) {
            throw new \Starweb\Sdk\Exception\ListCustomersBadRequestException($serializer->deserialize($body, 'Starweb\\Sdk\\Model\\ErrorModel', 'json'));
        }
    }
}