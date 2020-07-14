<?php
if(!defined("INDEX")) die("page not found");
include('db/config.php');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mess = $_POST['mess'];

    $subject = "message from visitor";
    $from = "my.email@gmail.com";
    $date = date('Y-m-d');

    mail($email,$subject,$mess,$from);

    mysqli_query($conn, "INSERT INTO blog_message SET
                name = '$name',
                email = '$email',
                subject = '$subject',
                message = '$mess',
                date = '$date'");
    
    echo "message has sent";
    echo "<meta http-equiv='refresh'
    content='1; url=?preview=contact'>";
}


?>
<h2>Contact us</h2>
<form action="" method="POST">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" ></td>
        </tr> 
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" ></td>
        </tr> 
        <tr>
            <td>Message</td>
            <td><textarea name="mess" cols="80" rows="15"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="send">send</button></td>
        </tr> 
    </table>
</form>