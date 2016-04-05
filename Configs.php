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
    
    /**
    * Get parameter value
    * @param slug of param
    * @return str
    */
    public function get($param){
        $return_result="";
        $model = new Config();
         $result = $model::find()
        ->where(['param' => $param])
        ->one();
        
        if($result->getAttribute('value')){
            $return_result=$result->getAttribute('value');
        }
        else{
            $return_result=$result->getAttribute('default');
        }
        return = $return_result;
    }
}