<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<div class="container">
  
  <h1>Photo gallery</h1>
  <div class="gallery">
    <?php
    include "gallery.php";
    ?>
  </div>

  <form action="server.php" method="post" enctype="multipart/form-data">
    <p>Загрузить файл</p>
    <input type="file" name="photo">
    <input type="submit" name="send" value="Сохранить">
  </form>

</div>
  
</body>
</html>