<?php 
require '../check_admin_login.php';
include '../dashboard/dashboard.php';
include '../dashboard/menu.php';
require '../root/connect.php';
require '../menu.php'; 
$sql = "select * from category";
$result = mysqli_query($conn, $sql);


?>
<div style="border-top:#09F solid 1px; margin:15px">

  <h3 style="color: #fff">Add Meal</h3>
  <form action="process_insert.php" method="post" enctype="multipart/form-data" name="frm">
    <table width="800" border="0" cellspacing="5" cellpadding="5">
      <tbody>
        <tr>
          <td style="color: #fff">Meal</td>
          <td><input type="text" name="name" id="ten_mon"></td>
        </tr>
        <tr>
          <td style="color: #fff">Type of Meal</td>
          <td>
            <select name="category_id">
              <?php
              foreach ($result as $each) {
              ?>
                <option value="<?php echo $each['id'] ?>"><?php echo $each['name'] ?></option>
              <?php
              }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td style="color: #fff">Description</td>
          <td><textarea name="description" rows="5" cols="50"></textarea></td>
        </tr>
        <tr>
          <td style="color: #fff">Description Detail</td>
          <td><textarea name="description_detail" rows="5" cols="50" id="noi_dung_chi_tiet"></textarea>
          </td>
        </tr>
        <tr>
          <td style="color: #fff">Price</td>
          <td><input type="number" size="30" name="price"></td>
        </tr>
        <tr>
          <td style="color: #fff">Image</td>
          <td style="color: #fff"><input type="file" name="photo"></td>
        </tr>
        <tr align="center">
          <td colspan="2">
            <input class="btn btn-primary" type="submit" name="cap_nhat" value="Add" id="cap_nhat">&nbsp;&nbsp;
            <input class="btn btn-primary" type="button" name="bo_qua" value="cancel" onclick="window.location='index.php'">
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
</body>

</html>