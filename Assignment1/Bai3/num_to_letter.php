<?php
$out = "";
if (isset($_POST['num_in']) && is_numeric($_POST['num_in'])) {
  switch ($_POST['num_in']) {
    case 0:
      $out = "Không";
      break;
    case 1:
      $out = "Một";
      break;
    case 2:
      $out = "Hai";
      break;
    case 3:
      $out = "Ba";
      break;
    case 4:
      $out = "Bốn";
      break;
    case 5:
      $out = "Năm";
      break;
    case 6:
      $out = "Sáu";
      break;
    case 7:
      $out = "Bảy";
      break;
    case 8:
      $out = "Tám";
      break;
    case 9:
      $out = "Chín";
      break;
    default:
      $out = "Không hợp lệ";
      break;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="num_to_letter.php" method="POST">
    <label for="">Nhập số (0-9)</label>
    <input type="text" name="num_in" id="">

    <input type="submit" value="Submit">

    <label for="">Bằng chữ</label>

    <input type="text" name="out" id="" value="<?php echo $out; ?> " />
  </form>
</body>

</html>