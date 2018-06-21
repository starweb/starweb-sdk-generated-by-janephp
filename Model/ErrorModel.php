<?php

namespace Starweb\Sdk\Model;

class ErrorModel
{
    /**
     * An error code for this type of error
     *
     * @var string
     */
    protected $error;
    /**
     * A human readable description of the error
     *
     * @var string
     */
    protected $errorDescription;
    /**
     * An error code for this type of error
     *
     * @return string
     */
    public function getError() : ?string
    {
        return $this->error;
    }
    /**
     * An error code for this type of error
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(?string $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * A human readable description of the error
     *
     * @return string
     */
    public function getErrorDescription() : ?string
    {
        return $this->errorDescription;
    }
    /**
     * A human readable description of the error
     *
     * @param string $errorDescription
     *
     * @return self
     */
    public function setErrorDescription(?string $errorDescription) : self
    {
        $this->errorDescription = $errorDescription;
        return $this;
    }
}