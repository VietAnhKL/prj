<?php
require '../check_super_admin_login.php';
include '../dashboard/dashboard.php';
include '../dashboard/menu.php';
require '../root/connect.php';
require '../menu.php';

// Phân trang;
$trang = isset($_GET['trang']) ? $_GET['trang'] : 1 ;
$sql_so_tin_tuc = "select count(*) from category
";
$mang_so_tin_tuc = mysqli_query($conn, $sql_so_tin_tuc);
$ket_qua_so_tin_tuc = mysqli_fetch_array($mang_so_tin_tuc);
$so_tin_tuc = $ket_qua_so_tin_tuc['count(*)'];

$so_tin_tuc_tren_1_trang = 4;


$so_trang = ceil($so_tin_tuc / $so_tin_tuc_tren_1_trang);
$so_bai_bo_qua = $so_tin_tuc_tren_1_trang * ($trang - 1);

$sql = "select * from admin
limit $so_tin_tuc_tren_1_trang  offset $so_bai_bo_qua";
$result = mysqli_query($conn, $sql);
?>
<div style="border-top:#09F solid 1px; margin:15px">
  <!--viết java co nút xóa-->
  <script language="javascript">
    /*$(document).ready(function(e) {
		$('#xoa').click(function(){
			if(confirm("Bạn có chắc chắn muốn xóa"))
				{
					var ma_mon=$('#mamon').html();
					window.location="xoa_mon_an.php?ma_mon="+ma_mon;
				}
			});
	});
	*/
    function xoa_mon_an(id) {
      if (confirm("Bạn có chắc chắn muốn xóa")) {
        window.location = "delete.php?id=" + id;
      }
    }
  </script>
  <h3 style="color:#333; font-weight:bold">User List</h3>
  <h3 align="center" style="color:red"> </h3>
  <!--dùng để thông báo khi thêm, sửa, xóa-->
  <table width="1250" border="1" cellspacing="5" cellpadding="5" style="text-align:center">
    <tbody>
      <tr style="background-color: #007bff; color: #ffffff;">
        <td width="50">ID</td>
        <td width="200">Name</td>
        <td width="150">Username</td>
        <td width="100">Password</td>
        <td width="150">Email</td>
        <td width="150">Address</td>
        <td width="100">Phone</td>
        <td width="150">Avatar</td>
        <td width="100">Type of administration</td>
        <td width="50">&nbsp;</td>
        <td width="50">&nbsp;</td>
      </tr>
      <?php
      if (is_array($result) || is_object($result)) {
        foreach ($result as $each) {
      ?>
          <tr>
            <td  style="background-color: #ffffff;" id="mamon"><?php echo $each['id'] ?></td>
            <td style="background-color: #ffffff;" ><?php echo $each['name'] ?></td>
            <td style="background-color: #ffffff;" ><?php echo $each['username'] ?></td>
            <td style="background-color: #ffffff;" ><?php echo $each['password'] ?></td>
            <td style="background-color: #ffffff;" ><?php echo $each['email'] ?></td>
            <td style="background-color: #ffffff;" ><?php echo $each['address'] ?></td>
            <td style="background-color: #ffffff;" ><?php echo $each['phone_number'] ?></td>
            <td style="background-color: #ffffff;" align="justify"><img src="photos/<?php echo $each['photo'] ?>" width="60px" height="60px" style="margin-left:30px"></td>
            <td style="background-color: #ffffff;" ><?php
                if ($each['level'] == 0) {
                  echo 'Admin';
                } else {
                  echo 'Super Admin';
                } ?></td>
            <td style="background-color: #ffffff;" ><a href="update_users.php?id=<?php echo $each['id'] ?>">Edit</a></td>
            <td style="background-color: #ffffff;" ><a href="#" id="xoa" onclick="xoa_mon_an(<?php echo $each['id'] ?>)">Delete</a></td>
          </tr>
      <?php
        }
      }
      ?>


    </tbody>
  </table>
  <div style="text-align:center; margin-top:35px">
        <?php
        if ($trang > 3) {
            $trang_dau = 1;
        ?>
            <span class="div_trang">
                <a href="?trang=<?php echo $trang_dau ?>">
                    &lt;&lt;
                </a>
            </span>

        <?php
        }
        if ($trang > 1) {
            $trang_truoc = $trang - 1;
        ?>
            <span class="div_trang">
                <a href="?trang=<?php echo $trang_truoc ?>">
                    &lt;
                </a>
            </span>
            <?php
        }

        for ($i = 1; $i <= $so_trang; $i++) {
            if ($i != $trang) {
                if ($i > $trang - 3 && $i < $trang + 3) {


            ?>
                    <span class="div_trang">
                        <a href="?trang=<?php echo $i ?>">
                            <?php echo $i ?>
                        </a>
                    </span>
                <?php
                }
            } else {

                ?>
                <span class="div_trang">
                    <a style="font-weight: bold ;" href="?trang=<?php echo $i ?>">
                        <?php echo $i ?>
                    </a>
                </span>

            <?php
            }
        }
        if ($trang < $so_trang - 1) {
            $trang_sau = $trang + 1;
            ?>
            <span class="div_trang">
                <a href="?trang=<?php echo $trang_sau ?>">
                    &gt;
                </a>
            </span>

        <?php
        }
        if ($trang <= $so_trang - 3) {
            $trang_cuoi = $so_trang;
        ?>
            <span class="div_trang">
                <a href="?trang=<?php echo $trang_cuoi ?>">
                    &gt;&gt;
                </a>
            </span>
        <?php
        }
        ?>
        <!-- <span class="div_trang"><b>1</b></span>
    <span class="div_trang"><a href="/web_nha_hang/admin/mon_an.php?page=2" title="Trang 2">2</a></span>
    <span class="div_trang"><a href="/web_nha_hang/admin/mon_an.php?page=3" title="Trang 3">3</a></span>
    <span class="div_trang"><a href="/web_nha_hang/admin/mon_an.php?page=2" title="Đến trang sau">&gt;</a></span>
    <span class="div_trang"><a href="/web_nha_hang/admin/mon_an.php?page=9" title="Đến trang cuối">&gt;&gt;</a></span> -->
    </div>

</div>
</body>

</html>