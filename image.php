<?php
include_once 'config.php';

$get_id = $_GET['id'];
$sql = "select location, name from images where id=$get_id";
$res = mysqli_query($connect, $sql); 
$image = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
  
  <a href="index.php"> Вернуться в галерею </a>
  
  <div class="full-image-container">
    <img src="<?=$image['location'].$image['name'] ?>" alt="">
  </div>

  
</body>
</html>