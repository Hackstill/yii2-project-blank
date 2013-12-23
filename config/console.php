<?php

Yii::setAlias('@private', YII_PROJECT_PRIVATEPATH);
Yii::setAlias('@web', YII_PROJECT_WEBPATH);
return [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'extensions' => require(YII_PROJECT_VENDORPATH. '/yiisoft/extensions.php'),
    'runtimePath' => YII_PROJECT_PRIVATEPATH."/runtime",
    'vendorPath' => YII_PROJECT_VENDORPATH,

    'preload' => ['log'],
    'controllerPath' => dirname(__DIR__) . '/commands',
    'controllerNamespace' => 'app\commands',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'params' => require(__DIR__ . '/params.php'),
];