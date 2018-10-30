<?php

if ((isset($_GET['debug']) && $_GET['debug'] == '1') || $_SERVER['SERVER_NAME'] == 'test-r70') {
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);
} else {
    error_reporting(E_ERROR);
    defined('YII_DEBUG') or define('YII_DEBUG', false );
    defined('YII_DEBUG_SHOW_PROFILER') or define('YII_DEBUG_SHOW_PROFILER', false);
    defined('YII_DEBUG_PROFILING') or define('YII_DEBUG_PROFILING', false);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 0);
    defined('YII_DEBUG_DISPLAY_TIME') or define('YII_DEBUG_DISPLAY_TIME', false);
}

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/config/web.php';

(new yii\web\Application($config))->run();
