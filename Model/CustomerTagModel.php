<?php

namespace Starweb\Sdk\Model;

class CustomerTagModel
{
    /**
     * The tag name
     *
     * @var string
     */
    protected $name;
    /**
     * The tag Id
     *
     * @var int
     */
    protected $tagId;
    /**
     * The tag name
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The tag name
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
     * The tag Id
     *
     * @return int
     */
    public function getTagId() : ?int
    {
        return $this->tagId;
    }
    /**
     * The tag Id
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