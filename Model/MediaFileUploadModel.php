<?php

namespace Starweb\Sdk\Model;

class MediaFileUploadModel
{
    /**
     * 
     *
     * @var string
     */
    protected $file;
    /**
     * 
     *
     * @return string
     */
    public function getFile() : ?string
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param string $file
     *
     * @return self
     */
    public function setFile(?string $file) : self
    {
        $this->file = $file;
        return $this;
    }
}