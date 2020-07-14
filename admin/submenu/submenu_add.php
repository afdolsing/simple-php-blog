<?php

include("../db/config.php");

if(isset($_POST['add'])){
    $title = $_POST['title'];
    $menu_id = $_POST['parent'];
    $link = $_POST['link'];
    $thread = $_POST['thread'];
    // input database
    mysqli_query($conn, "INSERT INTO blog_submenu SET 
    menu_id = '$menu_id', 
    title = '$title',
    link = '$link', 
    thread = '$thread'
    ");

    echo "add success";
    echo "<meta http-equiv='refresh'
    content='1; url=?preview=submenu'>";
}
?>

<h2>Add SubMenu</h2>

<form action="" method="POST">
    <table>
        <tr>
            <td>Menu Title</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Menu Parent</td>
            <td>
                <select name="parent">
                    <?php 
                    $sqlmenu = mysqli_query($conn, "SELECT * FROM blog_menu");
                    while($datamenu = mysqli_fetch_array($sqlmenu)){
                        echo "<option value='$datamenu[menu_id]'>$datamenu[title]</option>";
                    }
                    ?>
                </select>
            </td>
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