<?php

namespace Starweb\Sdk\Model;

class ProductMediaFileLinkModel
{
    /**
     * The media file this link points to. You can fetch available media files from the /media-files endpoint
     *
     * @var int
     */
    protected $mediaFileId;
    /**
     * This links ID
     *
     * @var int
     */
    protected $productMediaFileId;
    /**
     * The sort index of these media file links. Note that after the item is saved the sort index will be rearranged so that the item with the lowest sort index always get sort index 0, the next one 1, and so on.
     *
     * @var int
     */
    protected $sortIndex;
    /**
     * The type of file this link points to. Can be either ”image” or ”document”
     *
     * @var string
     */
    protected $type;
    /**
     * The media file this link points to. You can fetch available media files from the /media-files endpoint
     *
     * @return int
     */
    public function getMediaFileId() : ?int
    {
        return $this->mediaFileId;
    }
    /**
     * The media file this link points to. You can fetch available media files from the /media-files endpoint
     *
     * @param int $mediaFileId
     *
     * @return self
     */
    public function setMediaFileId(?int $mediaFileId) : self
    {
        $this->mediaFileId = $mediaFileId;
        return $this;
    }
    /**
     * This links ID
     *
     * @return int
     */
    public function getProductMediaFileId() : ?int
    {
        return $this->productMediaFileId;
    }
    /**
     * This links ID
     *
     * @param int $productMediaFileId
     *
     * @return self
     */
    public function setProductMediaFileId(?int $productMediaFileId) : self
    {
        $this->productMediaFileId = $productMediaFileId;
        return $this;
    }
    /**
     * The sort index of these media file links. Note that after the item is saved the sort index will be rearranged so that the item with the lowest sort index always get sort index 0, the next one 1, and so on.
     *
     * @return int
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * The sort index of these media file links. Note that after the item is saved the sort index will be rearranged so that the item with the lowest sort index always get sort index 0, the next one 1, and so on.
     *
     * @param int $sortIndex
     *
     * @return self
     */
    public function setSortIndex(?int $sortIndex) : self
    {
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * The type of file this link points to. Can be either ”image” or ”document”
     *
     * @return string
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The type of file this link points to. Can be either ”image” or ”document”
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}