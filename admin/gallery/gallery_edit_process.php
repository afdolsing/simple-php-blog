<?php
include('../db/config.php');

if(isset($_POST['edit'])){
    // $_FILES = Array dua dimensi untuk mennyimpan file
    $image_name = $_FILES['image']['name'];
    // tmp atau Temporary File adalah file-file yang penggunaannya hanya bersifat sementara
    $image_location = $_FILES['image']['tmp_name'];
    $image_type = $_FILES['image']['type'];
    $error = $_FILES['image']['error'];

    $id = $_POST['id'];
    $title = $_POST['title'];
    $date = date('Y-m-d');

    // jika tidak ada gambar, gambar lama tidak diganti
    if($error === 4){
        mysqli_query($conn, "UPDATE blog_gallery SET 
        title = '$title', 
        date = '$date'
        WHERE gallery_id = '$id' 
        ");
    }else{
        $data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM blog_gallery WHERE gallery_id = '$id'"));
        // jika ada gambar, hapus gambar lama
        if ($data['image'] != ""){
            unlink("../image/gallery/$data[image]");
            move_uploaded_file($image_location,"../image/gallery/$image_name");
            
            mysqli_query($conn, "UPDATE blog_gallery SET 
            title = '$title', 
            date = '$date',
            image = '$image_name'
            WHERE gallery_id = '$id' 
            ");
        }
    }
    echo "Edit Success";
    echo "<meta http-equiv='refresh'
    content='1; url=?preview=gallery'>";
}
?>