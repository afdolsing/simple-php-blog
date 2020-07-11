<?php

include("../db/config.php");

if(isset($_POST['add'])){
    // $_FILES = Array dua dimensi untuk mennyimpan file
    $image_name = $_FILES['image']['name'];
    // tmp atau Temporary File adalah file-file yang penggunaannya hanya bersifat sementara
    $image_location = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];

    $date = date('Y-m-d');
    $title = $_POST['title'];
    $content = $_POST['content'];


    // 4 = cek apakah tidak ada gambar yang di upload
    if($error === 4){
        echo "<script> alert('choose image!');</script>";
        echo "<meta http-equiv='refresh'
        content='1; url=?preview=article_add'>";
        return false;
    }
    // cek apakah yang diupload bukan gambar
    $image_extend_valid = ['jpg','jpeg','png'];
    $image_extend = explode(".",$image_name);
    $image_extend = strtolower(end($image_extend));
    if(!in_array($image_extend, $image_extend_valid)){
        echo "<script> alert('please choose valid image!');</script>";
        echo "<meta http-equiv='refresh'
        content='1; url=?preview=article_add'>";
        return false;
    }
    // cek ukuran gambar maks 5 MB / 5000000 byte
    if($image_size > 5000000){
        echo "<script> alert('your image is too big');</script>";
        echo "<meta http-equiv='refresh'
        content='1; url=?preview=article_add'>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    $uploaded = move_uploaded_file($image_location,"../image/article/$image_name");
    if($uploaded){  
        mysqli_query($conn, "INSERT INTO blog_article SET 
            title = '$title', 
            content = '$content', 
            article_date = '$date',
            image_name = '$image_name'
            ");
        echo "<script>alert('suksees')</script>";
        echo "<meta http-equiv='refresh'
        content='1; url=?preview=article'>";
    }else{
        echo "failed";
        echo "<meta http-equiv='refresh'
        content='1; url=?preview=article_add'>";
    }
}
