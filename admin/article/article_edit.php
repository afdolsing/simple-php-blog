<?php 
include("../db/config.php"); 
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM blog_article WHERE article_id='$id'");
$data = mysqli_fetch_array($result);

?>

<h2>Edit Article</h2>
<form action="?preview=article_edit_process" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['article_id']; ?>">
    <table>
        <tr>
            <td>Article Title</td>
            <td><input type="text" name="title" value="<?= $data['title']; ?>"></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><img src="../image/article/<?= $data['image_name']; ?>" width="200px"><br>
            <input type="file" name="image"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><textarea name="content" id="" cols="100" rows="30"><?= $data['content']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="edit">Edit</button></td>
        </tr>
    </table>
</form>