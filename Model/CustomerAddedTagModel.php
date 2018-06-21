<?php

namespace Starweb\Sdk\Model;

class CustomerAddedTagModel
{
    /**
     * The name of the tag
     *
     * @var string
     */
    protected $name;
    /**
     * The id of the tag
     *
     * @var int
     */
    protected $tagId;
    /**
     * The name of the tag
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the tag
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
     * The id of the tag
     *
     * @return int
     */
    public function getTagId() : ?int
    {
        return $this->tagId;
    }
    /**
     * The id of the tag
     *
     * @param int $tagId
     *
     * @return self
     */
    public function setTagId(?int $tagId) : self
    {
        $this->tagId = $tagId;
        return $this;
    }
}