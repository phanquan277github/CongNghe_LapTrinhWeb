<?php
$port = 3307;
$dsn = "mysql:host=localhost;port=$port;dbname=my_guitar_shop1";
$username = 'phanquan277';
$password = 'phanquan277';

try {
  $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  $error_message = $e->getMessage();
  include('database_error.php');
  exit();
}
?>