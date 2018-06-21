<?php

namespace Starweb\Sdk\Model;

class OrderExternalServicesModelItem
{
    /**
     * 
     *
     * @var OrderExternalServiceModel
     */
    protected $data;
    /**
     * 
     *
     * @return OrderExternalServiceModel
     */
    public function getData() : ?OrderExternalServiceModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderExternalServiceModel $data
     *
     * @return self
     */
    public function setData(?OrderExternalServiceModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}