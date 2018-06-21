<?php

namespace Starweb\Sdk\Model;

class ProductVariantAttributeValueLanguageModel
{
    /**
     * The langCode for this language. Supported language codes are: sv, en, no, da, fi, de, fr, es
     *
     * @var string
     */
    protected $langCode;
    /**
     * The name of this attribute value
     *
     * @var string
     */
    protected $name;
    /**
     * The langCode for this language. Supported language codes are: sv, en, no, da, fi, de, fr, es
     *
     * @return string
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * The langCode for this language. Supported language codes are: sv, en, no, da, fi, de, fr, es
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
     * The name of this attribute value
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this attribute value
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