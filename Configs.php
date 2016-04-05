<?php

namespace myextension\configs;
use myextension\configs\models\Config;
use Yii;
/**
 * This is just an example.
 */
class Configs extends \yii\base\Module
{
    public $controllerNamespace = 'myextension\configs\controllers';
    public $userClass;

    public function init()
    {
        parent::init();
    }

    public function get($param){
        $model = new Config();
          $result = $model::find()
        ->where(['param' => $param])
        ->one();
        var_dump($result);
    }
}