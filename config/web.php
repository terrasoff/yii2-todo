<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'extensions' => require(__DIR__ . '/../vendor/yiisoft/extensions.php'),
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => require('routes.php'),
        ],
        'request'=>[
            'class' => 'yii\web\Request',
            'parsers'=>[
                'application/json'=>'yii\web\JsonParser',
            ],
        ],
        'assetManager' => [
            'linkAssets' => true,
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'enabled'=>YII_DEBUG,
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],
    'params' => $params,
];

if (YII_ENV === 'dev') {
    $config = array_merge_recursive($config,[
        'preload'=>['debug'],

        'modules'=>[
            'debug'=>['class' => 'yii\debug\Module'],
            'gii' => ['class' => 'yii\gii\Module'],
        ],
    ]);
}

return $config;