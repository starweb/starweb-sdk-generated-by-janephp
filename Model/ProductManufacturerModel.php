<?php

namespace Starweb\Sdk\Model;

class ProductManufacturerModel
{
    /**
     * The id of this manufacturer
     *
     * @var int
     */
    protected $manufacturerId;
    /**
     * The name of this manufacturer
     *
     * @var string
     */
    protected $name;
    /**
     * The URL to the manufacturers website
     *
     * @var string
     */
    protected $url;
    /**
     * The id of this manufacturer
     *
     * @return int
     */
    public function getManufacturerId() : ?int
    {
        return $this->manufacturerId;
    }
    /**
     * The id of this manufacturer
     *
     * @param int $manufacturerId
     *
     * @return self
     */
    public function setManufacturerId(?int $manufacturerId) : self
    {
        $this->manufacturerId = $manufacturerId;
        return $this;
    }
    /**
     * The name of this manufacturer
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this manufacturer
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The URL to the manufacturers website
     *
     * @return string
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * The URL to the manufacturers website
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->url = $url;
        return $this;
    }
}