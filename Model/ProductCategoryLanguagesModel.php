<?php

namespace Starweb\Sdk\Model;

class ProductCategoryLanguagesModel
{
    /**
     * The extra/bottom description of this product category
     *
     * @var string
     */
    protected $bottomDescription;
    /**
     * The main/top description of this product category
     *
     * @var string
     */
    protected $description;
    /**
     * Language Code (ISO 639-1) for this translation. Has to be a valid lang code that the shop supports. 
     *
     * @var string
     */
    protected $langCode;
    /**
     * The name of this product category
     *
     * @var string
     */
    protected $name;
    /**
     * The page meta data description of this product category
     *
     * @var string
     */
    protected $pageMetaDescription;
    /**
     * The page title for this product category
     *
     * @var string
     */
    protected $pageTitle;
    /**
     * The permalink to this product category. Will auto generate if left out
     *
     * @var string
     */
    protected $permalink;
    /**
     * The extra/bottom description of this product category
     *
     * @return string
     */
    public function getBottomDescription() : ?string
    {
        return $this->bottomDescription;
    }
    /**
     * The extra/bottom description of this product category
     *
     * @param string $bottomDescription
     *
     * @return self
     */
    public function setBottomDescription(?string $bottomDescription) : self
    {
        $this->bottomDescription = $bottomDescription;
        return $this;
    }
    /**
     * The main/top description of this product category
     *
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The main/top description of this product category
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Language Code (ISO 639-1) for this translation. Has to be a valid lang code that the shop supports. 
     *
     * @return string
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * Language Code (ISO 639-1) for this translation. Has to be a valid lang code that the shop supports. 
     *
     * @param string $langCode
     *
     * @return self
     */
    public function setLangCode(?string $langCode) : self
    {
        $this->langCode = $langCode;
        return $this;
    }
    /**
     * The name of this product category
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this product category
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
     * The page meta data description of this product category
     *
     * @return string
     */
    public function getPageMetaDescription() : ?string
    {
        return $this->pageMetaDescription;
    }
    /**
     * The page meta data description of this product category
     *
     * @param string $pageMetaDescription
     *
     * @return self
     */
    public function setPageMetaDescription(?string $pageMetaDescription) : self
    {
        $this->pageMetaDescription = $pageMetaDescription;
        return $this;
    }
    /**
     * The page title for this product category
     *
     * @return string
     */
    public function getPageTitle() : ?string
    {
        return $this->pageTitle;
    }
    /**
     * The page title for this product category
     *
     * @param string $pageTitle
     *
     * @return self
     */
    public function setPageTitle(?string $pageTitle) : self
    {
        $this->pageTitle = $pageTitle;
        return $this;
    }
    /**
     * The permalink to this product category. Will auto generate if left out
     *
     * @return string
     */
    public function getPermalink() : ?string
    {
        return $this->permalink;
    }
    /**
     * The permalink to this product category. Will auto generate if left out
     *
     * @param string $permalink
     *
     * @return self
     */
    public function setPermalink(?string $permalink) : self
    {
        $this->permalink = $permalink;
        return $this;
    }
}