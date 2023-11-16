<?php

try {
  $dsn = 'mysql:host=localhost;port=3307;dbname=web';
  $connect = new PDO($dsn, "phanquan277", "phanquan277");

} catch (PDOException $e) {
  die($e->getMessage());
}

?>