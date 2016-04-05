<?php
namespace myextension\configs\components;
/**
 * This is just an example.
 */
class Geter extends \yii\base\Component
{
    /**
     * @var string settings model
    */
    public $modelClass  = 'myextension\configs\controllers';
    
    /**
    * @var Cache|string the cache object or the application component ID of the cache object.
    * Settings will be cached through this cache object, if it is available.
    *
    * After the Settings object is created, if you want to change this property,
    * you should only assign it with a cache object.
    * Set this property to null if you do not want to cache the settings.
    */
    public $cache = 'cache';
    
    /**
    * @var Cache|string the front cache object or the application component ID of the front cache object.
    * Front cache will be cleared through this cache object, if it is available.
    *
    * After the Settings object is created, if you want to change this property,
    * you should only assign it with a cache object.
    * Set this property to null if you do not want to clear the front cache.
     */
    public $frontCache;
    
    /**
     * To be used by the cache component.
     *
     * @var string cache key
     */
    public $cacheKey = 'myextension\configs';
    
     /**
     * Holds a cached copy of the data for the current request
     *
     * @var mixed
     */
    private $_data = null;


    /**
     * Initialize the component
     *
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        parent::init();
//        $this->model = new $this->modelClass;
//        if (is_string($this->cache)) {
//            $this->cache = Yii::$app->get($this->cache, false);
//        }
//        if (is_string($this->frontCache)) {
//            $this->frontCache = Yii::$app->get($this->frontCache, false);
//        }
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
        return $return_result;
    }
}