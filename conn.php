

<?php

require_once('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dbhost = $_ENV["DB_HOST"];
$dbname = $_ENV["DB_NAME"];
$dbuser = $_ENV["DB_USER"];
$dbpass = $_ENV["DB_PASSWORD"];

try{
  $conn = new PDO("mysql:host=". $dbhost .";dbname=". $dbname .";charset=utf8", $dbuser, $dbpass);
  echo "bağlantı okey";
}catch(PDOException $e){
  echo $e->getMessage();
}

?>
