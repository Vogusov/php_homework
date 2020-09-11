<?php

//print_r($_POST);
if (isset($_POST['first_dig']))
  $first_dig = trim(strip_tags(htmlspecialchars($_POST['first_dig'])));
else
  $first_dig = 1;

if (isset($_POST['second_dig']))
  $second_dig = trim(strip_tags(htmlspecialchars($_POST['second_dig'])));
else
  $second_dig = 1;

if (isset($_POST['sign']))
  $sign = $_POST['sign'];
else
  $sign = 'minus';



if (!is_numeric($first_dig) || !is_numeric($second_dig)) {
  $res = "Введите числа!";
} else {

  switch ($sign) {
    case '+':
      $res = $first_dig + $second_dig;
      break;
    case '-':
      $res = $first_dig - $second_dig;
      break;
    case '*':
      $res = $first_dig * $second_dig;
      break;
    case '/':
      if ($second_dig == 0) {
        $res = "На ноль не делим!";
      } else {
        $res = $first_dig / $second_dig;
      }
  }
}
