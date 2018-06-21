<?php

namespace Starweb\Sdk\Model;

class ProductMetaLanguageDataModel
{
    /**
     * The langCode for this language
     *
     * @var string
     */
    protected $langCode;
    /**
     * The value for this meta data
     *
     * @var string
     */
    protected $value;
    /**
     * The langCode for this language
     *
     * @return string
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * The langCode for this language
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
     * The value for this meta data
     *
     * @return string
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * The value for this meta data
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->value = $value;
        return $this;
    }
}