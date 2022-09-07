<?php
$username = $_POST['username'];
$password = $_POST['password'];

require 'root/connect.php';
$sql = "select * from admin
where username = '$username' and password = '$password'";
$result = mysqli_query($conn, $sql);
$number_rows = mysqli_num_rows($result);

if ($number_rows == 1) {
    session_start();
    $each = mysqli_fetch_array($result);
    // $id = $each['id'];
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $each['name'];
    $_SESSION['level'] = $each['level'];
    
    header('location:root/index.php');
    exit;
}

header('location:index.php?error=Đăng nhập sai rồi');
