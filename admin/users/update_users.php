<?php 
require '../check_super_admin_login.php';
include '../dashboard/dashboard.php';
include '../dashboard/menu.php';
require '../menu.php';

    $id = $_GET['id'];
    $sql = "select * from admin
    where id = '$id'";

    $result = mysqli_query($conn, $sql);

    $each = mysqli_fetch_array($result);
    
    if (isset($_SESSION['errror'])) {
      ?>
      
      
        <span style="color:red">
          <?php echo $_SESSION['errror']; ?>
        </span>
      
      <?php
        unset($_SESSION['errror']);
      }
      

?>
<div style="border-top:#09F solid 1px; margin:15px">

  <h3 style="color: #fff">Add User</h3>
  <form action="process_update.php" method="post" enctype="multipart/form-data" name="frm">
  <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
  <table width="800" border="0" cellspacing="5" cellpadding="5">
      <tbody>
        <tr>
          <td style="color: #fff"Name</td>
          <td><input type="text" name="name" id="ten_mon" value="<?php echo $each['name'] ?>"></td>
        </tr>
        <tr>
          <td style="color: #fff">Email</td>
          <td><input type="text" name="email" id="ten_mon" value="<?php echo $each['email'] ?>"></td>
        </tr>
        <tr>
          <td style="color: #fff">Username</td>
          <td><input type="text" name="username" id="ten_mon" value="<?php echo $each['username'] ?>"></td>
        </tr>
        <tr>
          <td style="color: #fff">Password</td>
          <td><input type="password" name="password" id="ten_mon" value="<?php echo $each['password'] ?>"></td>
        </tr>
        <tr>
          <td style="color: #fff">Address</td>
          <td><input type="text" name="address" id="ten_mon" value="<?php echo $each['address'] ?>"></td>
        </tr>
        <tr>
          <td style="color: #fff">Phone</td>
          <td><input type="tel" name="phone_number" id="ten_mon" value="<?php echo $each['phone_number'] ?>"></td>
        </tr>
        <tr>
          <td style="color: #fff">New Image</td>
          <td style="color: #fff"><input type="file" name="photo_new"></td>
        </tr>
        <tr>
            <td style="color: #fff">Keep Old Image</td>
            <td>
                <img height="100" src="photos/<?php echo $each['photo'] ?>">
                <input type="hidden" name="photo_old" value="<?php echo $each['photo'] ?>">
            </td>
        </tr>
        <tr>
          <td style="color: #fff">Type of administration</td>
          <td>
            <select name="level">
              <option value="0">Admin</option>
              <option value="1">Super Admin</option>
            </select>
          </td>
        </tr>

        <tr align="center">
          <td colspan="2">
            <input class="btn btn-primary" type="submit" name="cap_nhat" value="Update" id="cap_nhat">&nbsp;&nbsp;
            <input class="btn btn-primary" type="button" name="bo_qua" value="Cancel" onclick="window.location='index.php'">
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
</body>

</html>