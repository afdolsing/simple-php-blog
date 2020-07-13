<?php
include('../db/config.php');
$sql = mysqli_query($conn, "SELECT * FROM blog_message WHERE mess_id='$_GET[id]'");
$data = mysqli_fetch_array($sql);

// reply hanya dummy aja... bukan beneran terkirim ^_^
if(isset($_POST['reply'])){
    mail($_POST['email'],$_POST['subject'],$_POST['message'], "From: singgihmuda@gmail.com");

    echo "reply success";
    echo "<meta http-equiv='refresh'
    content='1; url=?preview=message'>";
}
?>

<h2>Edit Menu</h2>
<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $data['menu_id']; ?>">
    <table>
        <tr>
            <td>For</td>
            <td><input type="text" name="email" size="50" value="<?= $data['email']; ?>"></td>
        </tr>
        <tr>
            <td>Subject</td>
            <td><input type="text" name="subject" size="50" value="Reply: <?= $data['subject']; ?>"></td>
        </tr>
        <tr>
            <td>Message</td>
            <td><textarea name="message" id="" cols="100" rows="15">
                <?= $data['message']; ?>
            </textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="reply">reply</button></td>
        </tr>
    </table>
</form>