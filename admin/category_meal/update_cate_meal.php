<?php
require '../check_admin_login.php';
include '../dashboard/dashboard.php';
include '../dashboard/menu.php';
$id = $_GET['id'];
$sql = "select * from category
    where id = '$id'";
$result = mysqli_query($conn, $sql);
$each = mysqli_fetch_array($result);

?>
?>
<div style="border-top:#09F solid 1px; margin:15px">
    <!--viết code để kiểm tra dữ liệu dữ liệu-->
    <!-- <script language="javascript">
    $(document).ready(function(e) {
        $('#cap_nhat').click(function() {
            var tieude = $("#ten_loai_mon_an");
            if (tieude.val() == "") {
                alert("Bạn phải nhập tên loại");
                tieude.focus();
                return false;
            }
            return true;
        })

    });
    </script> -->
    <h3 style="color: #fff">Add Type of Meal</h3>
    <form action="process_update.php" method="post" name="frm" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
        <table width="700" border="0" cellspacing="40" cellpadding="15">
            <tbody>
                <tr>
                    <td style="color: #fff">Type of Meal</td>
                    <td><input type="text" name="name" id="ten_loai_mon_an" size="30" value="<?php echo $each['name'] ?>"></td>
                </tr>
                <tr>
                    <td style="color: #fff">Description</td>
                    <td><textarea name="description" rows="5" cols="50" style="text-align:justify">
                    <?php echo $each['description'] ?>
                    </textarea></td>
                </tr>
                <tr>
                    <td style="color: #fff">New Image</td>
                    <td><input type="file" name="photo_new"></td>
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
                        <input class="btn btn-primary" type="submit" name="cap_nhat" id="cap_nhat" value="Update">&nbsp;&nbsp;&nbsp;
                        <input class="btn btn-primary" type="button" name="bo_qua" value="Cancel" onclick="window.location='cate_meal.php'">
                    </td>

                </tr>
            </tbody>
        </table>

    </form>
</div>
</body>

</html>