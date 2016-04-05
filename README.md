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
1. In cinfig/main.php for using in views of extension. Ling will be 1. In ...cinfigs/config
```php
'modules' => [
    'congigs'=>[
            'class' => 'myextension\configs\Configs',
        ]
]
```
2. Wow
```php
<?= \Myextensions\AutoloadExample::widget(); ?>```
