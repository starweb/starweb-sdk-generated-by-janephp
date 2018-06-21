<?php

namespace Starweb\Sdk\Exception;

class DeleteOrderExternalServiceNotFoundException extends \RuntimeException implements ClientException
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