<?php

namespace Starweb\Sdk\Model;

class MediaFileModelItem
{
    /**
     * 
     *
     * @var MediaFileModel
     */
    protected $data;
    /**
     * 
     *
     * @return MediaFileModel
     */
    public function getData() : ?MediaFileModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param MediaFileModel $data
     *
     * @return self
     */
    public function setData(?MediaFileModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}