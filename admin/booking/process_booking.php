<?php
require '../check_admin_login.php';


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$check_in = $_POST['check_in'];
$time = $_POST['time'];


require '../root/connect.php';

$sql = "insert into booking (name,email,phone,check_in,time,status)
values('$name','$email','$phone','$check_in','$time',1)";




mysqli_query($conn, $sql);
mysqli_close($conn);
header('location:../../index.php');
// header('location:index.php?success=Thêm thành công');