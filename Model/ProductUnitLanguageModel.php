<?php

namespace Starweb\Sdk\Model;

class ProductUnitLanguageModel
{
    /**
     * The language code for this language
     *
     * @var string
     */
    protected $langCode;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $symbol;
    /**
     * The language code for this language
     *
     * @return string
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * The language code for this language
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
     * 
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getSymbol() : ?string
    {
        return $this->symbol;
    }
    /**
     * 
     *
     * @param string $symbol
     *
     * @return self
     */
    public function setSymbol(?string $symbol) : self
    {
        $this->symbol = $symbol;
        return $this;
    }
}