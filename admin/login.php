<?php
session_start();
require('../db/config.php');

// jika sessiom sudah login kembalikan ke dashboard admin
if(isset($_SESSION['login'])){
    header('location: admin.php');
    exit;
}

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM blog_users WHERE username = '$username'");
    // cek username
    /* Fungsi mysql_num_rows() digunakan untuk mengetahui berapa banyak jumlah baris hasil pemanggilan fungsi mysql_query()
        kalau ketemu pasti nilai satu, kalau tidak nilai 0
    */
    if (mysqli_num_rows($result) === 1){
        //cek password
        // $row akan menyimpan data user yang login
        $row = mysqli_fetch_assoc($result);
        // mengecek string sama atau tidak dengan hash
       if( password_verify($password, $row['password'])){
           //set session
           $_SESSION['login'] = true;

           header('location: admin.php');
           exit;
       }
    }
    echo "<script>alert('Invalid username or password!') </script>";
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container">
        <h3>Login Administrator</h3>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Username : </td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="password"></td>    
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="login">Login</button></td>

                </tr>
            </table>
        </form>
    </div>
</body>

</html>