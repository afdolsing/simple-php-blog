<?php

if(!defined("INDEX")) die("...");
include("db/config.php");

$article = mysqli_query($conn, "SELECT * FROM blog_article ORDER BY article_id DESC");
while($data = mysqli_fetch_array($article)):
    $content = substr($data['content'],0,800);
    ?>
<div class="article">
    <h2 class="title"><?= $data['title']; ?></h2>
    <p>
        <?php if($data['image_name'] != "") ?>
        <img src="image/article/<?= $data['image_name']; ?>" class="image-article" width="200">

        <?= $content; ?>
        <a href="?preview=article_detail&id=
        <?= $data['article_id']; ?>
        "></a>
    </p>
</div>
<?php endwhile ?>