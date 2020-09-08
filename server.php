<?php
include "config.php";
include "translit.php";
include "resize.php";

$path = IMAGES_FOLDER.translit($_FILES["photo"]["name"]);
$path_sm =  SMALL_IMAGES_FOLDER.translit($_FILES["photo"]["name"]);
$file_name = translit($_FILES["photo"]["name"]);
$file_size = $_FILES["photo"]["size"];

if (isset($_POST["send"])) {
  if ($_FILES["photo"]["error"]){
    echo "Ошибка загрузки файла";
  } elseif ($_FILES["photo"]["size"] > 1000000) {
    echo "Файл слишком большой. Заргружаемый файл должен быть не больше 1Мб <br> <a href=\"index.php\">К галерее</a>";
  } elseif (strlen ($file_name) > 30) {
    // вставить функцию переименования файла!!!
    echo "Имя файла слишком длинное. Переименуйте файл перед загрузкой. Имя файла должно быть короче 26 символов.";
  }
  elseif (
    $_FILES["photo"]["type"] == "image/jpeg" ||
    $_FILES["photo"]["type"] == "image/png" ||
    $_FILES["photo"]["type"] == "image/gif"
  ) {
    if (copy($_FILES["photo"]["tmp_name"], $path)) {
      resize($path, $path_sm, 300);

      echo "File size: ". var_dump($file_size)."<br>";
      $sql = "insert into `images` (`name`, `size`) values ('$file_name', $file_size)";
      mysqli_query($connect, $sql);
      mysqli_close($connect);

      echo "Файл загружен! <br> <a href=\"index.php\">К галерее</a>";
    } else {
      echo "Обшибка при загрузке файла <br> <a href=\"index.php\">К галерее</a>";
    }
  }
}


