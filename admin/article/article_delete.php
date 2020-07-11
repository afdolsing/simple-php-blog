<?php

include('../db/config.php');
// id yg akan dihapus..
$id = $_GET['id'];

$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM blog_article WHERE article_id = '$id'"));
// jika ada gambar, hapus gambar lama
if ($data['image_name'] != "") {
    unlink("../image/article/$data[image_name]");

    mysqli_query($conn, "DELETE FROM blog_article WHERE article_id = '$id'");
}

echo "Delete Success";
echo "<meta http-equiv='refresh'
content='1; url=?preview=article'>";
