<?php
if (!defined("INDEX")) die("page not found");
include("db/config.php");

if (isset($_POST['send'])) {
    $id = $_POST['id'];
    $date = date('Y-m-d');
    mysqli_query($conn, "INSERT INTO blog_comment SET
            article_id = '$id',
            name = '$_POST[name]',
            email = '$_POST[email]',
            comment = '$_POST[comment]',
            date = '$date'");

    echo "add comment success";
    echo "<meta http-equiv='refresh'
    content='1; url=?preview=article_detail&id=$id'>";
}
