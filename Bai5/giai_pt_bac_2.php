<?php
function giai_pt_bac_1($a, $b)
{
  if ($a == 0) {
    if ($b == 0) {
      $nghiem = "Phuong trinh vo so nghiem!";
    } else
      $nghiem = "Phuong trinh vo nghiem!";
  } else
    $nghiem = "X = " . round(-$b / $a, 2);
  return $nghiem;
}

function giai_pt_bac_2($a, $b, $c)
{
  if ($a == 0) {
    $nghiem = giai_pt_bac_1($b, $c);
  } else {
    $delta = pow($b, 2) - 4 * $a * $c;
    if ($delta > 0) {
      $x1 = round((-$b + sqrt($delta)) / (2 * $a), 2);
      $x2 = round((-$b - sqrt($delta)) / (2 * $a), 2);
      $nghiem = "Phuong trinh co 2 nghiem phan biet x1 = $x1, x2 = $x2";
    } else if ($delta == 0) {
      $nghiem = "Phuong trinh co nghiem kep x1=x2= " . -($b / 2 * $a);
    } else
      $nghiem = "Phuong trinh vo nghiem";
  }
  return $nghiem;
}

if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
  $nghiem = giai_pt_bac_2($_POST["a"], $_POST["b"], $_POST["c"]);
}

?>

<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
</head>

<body>
  <form action="giai_pt_bac_2.php" method="post">
    <table width="806" border="1">
      <tr>
        <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
      </tr>
      <tr>
        <td width="83">Phương trình </td>
        <td width="236">
          <input name="a" type="text" />
          X^2 +
        </td>
        <td width="218"><label for="textfield3"></label>
          <input type="text" name="b" id="textfield3" />
          X+
        </td>
        <td width="241"><label for="textfield"></label>
          <input type="text" name="c" id="textfield" />
          =0
        </td>
      </tr>
      <tr>
        <td colspan="4">
          Nghiệm
          <label for="textfield2"></label>
          <span>
            <?php if (isset($nghiem))
              echo $nghiem; ?>
          </span>
      </tr>
      <tr>
        <td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
      </tr>
    </table>
  </form>
</body>

</html>