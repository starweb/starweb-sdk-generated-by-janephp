<?php

namespace Starweb\Sdk\Model;

class CustomerTagModelCollection
{
    /**
     * A list of customer tags
     *
     * @var CustomerTagModel[]
     */
    protected $data;
    /**
     * A list of customer tags
     *
     * @return CustomerTagModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of customer tags
     *
     * @param CustomerTagModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}