<?php

define('YII_PROJECT_VENDORPATH', dirname(__DIR__)."/vendor");
define('YII_PROJECT_PRIVATEPATH', dirname(__DIR__));
define('YII_PROJECT_WEBPATH', __DIR__);
define('YII_PROJECT_PATH', dirname(__DIR__));

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(YII_PROJECT_VENDORPATH . '/autoload.php');
require(YII_PROJECT_VENDORPATH . '/yiisoft/yii2/yii/Yii.php');

$config = require(YII_PROJECT_PRIVATEPATH . '/config/web.php');

(new yii\web\Application($config))->run();