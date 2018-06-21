<?php

namespace Starweb\Sdk\Model;

class PaymentMethodLanguageModel
{
    /**
     * Language code
     *
     * @var string
     */
    protected $langCode;
    /**
     * Name of payment method
     *
     * @var string
     */
    protected $name;
    /**
     * A shorter informative description
     *
     * @var string
     */
    protected $shortDescription;
    /**
     * Title of payment method
     *
     * @var string
     */
    protected $title;
    /**
     * Language code
     *
     * @return string
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * Language code
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
     * Name of payment method
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of payment method
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
     * A shorter informative description
     *
     * @return string
     */
    public function getShortDescription() : ?string
    {
        return $this->shortDescription;
    }
    /**
     * A shorter informative description
     *
     * @param string $shortDescription
     *
     * @return self
     */
    public function setShortDescription(?string $shortDescription) : self
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }
    /**
     * Title of payment method
     *
     * @return string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Title of payment method
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}