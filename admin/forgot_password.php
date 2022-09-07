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
    <h1>FORGOT PASSWORD</h1>
    <?php
    session_start();
      if (isset($_SESSION['errror'])) {
      ?>
      <div style="padding-top: 20px;
    padding-left: 40px;" >
        <span style="color:red">
          <?php echo $_SESSION['errror']; ?>
        </span>
        </div>
      <?php
        unset($_SESSION['errror']);
      }

      ?>
    <form action="process_forgot_password.php" autocomplete="off" method="post">
      
      <div class="txt_field">
        <input name="email" autocomplete="off" type="email" required>
        <span></span>
        <label>Email</label>
      </div>

      <input style="    margin-bottom: 20px;" type="submit" value="Send mail to change password">

    </form>
  </div>

</body>

</html>