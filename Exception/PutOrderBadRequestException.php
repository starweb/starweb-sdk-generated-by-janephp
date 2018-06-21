<?php

namespace Starweb\Sdk\Exception;

class PutOrderBadRequestException extends \RuntimeException implements ClientException
{
    private $errorModel;
    function __construct(\Starweb\Sdk\Model\ErrorModel $errorModel)
    {
        parent::__construct('Bad request', 400);
        $this->errorModel = $errorModel;
    }
    function getErrorModel()
    {
        return $this->errorModel;
    }
}