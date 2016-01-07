<?php
// 以下の AlchemyAPI API Key と MySQL の接続情報を自身の環境に併せて編集する

// AlchemyAPI API Key(http://www.alchemyapi.com/api/register.html)
$apikey = 'AlchemyAPI_Key';

// MySQL
$hostname = 'hostname';
$port = 3306;
$dbname = 'dbname';
$username = 'username';
$password = 'password';

// Bluemix 環境であれば上記の設定は不要
if( getenv( 'VCAP_SERVICES' ) ){
  $vcap = json_decode( getenv( 'VCAP_SERVICES' ), true );
  
  $credentials1 = $vcap['alchemy_api'][0]['credentials'];
  if( $credentials1 != NULL ){
    $apikey = $credentials1['apikey'];
  }
  
  $credentials2 = $vcap['cleardb'][0]['credentials'];
  if( $credentials2 != NULL ){
    $hostname = $credentials2['hostname'];
    $dbname = $credentials2['name'];
    $port = $credentials2['port'];
    $username = $credentials2['username'];
    $password = $credentials2['password'];
  }
}


// ここは編集不要
$dsn = 'mysql:dbname='.$dbname.';host='.$hostname.';port='.$port;
?>
