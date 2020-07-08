<?php
include('config.php');
$sql = mysqli_query($conn, "SELECT * FROM blog_menu WHERE menu_id='$_GET[id]'");
$data = mysqli_fetch_array($sql);

?>

<h2>Edit Menu</h2>
<form action="?preview=menu_edit_process" method="POST">
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