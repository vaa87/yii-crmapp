<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
//ini_set('display_errors', true);

// регистрация загрузчика классов Composer
require __DIR__ . '/../vendor/autoload.php';

//Включаем сам фреймворк Yii (1)
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

//Получаем конфигурацию (2)
$config = require(__DIR__ . '/../config/web.php');

//Создаем и немедленно выполняем приложение (3)
(new yii\web\Application($config))->run();
