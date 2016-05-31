<?php
namespace myextension\configs\components;

use yii\caching\FileCache;

/**
 * This is just an example.
 */
class Geter extends \yii\base\Component
{
    /**
     * @var string settings model
    */
    public $modelClass  = 'myextension\configs\models\Config';
    
    /**
    * @var Cache|integer the cache seconds that paramenters wil be containing in chach files
    */
    protected $cache = 0;
    
    /**
     * Setting variable cache throw component settings in config files 
     *
     * @throws \yii\base\InvalidConfigException
    */
    public function setCache($param){
        if(is_int($param)){
            $this->cache=$param;
        }
    }

    /**
     * Initialize the component
     *
     * @throws \yii\base\InvalidConfigException
    */
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
        $model = new $this->modelClass;
        $cache = new FileCache();
        if($this->cache)
        {
            $return_result=$cache->get("configs_" . $param);
        }

        if(!$return_result){
            $result = $model::find()
            ->where(['param' => $param])
            ->one();

            if($result->getAttribute('value')){
                $return_result=$result->getAttribute('value');
            }
            else{
                $return_result=$result->getAttribute('default');
            }
            if($return_result && $this->cache){
                if($cache->exists("configs_" . $param)){
                    $cache->set("configs_" . $param, $return_result, 120);
                }
                else{
                    $cache->add("configs_" . $param, $return_result, 120);
                }
            }

        }
        return $return_result;
    }
}