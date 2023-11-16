<?php
if (isset($_POST['starting_num']) && isset($_POST['ending_num'])) {
  $starting_num = $_POST['starting_num'];
  $ending_num = $_POST['ending_num'];
  $sum = 0;
  $product_of_num = 1;
  $sum_even = 0;
  $sum_odd = 0;

  for ($i = $starting_num; $i <= $ending_num; $i++) {
    $sum += $i;
    $product_of_num *= $i;
    if ($i % 2 == 0)
      $sum_even += $i;
    else
      $sum_odd += $i;
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
  <form action="for_to_calculate_numberSequence.php" method="post">
    <table width="728" border="1">
      <tr>
        <td width="122">&nbsp;</td>
        <td width="76">Số bắt đầu</td>
        <td width="169"><label for="textfield"></label>
          <input type="text" name="starting_num" id="textfield" value="" />
        </td>
        <td width="152">Số kết thúc</td>
        <td width="175"><label for="textfield2"></label>
          <input type="text" name="ending_num" id="textfield2" value="" />
        </td>
      </tr>
      <tr>
        <td colspan="5">Kết quả
          <label for="textfield3"></label>
        </td>
      </tr>
      <tr>
        <td>Tổng các số</td>
        <td colspan="4"><label for="textfield4"></label>
          <input type="text" name="tong" id="textfield4" value="<?php if (isset($sum))
            echo $sum; ?>" />
        </td>
      </tr>
      <tr>
        <td>Tích các số</td>
        <td colspan="4"><label for="textfield5"></label>
          <input type="text" name="tich" id="textfield5" value="<?php if (isset($product_of_num))
            echo $product_of_num; ?>" />
        </td>
      </tr>
      <tr>
        <td>Tổng các số chẵn</td>
        <td colspan="4"><label for="textfield6"></label>
          <input type="text" name="tong_chan" id="textfield6" value="<?php if (isset($sum_even))
            echo $sum_even; ?>" />
        </td>
      </tr>
      <tr>
        <td>Tổng các số lẻ</td>
        <td colspan="4"><label for="textfield7"></label>
          <input type="text" name="tong_le" id="textfield7" value="<?php if (isset($sum_odd))
            echo $sum_odd; ?>" />
        </td>
      </tr>
      <tr>
        <td colspan="5"><input type="submit" name="button" id="button" value="Tính toán" /></td>
      </tr>
    </table>
  </form>
</body>

</html>