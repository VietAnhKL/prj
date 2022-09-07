<?php
function current_url()
{
    $url      = "http://" . $_SERVER['HTTP_HOST'];

    return $url;
}

$email = $_POST['email'];
require 'root/connect.php';
$sql = "select id,name from admin
    where email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) === 1) {
    $each = mysqli_fetch_array($result);
    $id = $each['id'];
    $name = $each['name'];
    $sql = "delete from forgot_password
        where admin_id = '$id'";
    mysqli_query($conn, $sql);
    $token = uniqid();
    $sql = "insert into forgot_password(admin_id,token)
        values('$id','$token')";
    mysqli_query($conn, $sql);

    $link = current_url() . '/Project_Aptech/admin/change_new_password.php?token=' . $token;

    require 'mail.php';
    $title = 'Change New Password';
    $content = "<a href='$link'> Bấm vào đề thay đổi mật khẩu  </a>";
    sendmail($email, $name, $title, $content);
    header('location:index.php');
    exit;
}
else{
    session_start();
$_SESSION['errror'] = 'Sai email rồi';
header('location:forgot_password.php');

}

