<?php

namespace Starweb\Sdk\Model;

class MediaFileModelCollection
{
    /**
     * A collection of media files
     *
     * @var MediaFileModel[]
     */
    protected $data;
    /**
     * 
     *
     * @var MediaFileModelCollectionMeta
     */
    protected $meta;
    /**
     * A collection of media files
     *
     * @return MediaFileModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of media files
     *
     * @param MediaFileModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return MediaFileModelCollectionMeta
     */
    public function getMeta() : ?MediaFileModelCollectionMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param MediaFileModelCollectionMeta $meta
     *
     * @return self
     */
    public function setMeta(?MediaFileModelCollectionMeta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}