<?php
if(!defined("INDEX")) die("page not found");
include('db/config.php');
// mysqli_query($conn, "UPDATE article SET hits=hits+1
// WHERE article_id='$_GET[id]'");

$article = mysqli_query($conn, "SELECT * FROM blog_article WHERE article_id = '$_GET[id]'");
$data = mysqli_fetch_array($article);
$content = $data['content'];
?>

<div class="article">
    <h2 class="title">
        <?= $data['title'] ?>
    </h2>
    <p>
        <?php if($data['image_name'] != "") ?>
        <img src="image/article/<?= $data['image_name']; ?>" class="image-article" width="350">
        <?= $content ?>
    </p>
</div>