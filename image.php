<?php
include_once 'config.php';

$tpl = file_get_contents("image.tpl");
$id = $_GET['id'];
$sql = "select * from images where id=$id";
$res = mysqli_query($connect, $sql);
$sql_views_incr = "update images set views = views+1 where id=$id";

if (mysqli_num_rows($res) > 0) {
    mysqli_query($connect, $sql_views_incr);
    $image = mysqli_fetch_assoc($res);
    $title = "image_id=$id";
    $views = $image['views'] + 1;
    $img_source = $image['location'].$image['name'];
} else {
    echo "В базе нет изображения c ID=$id!<br><a href=\"index.php\"> Вернуться в галерею </a>";
}
mysqli_close($connect);

$patterns = ['/{title}/', '/{views}/', '/{img_source}/'];
$replace = [$title, $views, $img_source];
echo preg_replace($patterns, $replace, $tpl);