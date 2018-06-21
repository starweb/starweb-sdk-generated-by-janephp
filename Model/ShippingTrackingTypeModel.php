<?php

namespace Starweb\Sdk\Model;

class ShippingTrackingTypeModel
{
    /**
     * The shipping tracking type name
     *
     * @var string
     */
    protected $name;
    /**
     * The shipping tracking type ID
     *
     * @var int
     */
    protected $type;
    /**
     * The shipping tracking type name
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The shipping tracking type name
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
     * The shipping tracking type ID
     *
     * @return int
     */
    public function getType() : ?int
    {
        return $this->type;
    }
    /**
     * The shipping tracking type ID
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(?int $type) : self
    {
        $this->type = $type;
        return $this;
    }
}