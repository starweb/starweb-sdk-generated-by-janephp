<?php

namespace Starweb\Sdk\Model;

class ProductStockStatusLanguageModel
{
    /**
     * Language Code (ISO 639-1) for this translation. Has to be a valid lang code that the shop supports. 
     *
     * @var string
     */
    protected $langCode;
    /**
     * The name of this stock status
     *
     * @var string
     */
    protected $name;
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
     * The name of this stock status
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this stock status
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
}