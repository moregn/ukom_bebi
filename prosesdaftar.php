<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

mysqli_query($koneksi,"INSERT into user(username,password,email)
    values('$username','$password','$email')");

header("location:index.php");
?>