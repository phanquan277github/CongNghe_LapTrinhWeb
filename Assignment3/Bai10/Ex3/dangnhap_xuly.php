<?php
session_start();
if (isset($_POST['login'])) {
  include('connect.php');
  $name = $_POST['username'];
  $pass = $_POST['password'];
  $sl = "select * from users where user_name='" . $name . "' and password='" . $pass . "'";
  $result = $connect->query($sl);
  $kt = $result->rowCount();
  if ($kt > 0) {
    $_SESSION['username'] = $name;
    $_SESSION['password'] = $pass;
    if (isset($_POST['remember']) and ($_POST['remember'] == "on")) {
      setcookie("username", $name, time() + 60);
      setcookie("password", $pass, time() + 60);
    }
    echo "<script>alert('Login Successfull.'); 
location.href='trangquantriadmin.php';</script>";
    echo "Chào bạn: " . $row['name'] . "<br>Pass của bạn là: " . $row['pass'];
  } else {
    echo "<script>alert('Login Failed.'); location.href='index.php';</script>";
  }
}
if (isset($_POST['cancel'])) {
  echo "<script>location.href='index.php';</script>";
}
?>