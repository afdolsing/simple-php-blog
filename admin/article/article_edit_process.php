<?php
if(isset($_POST['edit'])){
    // $_FILES = Array dua dimensi untuk mennyimpan file
    $image_name = $_FILES['image']['name'];
    // tmp atau Temporary File adalah file-file yang penggunaannya hanya bersifat sementara
    $image_location = $_FILES['image']['tmp_name'];
    $image_type = $_FILES['image']['type'];
    $error = $_FILES['image']['error'];

    $article_id = $_POST['id'];
    $title = $_POST['title'];
    $date = date('Y-m-d');
    $content = $_POST['content'];

    // jika tidak ada gambar, gambar lama tidak diganti
    if($error === 4){
        mysqli_query($conn, "UPDATE blog_article SET 
        title = '$title', 
        content = '$content', 
        article_date = '$date'
        WHERE article_id = '$article_id' 
        ");
    }else{
        $data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM blog_article WHERE article_id = '$article_id'"));
        // jika ada gambar, hapus gambar lama
        if ($data['image_name'] != ""){
            unlink("../image/article/$data[image_name]");
            move_uploaded_file($image_location,"../image/article/$image_name");
            
            mysqli_query($conn, "UPDATE blog_article SET 
            title = '$title', 
            content = '$content', 
            article_date = '$date',
            image_name = '$image_name'
            WHERE article_id = '$article_id' 
            ");
        }
    }
    echo "Edit Success";
    echo "<meta http-equiv='refresh'
    content='1; url=?preview=article'>";
}
?>