<?php

namespace Starweb\Sdk\Model;

class ClientCredentialModel
{
    /**
     * Your client id
     *
     * @var string
     */
    protected $clientId;
    /**
     * Your client secret
     *
     * @var string
     */
    protected $clientSecret;
    /**
     * The grant type to use for the request. At this time, only client_credentials is allowed
     *
     * @var string
     */
    protected $grantType;
    /**
     * Your client id
     *
     * @return string
     */
    public function getClientId() : ?string
    {
        return $this->clientId;
    }
    /**
     * Your client id
     *
     * @param string $clientId
     *
     * @return self
     */
    public function setClientId(?string $clientId) : self
    {
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * Your client secret
     *
     * @return string
     */
    public function getClientSecret() : ?string
    {
        return $this->clientSecret;
    }
    /**
     * Your client secret
     *
     * @param string $clientSecret
     *
     * @return self
     */
    public function setClientSecret(?string $clientSecret) : self
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }
    /**
     * The grant type to use for the request. At this time, only client_credentials is allowed
     *
     * @return string
     */
    public function getGrantType() : ?string
    {
        return $this->grantType;
    }
    /**
     * The grant type to use for the request. At this time, only client_credentials is allowed
     *
     * @param string $grantType
     *
     * @return self
     */
    public function setGrantType(?string $grantType) : self
    {
        $this->grantType = $grantType;
        return $this;
    }
}