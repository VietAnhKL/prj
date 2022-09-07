<?php
require '../check_admin_login.php';
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
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

$sql = "update news
set 
title = '$title',
photo = '$file_name',
content = '$content'
where 
id = '$id'";

mysqli_query($conn,$sql);
mysqli_close($conn);

header('location:index.php?success=Sửa thành công');