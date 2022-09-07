<?php
require '../check_admin_login.php';
if (empty($_POST['name']) || empty($_POST['description']) || empty($_FILES['photo'])) {
    header('location:add_cate_meal.php?error=Phải điền đầy đủ thông tin');
    exit;
}
$name = $_POST['name'];
$description = $_POST['description'];
$photo = $_FILES['photo'];

$folder = 'photos/';
$file_extension = explode('.', $photo['name'])[1];
$file_name = time() . '.' . $file_extension;
$path_file = $folder . $file_name;

move_uploaded_file($photo["tmp_name"], $path_file);
require '../root/connect.php';

$sql = "insert into category (name,photo,description)
values('$name','$file_name','$description')";



mysqli_query($conn, $sql);
mysqli_close($conn);
header('location:add_cate_meal.php');
// header('location:index.php?success=Thêm thành công');