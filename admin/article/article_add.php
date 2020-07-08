<?php

include("../db/config.php");

if(isset($_POST['add'])){
    $title = $_POST['title'];
    $link = $_POST['link'];
    $thread = $_POST['thread'];
    // input database
    mysqli_query($conn, "INSERT INTO blog_menu (title, link, thread) VALUE (
        '$title', '$link', '$thread')");

    header("Location: ?preview=menu");
}
?>

<h2>Add Article</h2>

<form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Article Title</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><textarea name="content" cols="30" rows="15"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="add">Add</button></td>
        </tr>
    </table>
</form>