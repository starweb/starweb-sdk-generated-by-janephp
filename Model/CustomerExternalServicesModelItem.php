<?php

namespace Starweb\Sdk\Model;

class CustomerExternalServicesModelItem
{
    /**
     * 
     *
     * @var CustomerExternalServicesModel
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerExternalServicesModel
     */
    public function getData() : ?CustomerExternalServicesModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerExternalServicesModel $data
     *
     * @return self
     */
    public function setData(?CustomerExternalServicesModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}