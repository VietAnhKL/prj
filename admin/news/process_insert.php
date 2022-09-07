<?php
require '../check_admin_login.php';
$title = $_POST['title'];
$photo = $_FILES['photo'];
$author = $_POST['author'];
$content = $_POST['content'];

$folder = 'photos/';
$file_extension = explode('.', $photo['name'])[1];
$file_name = time() . '.' . $file_extension;
$path_file = $folder . $file_name;

move_uploaded_file($photo["tmp_name"], $path_file);

require '../root/connect.php';

$sql = "insert into news (title,photo,content,author)
values('$title','$file_name','$content','$author')";

mysqli_query($conn, $sql);
mysqli_close($conn);

header('location:index.php?success=Thêm thành công');