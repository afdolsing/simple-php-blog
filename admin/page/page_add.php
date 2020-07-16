<?php
    if(isset($_POST['add'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        // input database
        mysqli_query($conn, "INSERT INTO blog_page (title, content) VALUE (
            '$title', '$content')");

    echo "Add Success";
    echo "<meta http-equiv='refresh'
    content='1; url=?preview=page'>";
    }
?>

<h2>Add Page</h2>

<form action="" method="POST" name="add">
    <table>
        <tr>
            <td>Menu Title</td>
            <td><input type="text" name="title" size="50"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><textarea name="content" id="" cols="100" rows="15"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="add">Add</button></td>
        </tr>
    </table>
</form>