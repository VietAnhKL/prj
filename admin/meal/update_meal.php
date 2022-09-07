<?php 
require '../check_admin_login.php';
include '../dashboard/dashboard.php';
include '../dashboard/menu.php';
require '../menu.php';
require '../root/connect.php';
$id = $_GET['id'];
    $sql = "select * from meal
    where id = '$id'";
    $result = mysqli_query($conn, $sql);
    $each = mysqli_fetch_array($result);

    $sql = "select * from category";
    $categorys = mysqli_query($conn, $sql);

?>
<div style="border-top:#09F solid 1px; margin:15px">

  <h3 style="color: #fff">Update Meal</h3>
  <form action="process_update.php" method="post" enctype="multipart/form-data" name="frm">
  <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
    <table width="800" border="0" cellspacing="5" cellpadding="5">
      <tbody>
        <tr>
          <td style="color: #fff">Meal</td>
          <td><input type="text" name="name" id="ten_mon" value="<?php echo $each['name'] ?>"></td>
        </tr>
        <tr>
          <td style="color: #fff">Type of Meal</td>
          <td>
            <select name="category_id">
              <?php
              foreach ($categorys as $category) {
              ?>
                <option value="<?php echo $category['id'] ?>"
                <?php
                    if ($each['category_id'] == $category['id']) {
                    ?>
                        selected
                    <?php } ?>
                >
                <?php echo $category['name'] ?></option>
              <?php
              }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td style="color: #fff">Description</td>
          <td><textarea name="description" rows="5" cols="50"><?php echo $each['description'] ?></textarea></td>
        </tr>
        <tr>
          <td style="color: #fff">Description Detail</td>
          <td><textarea name="description_detail" rows="5" cols="50" id="noi_dung_chi_tiet"><?php echo $each['description_detail'] ?></textarea>
          </td>
        </tr>
        <tr>
          <td style="color: #fff">Price</td>
          <td><input type="number" size="30" name="price" value="<?php echo $each['price'] ?>"></td>
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