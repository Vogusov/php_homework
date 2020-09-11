<?php
include "server.php";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="#" method="post">
  <label for="first_dig">Введите первое число:</label>
  <input id="first_dig" type="text" name="first_dig" value="<?=$first_dig?>">
  <label for="second_dig">Введите второе число:</label>
  <input id="second_dig" type="text" name="second_dig" value="<?=$second_dig?>">
  <p>Выберите операцию:</p>
  <input name="sign" type="submit" value="+">
  <input name="sign" type="submit" value="-">
  <input name="sign" type="submit" value="/">
  <input name="sign" type="submit" value="*">
</form>



<p><?="$first_dig $sign $second_dig = $res"?></p>

</body>
</html>

