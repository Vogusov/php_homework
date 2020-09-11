<?php
include "server.php";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<form action="#" method="post">

  <input type="text" name="first_dig" value="<?= $first_dig ?>">
  <select name="sign" selected="<?= $sign ?>">
    <option <?php if ($sign == 'plus') echo 'selected' ?> value="plus">+</option>
    <option <?php if ($sign == 'minus') echo 'selected' ?> value="minus">-</option>
    <option <?php if ($sign == 'mult') echo 'selected' ?> value="mult">*</option>
    <option <?php if ($sign == 'div') echo 'selected' ?> value="div">/</option>
  </select>
  <input type="text" name="second_dig" value="<?= $second_dig ?>">
  <span>=</span>
  <span style="border:1px solid black; width:20px;"><?= $res ?></span>

  <input type="submit" value="Doit!">

</form>


</body>
</html>