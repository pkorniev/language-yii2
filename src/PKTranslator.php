<?php

namespace pkorniev\language;


use yii\base\Component;

/**
 * Class PKTranslator
 * @package pkorniev\language
 *
 * @var array $supportedLanguages
 * @var string $defaultLanguage
 * @var int $expiredLangCookie
 * @var bool $cookieRemember
 */
class PKTranslator extends Component
{
    public $supportedLanguages = ['en' => 'en-US'];
    public $defaultLanguage = 'en';
    public $expiredLangCookie = 60*60*24*30;
    public $cookieRemember = true;

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