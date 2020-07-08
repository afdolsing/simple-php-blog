<?php
include('../db/config.php');
$sql = mysqli_query($conn, "SELECT * FROM blog_menu WHERE menu_id='$_GET[id]'");
$data = mysqli_fetch_array($sql);

if(isset($_POST['edit'])){
    mysqli_query($conn, "UPDATE blog_menu SET 
    title = '$_POST[title]',
    link = '$_POST[link]',
    thread = '$_POST[thread]'
    WHERE menu_id = '$_POST[id]'
    ");

    echo "edit success";
    echo "<meta http-equiv='refresh'
    content='1; url=?preview=menu'>";
}

?>

<h2>Edit Menu</h2>
<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $data['menu_id']; ?>">
    <table>
        <tr>
            <td>Menu Title</td>
            <td><input type="text" name="title" value="<?= $data['title']; ?>"></td>
        </tr>
        <tr>
            <td>Link</td>
            <td><input type="text" name="link" value="<?= $data['link']; ?>"></td>
        </tr>
        <tr>
            <td>Thread</td>
            <td><input type="text" name="thread" value="<?= $data['thread']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="edit">Edit</button></td>
        </tr>
    </table>
</form>