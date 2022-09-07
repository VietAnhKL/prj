<?php

$token = $_POST['token'];
$password = $_POST['password'];

require 'root/connect.php';
$sql = "select admin_id from forgot_password
        where token = '$token'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) === 0) {
    header('location:index.php');
    exit;
}
$admin_id = mysqli_fetch_array($result)['admin_id'];
$sql = "update admin
set
password = '$password'
where
id = '$admin_id'";
mysqli_query($conn,$sql);

$sql = "delete from forgot_password
        where token = '$token'";
mysqli_query($conn, $sql);
header('location:index.php');