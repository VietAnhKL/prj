<?php
require '../check_super_admin_login.php';
if (empty($_POST['name']) || empty($_POST['description']) || empty($_FILES['photo'])) {
    header('location:add_users.php?error=Phải điền đầy đủ thông tin');
    exit;
}
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$level = $_POST['level'];
$photo = $_FILES['photo'];

$folder = 'photos/';
$file_extension = explode('.', $photo['name'])[1];
$file_name = time() . '.' . $file_extension;
$path_file = $folder . $file_name;

move_uploaded_file($photo["tmp_name"], $path_file);

require '../root/connect.php';

$sql = "select count(*) from admin
where email = '$email'
OR username = '$username'";
$result = mysqli_query($conn, $sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if ($number_rows >= 1) {
    session_start();
    $_SESSION['errror'] = 'Trùng email hoặc tên đăng nhập rồi.';
    header('location:add_users.php');
    exit;
}

$sql = "insert into admin (name,email,username,password,address,phone_number,level,photo)
values('$name','$email','$username','$password','$address','$phone_number','$level','$file_name')";


mysqli_query($conn, $sql);

require '../mail.php';
$title = "Đăng ký thành công - Vinegar Food Restaurant Management";
$content = "Chúc mừng bạn đã là thành viên quản trị của Vinegar Food Restaurant Management. Vui lòng bấm link:<a href='http://localhost/tasteit-master/admin/root/'>ADMIN PAGE</a> để vào trang quản trị";

sendmail($email, $name, $title, $content);
mysqli_close($conn);

header('location:add_users.php?success=Thêm thành công');
// header('location:index.php?success=Thêm thành công');