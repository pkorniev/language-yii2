<?php

namespace pkorniev\language;

use Yii;
use yii\web\UrlManager;

class PKUrlManager extends UrlManager
{

    public function createUrl($params) {

        $url = parent::createUrl($params);

        $currentLang = Yii::$app->language;

        $supportedLanguages = Yii::$app->translator->getSupportedLanguages();

        if (in_array($currentLang,$supportedLanguages)){
            $lang = array_flip($supportedLanguages)[$currentLang];
        }
        else {
            $lang = '';
        }
        return '/' . $lang . $url;
    }

}