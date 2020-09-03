<?php

include_once 'config.php';

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
<!-- <div class="container"> -->
  
  <a href="index.php"> Вернуться в галерею </a>
  
  <div class="full-image-container">
    <img src="<?=IMAGES_FOLDER.$_GET['photo'] ?>" alt="">
  </div>

<!-- </div> -->
  
</body>
</html>