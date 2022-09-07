<?php
require '../check_admin_login.php';
include '../dashboard/dashboard.php';
include '../dashboard/menu.php';
 
?>

       
        <?php require '../menu.php'; ?>


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
    <h3 style="color: #fff">Add Chef</h3>
    <form action="process_insert.php" method="post" name="frm" enctype="multipart/form-data">
        <table width="700" border="0" cellspacing="40" cellpadding="15">
            <tbody>
                <tr>
                    <td style="color: #fff">Chef</td>
                    <td><input type="text" name="name" id="ten_loai_mon_an" size="30"></td>
                </tr>
                <tr>
                    <td style="color: #fff">Role</td>
                    <td><input type="text" name="role" id="ten_loai_mon_an" size="30"></td>
                </tr>
                <tr style="margin-bottom:20px">
                    <td style="color: #fff">Image</td>
                    <td style="color: #fff"><input type="file" name="photo"></td>
                </tr>
                <tr>
                    <td style="color: #fff">Description</td>
                    <td><textarea name="description" rows="5" cols="50"></textarea></td>
                </tr>
                <tr align="center">
                    <td colspan="2">
                        <input class="btn btn-primary" type="submit" name="cap_nhat" id="cap_nhat" value="Add">&nbsp;&nbsp;&nbsp;
                        <input class="btn btn-primary" type="button" name="bo_qua" value="Cancel" onclick="window.location='index.php'">
                    </td>

                </tr>
            </tbody>
        </table>

    </form>
</div>
</body>

</html>