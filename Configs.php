<?php
namespace myextension\configs;
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
    
}