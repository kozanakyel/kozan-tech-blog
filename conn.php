

<?php
ob_start();
session_start();

require_once('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dbhost = $_ENV["DB_HOST"];
$dbname = $_ENV["DB_NAME"];
$dbuser = $_ENV["DB_USER"];
$dbpass = $_ENV["DB_PASSWORD"];
try{
  $conn = new PDO("mysql:host=". $dbhost .";dbname=". $dbname .";charset=utf8", $dbuser, $dbpass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connection succesfully";
}catch(PDOException $e){
  echo "Connection Failed: " . $e->getMessage();
}





?>
