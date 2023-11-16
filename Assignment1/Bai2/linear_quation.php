<?php
$nghiem = "Ngiem";
if (isset($_POST['value_a']) && isset($_POST['value_b'])) {
  $a = $_POST['value_a'];
  $b = $_POST['value_b'];
  if ($a == 0) {
    if ($b == 0)
      $nghiem = "Phuong trinh vo so nghiem";
    else
      $nghiem = "Phuong trinh vo nghiem";
  } else {
    $x = round(-$b / $a, 2); // round funtion làm tròn số thập phân 
    $nghiem = "Nghiem x = " . $x;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form action="linear_quation.php" method="post">
    <label for="">Phương trình: </label>
    <input type="text" name="value_a" />
    <span>X + </span>
    <input type="text" name="value_b" />
    <span>= 0</span> <br />
    <span>
      <?php echo $nghiem; ?>
    </span> <br />
    <input type="submit" value="result" />
  </form>
</body>

</html>