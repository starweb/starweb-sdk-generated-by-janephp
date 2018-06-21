<?php

namespace Starweb\Sdk\Model;

class OrderCommentModelItem
{
    /**
     * 
     *
     * @var OrderCommentModel
     */
    protected $data;
    /**
     * 
     *
     * @return OrderCommentModel
     */
    public function getData() : ?OrderCommentModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderCommentModel $data
     *
     * @return self
     */
    public function setData(?OrderCommentModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}