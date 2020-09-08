<?php
include "config.php";

$sql = "select * from images order by views desc";
$res = mysqli_query($connect, $sql);

if (mysqli_num_rows($res) > 0) {

while($images = mysqli_fetch_assoc($res)):?>
    <a href="image.php?id=<?=$images['id']; ?>" class="gallery__item" target="_blank">
        <img src="<?=$images['location_small'].$images['name']; ?>" alt="">
    </a>
<?php endwhile;
} else {
    echo "<h3>В базе нет нужных данных!</h3>>";
}
mysqli_close($connect);
?>