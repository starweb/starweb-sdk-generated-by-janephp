<?php

namespace Starweb\Sdk\Model;

class OrderCommentModelCollection
{
    /**
     * A list of order comments
     *
     * @var OrderCommentModel[]
     */
    protected $data;
    /**
     * A list of order comments
     *
     * @return OrderCommentModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of order comments
     *
     * @param OrderCommentModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}