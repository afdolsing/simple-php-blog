<?php
// cek session
if(!isset($_SESSION['login'])){
    // jika tidak ada session kembalikan ke login
    header('location: ../index.php');
    exit;
}
include('../db/config.php');
$sql = mysqli_query($conn, "SELECT * FROM blog_users");
$data = mysqli_fetch_array($sql);

if(isset($_POST['edit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    
    if($_POST['password'] == ""){
        mysqli_query($conn, "UPDATE blog_users SET username = '$username'");
        echo "profile has update";
    } else{
        if($password != $password2){
            echo "<script>
            alert('doesn\'t match Password')
            </script>";
        }else{
            $password = password_hash($password, PASSWORD_DEFAULT);
            // update userbaru ke database
            mysqli_query($conn, "UPDATE blog_users 
                SET username = '$username',
                    password = '$password'");
            echo "success edit";
        }
    }
    echo "<meta http-equiv='refresh'
    content='1; url=?preview=user_edit'>";
}

?>

<h2>Edit User</h2>
<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $data['user_id']; ?>">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?= $data['username']; ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="password" name="password2"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="edit">Change Profile</button></td>
        </tr>
    </table>
</form>