<?php

require(__DIR__.DIRECTORY_SEPARATOR.'local.php');

defined('MYSQL_USER') or define('MYSQL_USER', 'root');
defined('MYSQL_PASS') or define('MYSQL_PASS', 'password');

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=test',
    'username' => MYSQL_USER,
    'password' => MYSQL_PASS,
    'charset' => 'utf8',
];
