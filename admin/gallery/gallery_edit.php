<?php 
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM blog_gallery WHERE gallery_id='$id'");
    $data = mysqli_fetch_array($result);

?>

<h2>Edit Article</h2>
<form action="?preview=gallery_edit_process" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['gallery_id']; ?>">
    <table>
        <tr>
            <td>Article Title</td>
            <td><input type="text" name="title" value="<?= $data['title']; ?>"></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><img src="../image/gallery/<?= $data['image']; ?>" width="200px"><br>
            <input type="file" name="image"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="edit">Edit</button></td>
        </tr>
    </table>
</form>