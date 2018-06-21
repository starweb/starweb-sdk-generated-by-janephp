<?php

namespace Starweb\Sdk\Model;

class ProductCategoryModel
{
    /**
     * The product category Id
     *
     * @var int
     */
    protected $categoryId;
    /**
     * The external Id for this category for the system named in externalType
     *
     * @var string
     */
    protected $externalId;
    /**
     * The system name the externalId belongs to.
     *
     * @var string
     */
    protected $externalType;
    /**
     * Whether or not the category has any children categories
     *
     * @var bool
     */
    protected $hasChildren;
    /**
     * The Id to the category`s image file. Has to be an existing mediaFile
     *
     * @var int
     */
    protected $imageFileId;
    /**
     * 
     *
     * @var ProductCategoryLanguagesModel[]
     */
    protected $languages;
    /**
     * Whether or not links to the category should open a category page listing its products and sub categories on click.
     *
     * @var bool
     */
    protected $openPage;
    /**
     * The category`s parent`s Id
     *
     * @var int
     */
    protected $parentId;
    /**
     * Sort index. A category with a lower value is displayed higher up in lists
     *
     * @var int
     */
    protected $sortIndex;
    /**
     * The category`s visibility settings. Possible values are: visible, hidden and pricelists. Pricelists means that the category is only visible for customers with access to specific pricelists
     *
     * @var string
     */
    protected $visibility;
    /**
     * The product category Id
     *
     * @return int
     */
    public function getCategoryId() : ?int
    {
        return $this->categoryId;
    }
    /**
     * The product category Id
     *
     * @param int $categoryId
     *
     * @return self
     */
    public function setCategoryId(?int $categoryId) : self
    {
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * The external Id for this category for the system named in externalType
     *
     * @return string
     */
    public function getExternalId() : ?string
    {
        return $this->externalId;
    }
    /**
     * The external Id for this category for the system named in externalType
     *
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId) : self
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * The system name the externalId belongs to.
     *
     * @return string
     */
    public function getExternalType() : ?string
    {
        return $this->externalType;
    }
    /**
     * The system name the externalId belongs to.
     *
     * @param string $externalType
     *
     * @return self
     */
    public function setExternalType(?string $externalType) : self
    {
        $this->externalType = $externalType;
        return $this;
    }
    /**
     * Whether or not the category has any children categories
     *
     * @return bool
     */
    public function getHasChildren() : ?bool
    {
        return $this->hasChildren;
    }
    /**
     * Whether or not the category has any children categories
     *
     * @param bool $hasChildren
     *
     * @return self
     */
    public function setHasChildren(?bool $hasChildren) : self
    {
        $this->hasChildren = $hasChildren;
        return $this;
    }
    /**
     * The Id to the category`s image file. Has to be an existing mediaFile
     *
     * @return int
     */
    public function getImageFileId() : ?int
    {
        return $this->imageFileId;
    }
    /**
     * The Id to the category`s image file. Has to be an existing mediaFile
     *
     * @param int $imageFileId
     *
     * @return self
     */
    public function setImageFileId(?int $imageFileId) : self
    {
        $this->imageFileId = $imageFileId;
        return $this;
    }
    /**
     * 
     *
     * @return ProductCategoryLanguagesModel[]
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductCategoryLanguagesModel[] $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     * Whether or not links to the category should open a category page listing its products and sub categories on click.
     *
     * @return bool
     */
    public function getOpenPage() : ?bool
    {
        return $this->openPage;
    }
    /**
     * Whether or not links to the category should open a category page listing its products and sub categories on click.
     *
     * @param bool $openPage
     *
     * @return self
     */
    public function setOpenPage(?bool $openPage) : self
    {
        $this->openPage = $openPage;
        return $this;
    }
    /**
     * The category`s parent`s Id
     *
     * @return int
     */
    public function getParentId() : ?int
    {
        return $this->parentId;
    }
    /**
     * The category`s parent`s Id
     *
     * @param int $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId) : self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Sort index. A category with a lower value is displayed higher up in lists
     *
     * @return int
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * Sort index. A category with a lower value is displayed higher up in lists
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
     * The category`s visibility settings. Possible values are: visible, hidden and pricelists. Pricelists means that the category is only visible for customers with access to specific pricelists
     *
     * @return string
     */
    public function getVisibility() : ?string
    {
        return $this->visibility;
    }
    /**
     * The category`s visibility settings. Possible values are: visible, hidden and pricelists. Pricelists means that the category is only visible for customers with access to specific pricelists
     *
     * @param string $visibility
     *
     * @return self
     */
    public function setVisibility(?string $visibility) : self
    {
        $this->visibility = $visibility;
        return $this;
    }
}