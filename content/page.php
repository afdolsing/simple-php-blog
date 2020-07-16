<?php
    if(!defined("INDEX")) die("page not found");

    $article = mysqli_query($conn, "SELECT * FROM blog_page 
                                    WHERE page_id ='$_GET[id]'");
    $data = mysqli_fetch_array($article);
    $content = $data['content'];
?>

<div class="page">
    <h2 class="title">
        <?= $data['title'] ?>
    </h2>
    <p>
        <?= $content ?>
    </p>
</div>