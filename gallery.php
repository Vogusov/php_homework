<?php
include "config.php";

$images = array_slice(scandir(SMALL_IMAGES_FOLDER), 2);


for ($i=0; $i < count($images); $i++): ?>

<a href="image.php?photo=<?=$images[$i]; ?>" class="gallery__item" target="_blank">
 <img src="<?=SMALL_IMAGES_FOLDER.$images[$i]; ?>" alt="">
</a>

<?php endfor; ?>
