<?php
require '../check_admin_login.php';
$id = $_GET['id'];


require '../root/connect.php';

$sql = "delete from meal 
where
id = '$id'";

mysqli_query($conn, $sql);
mysqli_close($conn);

header('location:index.php');