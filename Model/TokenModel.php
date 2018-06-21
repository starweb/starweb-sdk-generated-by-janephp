<?php

namespace Starweb\Sdk\Model;

class TokenModel
{
    /**
     * The Access Token to use in future requests
     *
     * @var string
     */
    protected $accessToken;
    /**
     * The number of seconds until this access token expires
     *
     * @var int
     */
    protected $expiresIn;
    /**
     * The scope this access token is valid for
     *
     * @var string
     */
    protected $scope;
    /**
     * The Access Token to use in future requests
     *
     * @return string
     */
    public function getAccessToken() : ?string
    {
        return $this->accessToken;
    }
    /**
     * The Access Token to use in future requests
     *
     * @param string $accessToken
     *
     * @return self
     */
    public function setAccessToken(?string $accessToken) : self
    {
        $this->accessToken = $accessToken;
        return $this;
    }
    /**
     * The number of seconds until this access token expires
     *
     * @return int
     */
    public function getExpiresIn() : ?int
    {
        return $this->expiresIn;
    }
    /**
     * The number of seconds until this access token expires
     *
     * @param int $expiresIn
     *
     * @return self
     */
    public function setExpiresIn(?int $expiresIn) : self
    {
        $this->expiresIn = $expiresIn;
        return $this;
    }
    /**
     * The scope this access token is valid for
     *
     * @return string
     */
    public function getScope() : ?string
    {
        return $this->scope;
    }
    /**
     * The scope this access token is valid for
     *
     * @param string $scope
     *
     * @return self
     */
    public function setScope(?string $scope) : self
    {
        $this->scope = $scope;
        return $this;
    }
}