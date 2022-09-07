<?php
require '../check_admin_login.php';
if (empty($_POST['name']) || empty($_POST['description']) || empty($_FILES['photo'])) {
    header('location:add_meal.php?error=Phải điền đầy đủ thông tin');
    exit;
}
$name = $_POST['name'];
$photo = $_FILES['photo'];
$price = $_POST['price'];
$description = $_POST['description'];
$description_detail = $_POST['description_detail'];
$category_id = $_POST['category_id'];

$folder = 'photos/';
$file_extension = explode('.', $photo['name'])[1];
$file_name = time() . '.' . $file_extension;
$path_file = $folder . $file_name;

move_uploaded_file($photo["tmp_name"], $path_file);

require '../root/connect.php';

$sql = "insert into meal (name,photo,description,description_detail,price,category_id)
values('$name','$file_name','$description','$description_detail','$price','$category_id')";


mysqli_query($conn, $sql);
mysqli_close($conn);

header('location:index.php?success=Thêm thành công');