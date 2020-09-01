<?php
// define ('ROOT_FOLDER', $_SERVER['DOCUMENT_ROOT']);
// define('IMAGES_FOLDER', ROOT_FOLDER."/images");
// define('SMALL_IMAGES_FOLDER', ROOT_FOLDER."images-sm");

// print_r(IMAGES_FOLDER);

$path = "images/".$_FILES["photo"]["name"];

if (move_uploaded_file($_FILES["photo"]["tmp_name"], "images/".$_FILES["photo"]["name"])){
  echo "Файл загружен! <br> <a href=\"index.php\">К галерее</a>";
} else {
  echo "Обшибка при загрузке файла <br> <a href=\"index.php\">К галерее</a>";
}

include "resize.php";

resize($path, 300);