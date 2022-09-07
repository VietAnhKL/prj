<?php
require '../check_super_admin_login.php';
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$photo_new = $_FILES['photo_new'];
if($photo_new['size'] > 0){
    $folder = 'photos/';
    $file_extension = explode('.', $photo_new['name'])[1];
    $file_name = time() . '.' . $file_extension;
    $path_file = $folder . $file_name;
    move_uploaded_file($photo_new["tmp_name"], $path_file);
}
else {
    $file_name = $_POST['photo_old'];
}


require '../root/connect.php';

// $sql = "select count(*) from admin
// where email = '$email'
// OR username = '$username'";
// $result = mysqli_query($conn, $sql);
// $number_rows = mysqli_fetch_array($result)['count(*)'];

// if ($number_rows >= 1) {
//     session_start();
//     $_SESSION['errror'] = 'Trùng email hoặc tên đăng nhập với người khác rồi.';
//     header("location:update_users.php");
//     exit;
// }


$sql = "update admin
set 
name = '$name',
photo = '$file_name',
email = '$email',
username = '$username',
password = '$password',
address = '$address'
phone_number = '$phone_number'
where 
id = '$id'";

mysqli_query($conn,$sql);
mysqli_close($conn);

header('location:index.php?success=Sửa thành công');