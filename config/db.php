<?php
$file = __DIR__.DIRECTORY_SEPARATOR.'local.php';
if (file_exists($file))
    require($file);

defined('MYSQL_HOST') or define('MYSQL_HOST', 'localhost');
defined('MYSQL_HOST') or define('MYSQL_DB', 'test');
defined('MYSQL_USER') or define('MYSQL_USER', 'root');
defined('MYSQL_PASS') or define('MYSQL_PASS', 'password');

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB,
    'username' => MYSQL_USER,
    'password' => MYSQL_PASS,
    'charset' => 'utf8',
];
