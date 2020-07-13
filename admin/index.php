<?php
session_start();
//cek session
if(!isset($_SESSION['login'])){
    // tidak ada session login kembalikan ke login.php
    header("location:login.php");
  }else{
    header("location:admin.php");
  }
?>
