<?php
require '../check_super_admin_login.php';
$id = $_GET['id'];
$sql ="select * from admin";
$result = mysqli_query($conn, $sql);
$each = mysqli_fetch_array($result);
if($each['level'] == 1) {
    header('location:index.php?error=Không thể xóa được Super Admin');
    exit;
}

require '../root/connect.php';

$sql = "delete from admin 
where
id = '$id'";

mysqli_query($conn, $sql);
mysqli_close($conn);

header('location:index.php');