# language-yii2
Language extension for yii2 application.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist pkorniev/language-yii2 "*"
```

or add

```
"pkorniev/language-yii2": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, you need to override the application components "request" and "urlManager" and add the component "translator" (it will store translation parameters) in the main configuration file :
```
...
'components' => [
        'request' => [
            'class' => 'pkorniev\language\PKRequest',
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '<<YOUR_COOKIE_VALIDATION_KEY>>',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'pkorniev\language\PKUrlManager',
        ],
        'translator' => [
                    'class' => 'pkorniev\language\PKTranslator',
                    'supportedLanguages' => [
                        'ua' => 'uk-UA',
                        'en' => 'en-US',
                    ],
                    'defaultLanguage' =>'ua',
                    //'cookieRemember' => false,
                    //'expiredLangCookie' => 60*60*24*30,
                ],
...                
```
The "supportedLanguages" property specifies a list of supported locales. The keys contain user keys that need to be passed in the query string to go to the corresponding locale.

For example, to switch to English, you can use any key to your liking: "en", "eng" or any other. The link to your site with a transition to any language will look like this: 
```
https://site.com/en/ or https://site.com/eng/
```
The "defaultLanguage" property specifies which locale to set as the default. Important! The default locale must be declared in the list of available ones. 

The "cookieRemember" property specifies whether or not to store the previously set locale in the Cookies. If it is set to true (the default value), then the locale will be set to the one that was the last time it was changed and does not change even if the user key is not passed in the query string. 

Well, the "expiredLangCookie" property sets the expiration date of the last locale in seconds. It can be omitted, by default it is equal to 30 days. 