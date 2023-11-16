<?php
$op = $_GET['chon'];

if ($op != '') {
  include 'database.class.php';
  $dao = new Dao('root', 'quanphan066204008405', 'thuchanh');

  $sql = "select * from {$op}";
  $header = "DANH SÁCH {$op}";
  $dao->table($sql, $header);
}