<?php

namespace pkorniev\language;


use yii\base\Model;

class PKTranslateConfigurator extends Model
{
    public $supportedLanguages = ['en' => 'en-US'];
    public $defaultLanguage = 'en';
    public $hideLangUrl = false;

    /**
     * Returns supported languages for translate
     * @return array
     */
    public function getSupportedLanguages()
    {
        return $this->supportedLanguages;
    }

    /**
     * Returns default language
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * Returns flag for hide langUrl
     * @return string
     */
    public function getHideLangUrl()
    {
        return $this->hideLangUrl;
    }
}