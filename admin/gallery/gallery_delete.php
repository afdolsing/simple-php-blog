<?php

include('../db/config.php');
// id yg akan dihapus..
$id = $_GET['id'];

$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM blog_gallery WHERE gallery_id = '$id'"));
// jika ada gambar, hapus gambar lama
if ($data['image'] != "") {
    unlink("../image/gallery/$data[image]");

    mysqli_query($conn, "DELETE FROM blog_gallery WHERE gallery_id = '$id'");
}

echo "Delete Success";
echo "<meta http-equiv='refresh'
content='1; url=?preview=gallery'>";
