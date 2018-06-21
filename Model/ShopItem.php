<?php

namespace Starweb\Sdk\Model;

class ShopItem
{
    /**
     * 
     *
     * @var ShopModel
     */
    protected $data;
    /**
     * 
     *
     * @return ShopModel
     */
    public function getData() : ?ShopModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ShopModel $data
     *
     * @return self
     */
    public function setData(?ShopModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}