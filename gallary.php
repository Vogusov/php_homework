<?php
$images = scandir("images");

for ($i=2; $i < count($images); $i++): ?>

<a href="images/<?=$images[$i]; ?>" class="image" target="_blank">
 <img src="images/<?=$images[$i]; ?>" alt="">
</a>

<?php endfor; ?>