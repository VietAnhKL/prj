<?php
        $token = $_GET['token'];
        require 'root/connect.php';
        $sql = "select * from forgot_password
        where token = '$token'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) === 0){
            header('location:index.php');
        }
    ?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Animated Login Form | CodingNepal</title>
  <link rel="stylesheet" href="style_sign.css">
</head>

<body>
  <div class="center">
    <h1>CHANGE NEW PASSWORD</h1>
    <form action="process_change_new_password.php" autocomplete="off" method="post">
    <input name="token" type="hidden" value="<?php echo $token ?>">
    <div class="txt_field">
        <input name="password" autocomplete="off" type="password" required>
        <span></span>
        <label>New Password </label>
      </div>

      <input style="    margin-bottom: 20px;" type="submit" value="Change Password">
      
    </form>
  </div>

</body>

</html>