<?php
    if(isset($_POST['add'])){
        $title = $_POST['title'];
        $link = $_POST['link'];
        $thread = $_POST['thread'];
        // input database
        mysqli_query($conn, "INSERT INTO blog_menu (title, link, thread) VALUE (
            '$title', '$link', '$thread')");

        header("Location: ?preview=menu");
    }
?>

<h2>Add Menu</h2>

<form action="" method="POST" name="add">
    <table>
        <tr>
            <td>Menu Title</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Link</td>
            <td><input type="text" name="link"></td>
        </tr>
        <tr>
            <td>Thread</td>
            <td><input type="text" name="thread"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="add">Add</button></td>
        </tr>
    </table>
</form>