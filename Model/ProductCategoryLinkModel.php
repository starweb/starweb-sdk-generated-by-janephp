<?php

namespace Starweb\Sdk\Model;

class ProductCategoryLinkModel
{
    /**
     * The category id this product should be listed in
     *
     * @var int
     */
    protected $categoryId;
    /**
     * The sort index this product have in the category
     *
     * @var int
     */
    protected $sortIndex;
    /**
     * The category id this product should be listed in
     *
     * @return int
     */
    public function getCategoryId() : ?int
    {
        return $this->categoryId;
    }
    /**
     * The category id this product should be listed in
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
     * The sort index this product have in the category
     *
     * @return int
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * The sort index this product have in the category
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
}