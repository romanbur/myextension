Get and set configs
===================
Get and set configs

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist myextensions/yii2-configs "*"
```

or add

```
"myextensions/yii2-configs": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :
1. In cinfig/main.php for using in views of extension. Link will be has following form: ...cinfigs/config
```php
'modules' => [
    'congigs'=>[
            'class' => 'myextension\configs\Configs',
        ]
]
```
2. In components:
```php
    components' => [
            'congfigs' => [
                'class' => 'myextension\configs\components\Geter',
                'cache'=>'Wow'
            ]
    ]
```
The current component need for get access to configurate parameters in every parts of Application with following code:

```php
$congig = Yii::$app->congfigs->get('slider_count');
```
