<?php
// 以下の AlchemyAPI API Key と MySQL の接続情報を自身の環境に併せて編集する

// AlchemyAPI API Key(http://www.alchemyapi.com/api/register.html)
$apikey = 'AlchemyAPI_Key';

// MySQL
$hostname = 'hostname';
$port = 3306;
$dbname = 'databasename';
$username = 'username';
$password = 'password';


// ここは編集不要
$dsn = 'mysql:dbname='.$dbname.';host='.$hostname.';port='.$port;
?>
