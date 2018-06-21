<?php

namespace Starweb\Sdk\Model;

class CustomerAddedTagModelCollection
{
    /**
     * A list of customer tags
     *
     * @var CustomerAddedTagModel[]
     */
    protected $data;
    /**
     * A list of customer tags
     *
     * @return CustomerAddedTagModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of customer tags
     *
     * @param CustomerAddedTagModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}