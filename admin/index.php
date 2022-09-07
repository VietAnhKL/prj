
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
    <h1>Login</h1>
    <form action="process_login.php" autocomplete="off" method="post">
      <div style="padding-top: 30px;">
      <?php
      require 'menu.php';
      ?>
     </div>
      <div class="txt_field">
        <input name="username" autocomplete="off" type="text" required>
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input name="password" autocomplete="off" type="password" required>
        <span></span>
        <label>Password</label>
      </div>
      
      <input class="pass" type="checkbox"> Remember me!
      <input type="submit" value="Login">
      <div class="signup_link">
        Not a member? <a href="sign_up.php">Sign up</a>
      </div>
      <div class="signup_link">
        <a href="forgot_password.php">You forgot your password? </a>
      </div>
    </form>
  </div>

</body>

</html>