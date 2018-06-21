<?php

namespace Starweb\Sdk\Exception;

class PutOrderStatusForbiddenException extends \RuntimeException implements ClientException
{
    private $errorModel;
    function __construct(\Starweb\Sdk\Model\ErrorModel $errorModel)
    {
        parent::__construct('Bad request', 403);
        $this->errorModel = $errorModel;
    }
    function getErrorModel()
    {
        return $this->errorModel;
    }
}