<?php
include "config.php";

$sql = "select * from images";
$res = mysqli_query($connect, $sql);


while($images = mysqli_fetch_assoc($res)):?>
  <a href="image.php?id=<?=$images['id']; ?>" class="gallery__item" target="_blank">
    <img src="<?=$images['location_small'].$images['name']; ?>" alt="">
  </a>
<?php endwhile; ?>
