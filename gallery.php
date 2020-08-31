<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path_images = "$path/images";
$path_images_sm = "$path/images-sm";
$images = scandir($path_images);
$images_sm = scandir($path_images_sm);

for ($i=2; $i < count($images_sm); $i++): ?>

<a href='<?="images/$images[$i]"; ?>' class="gallery__item" target="_blank">
 <img src='<?="images-sm/$images_sm[$i]"; ?>' alt="">
</a>

<?php endfor; ?>
