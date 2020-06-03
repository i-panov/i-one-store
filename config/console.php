<?php

$config = require 'web.php';
unset($config['components']['errorHandler']);
unset($config['components']['request']);

$config['id'] = 'app-console';
$config['controllerNamespace'] = 'app\commands';
$config['components']['cache'] = \yii\caching\DummyCache::class;

return $config;
