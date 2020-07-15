<?php
if (!defined("INDEX")) die("page not found");
include("db/config.php");
?>

<div class="box">
    <h3 class="title">Search</h3>
    <form action="?preview=search" method="POST">
        <input type="text" name="word" placeholder="search article">
        <input type="submit" value="search">
    </form>
    <h3 class="title">New Article</h3>
    <ul>
        <?php
        $article = mysqli_query($conn, "SELECT * FROM blog_article ORDER BY article_id DESC LIMIT 5");
        while ($data = mysqli_fetch_array($article)) {
            echo "<li><a href='?preview=article_detail&id=
            $data[article_id]'>$data[title]</a></li>";
        }
        ?>
    </ul>
</div>