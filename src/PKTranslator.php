<?php

namespace pkorniev\language;


use yii\base\Component;

class PKTranslator extends Component
{
    public $supportedLanguages = ['en' => 'en-US'];
    public $defaultLanguage = 'en';
    public $expiredLangCookie = 60*60*24*30;
    public $hideLangUrl = false;
    public $cookieRemember = false;

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

    /**
     * Returns expiredLangCookie
     * @return int
     */
    public function getExpiredLangCookie()
    {
        return $this->expiredLangCookie;
    }

    /**
     * Returns flag for remember current lang in cookie
     * @return bool
     */
    public function getCookieRemember()
    {
        return $this->cookieRemember;
    }
}