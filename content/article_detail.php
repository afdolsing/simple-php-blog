<?php
    if (!defined("INDEX")) die("page not found");

    $article = mysqli_query($conn, "SELECT * FROM blog_article 
                                    WHERE article_id = '$_GET[id]'");
    $data = mysqli_fetch_array($article);
    $content = $data['content'];
?>

<div class="article">
    <h2 class="title">
        <?= $data['title'] ?>
    </h2>
    <p>
        <?php if ($data['image_name'] != "") ?>
            <img src="image/article/<?= $data['image_name'] ?>" class="image-article" width="200">
           
    </p>
    <p class=content-article>
    <?= $content ?>
</p>
    
</div>

<!-- bagian 1 -->
<?php
    $comment = mysqli_query($conn, "SELECT * FROM blog_comment 
                                    WHERE article_id = '$_GET[id]'");
    $comment_result = mysqli_num_rows(($comment));
?>
<h3><?= $comment_result ?> Comment</h3>
<?php
    while ($datacomment = mysqli_fetch_array($comment)) :
?>
        <div class="comment">
            <h4><?= $datacomment['name'] ?> - <?= $datacomment['date'] ?></h4>
            <p><?= $datacomment['comment'] ?></p>
        </div>
<?php endwhile ?>

<!-- bagian 2 -->
<h3>Comment content</h3>
<form action="?preview=comment_process" method="POST" class="formcomment">
    <input type="hidden" name="id" value="<?= $data['article_id'] ?>">
    <table>
        <tr>
            <td width="25%">Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td valign="top">Comment</td>
            <td><textarea name="comment" cols="80" rows="15"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="send" value="Send Comment"></td>
        </tr>
    </table>
</form>