<?php
$server=$_SERVER['SERVER_NAME'];
$user="root";
$pass="quanphan066204008405";
$db="thuchanh";
$con=mysqli_connect($server,$user,$pass,$db);
mysqli_query($con,"set names 'utf8'");
?>
