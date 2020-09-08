<?php
// Абсолютные адреса не работают!!!!!
// define("IMAGES_FOLDER", $_SERVER['DOCUMENT_ROOT']."/images/");
// define("SMALL_IMAGES_FOLDER", $_SERVER['DOCUMENT_ROOT']."/images-sm/");

define("IMAGES_FOLDER", "./images/");
define("SMALL_IMAGES_FOLDER", "./images-sm/");

const SERVER = "localhost";
const DB = "gallery";
const LOGIN = "root";
const PASS = "root";

$connect = mysqli_connect(SERVER, LOGIN, PASS, DB) or die("Ошибка соединения с базой данных!"); 