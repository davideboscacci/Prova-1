<?php
$dbHost = '54.246.171.64'; // Master production
//$dbHost = 'mdpmastercoll.cloudmetel.com'; // QA
$dbPort = '5432';
$dbName = 'new_metel';
$charset = 'SQL_ASCII';
$username = 'postgres';
$password = '';
return [
    'class' => 'yii\db\Connection',
    'dsn' =>  'pgsql:host=' . $dbHost . ';port=' . $dbPort . ';dbname=' . $dbName,
    'username' => $username,
    'password' => $password,
    'charset' => $charset,
    //'class' => 'PgSchemaConnection'
    'enableSchemaCache' => true
];