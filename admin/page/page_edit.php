<?php 
include("../db/config.php"); 
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM blog_page WHERE page_id='$id'");
$data = mysqli_fetch_array($result);

if(isset($_POST['edit'])){
    $title = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query($conn,"UPDATE blog_page SET
        title = '$title',
        content = '$content'
        WHERE page_id = '$id'");
    
    echo "<script>alert('Edit Success')</script>";
    header('Location: ?preview=page');
}
?>

<h2>Edit Page</h2>
<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $data['page_id']; ?>">
    <table>
        <tr>
            <td>Article Title</td>
            <td><input type="text" name="title" value="<?= $data['title']; ?>"></td>
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