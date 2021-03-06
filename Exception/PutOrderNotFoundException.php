<?php

namespace Starweb\Sdk\Exception;

class PutOrderNotFoundException extends \RuntimeException implements ClientException
{
    private $errorModel;
    function __construct(\Starweb\Sdk\Model\ErrorModel $errorModel)
    {
        parent::__construct('Entity not found', 404);
        $this->errorModel = $errorModel;
    }
    function getErrorModel()
    {
        return $this->errorModel;
    }
}