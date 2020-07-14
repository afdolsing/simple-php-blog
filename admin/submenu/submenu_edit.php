<?php
include('../db/config.php');
$sql = mysqli_query($conn, "SELECT * FROM blog_submenu WHERE submenu_id='$_GET[id]'");
$data = mysqli_fetch_array($sql);

if(isset($_POST['edit'])){
    mysqli_query($conn, "UPDATE blog_submenu SET 
    title = '$_POST[title]',
    menu_id = '$_POST[parent]',
    link = '$_POST[link]',
    thread = '$_POST[thread]'
    WHERE submenu_id = '$_POST[id]'
    ");

    echo "edit success";
    echo "<meta http-equiv='refresh'
    content='1; url=?preview=submenu'>";
}

?>

<h2>Edit Menu</h2>
<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $data['submenu_id']; ?>">
    <table>
        <tr>
            <td>SubMenu Title</td>
            <td><input type="text" name="title" value="<?= $data['title']; ?>"></td>
        </tr>
        <tr>
            <td>Menu Parent</td>
            <td>
                <select name="parent">
                    <?php 
                    $sqlmenu = mysqli_query($conn, "SELECT * FROM blog_menu");
                    while($datamenu = mysqli_fetch_array($sqlmenu)){
                        if($datamenu['menu_id']== $data['menu_id']){
                            echo "<option value='$datamenu[menu_id]'>$datamenu[title]</option>";
                        }else{
                            echo "<option value='$datamenu[menu_id]'>$datamenu[title]</option>";
                        }
                        
                    }
                    ?>
                </select>
            </td>
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