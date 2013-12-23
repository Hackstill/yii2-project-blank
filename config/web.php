<?php

Yii::setAlias('@private', YII_PROJECT_PRIVATEPATH);

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'extensions' => require(YII_PROJECT_VENDORPATH. '/yiisoft/extensions.php'),
    'runtimePath' => YII_PROJECT_PRIVATEPATH."/runtime",
    'vendorPath' => YII_PROJECT_VENDORPATH,

    'preload'=>['backend'],

    'components' => [
        'backend' => [
            'class' => 'app\backend\Component',

            'prefix' => 'backend',
            'indexAction' => 'site/backend',

            'backend' => [
                'name' => 'backend',
            ],

            'frontend' => [],

        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mail' => [
            'class' => 'yii\swiftmailer\Mailer',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => require(__DIR__ . '/params.php'),
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['preload'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';
    $config['modules']['gii'] = 'yii\gii\Module';
}

if (YII_ENV_TEST) {
    // configuration adjustments for 'test' environment.
    // configuration for codeception test environments can be found in codeception folder.

    // if needed, customize $config here.
}

return $config;
