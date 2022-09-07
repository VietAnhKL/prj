<?php
require '../check_admin_login.php';
include '../dashboard/dashboard.php';
include '../dashboard/menu.php';
require '../root/connect.php';
include '../menu.php';

// Phân trang;
$trang = isset($_GET['trang']) ? $_GET['trang'] : 1 ;
$sql_so_tin_tuc = "select count(*) from chef
";
$mang_so_tin_tuc = mysqli_query($conn, $sql_so_tin_tuc);
$ket_qua_so_tin_tuc = mysqli_fetch_array($mang_so_tin_tuc);
$so_tin_tuc = $ket_qua_so_tin_tuc['count(*)'];

$so_tin_tuc_tren_1_trang = 4;


$so_trang = ceil($so_tin_tuc / $so_tin_tuc_tren_1_trang);
$so_bai_bo_qua = $so_tin_tuc_tren_1_trang * ($trang - 1);



$sql = "select * from chef
limit $so_tin_tuc_tren_1_trang  offset $so_bai_bo_qua";
$result = mysqli_query($conn, $sql);
?>
<div style="border-top:#09F solid 1px; margin:15px">
    <!--viết java cho nút xóa-->
    <script language="javascript">
    function xoaloaimonan(id) {
      if (confirm("Bạn có chắc chắn muốn xóa")) {
        window.location = "delete.php?id=" + id;
      }
    }
    </script>
    <h3 style="color:#fff; font-weight:bold">Chef</h3>
    <h3 align="center" style="color:red"> </h3>
    <!--dùng để thông báo khi thêm, sửa, xóa-->
    <table width="1250" border="1" cellpadding="5" cellspacing="0">
        <tbody>
            <tr style="background-color: #007bff; color: #ffffff; text-align:center; height:30px">
                <td width="50px">ID</td>
                <td width="150px">Chef</td>
                <td>Description</td>
                <td width="150px">Image</td>
                <td width="150px">Role</td>
                <td width="50px">&nbsp;</td>
                <td width="50px">&nbsp;</td>
            </tr>
            <?php
            if (is_array($result) || is_object($result)) {
                foreach ($result as $each) {
            ?>
                    <tr>
                        <td style="background-color: #ffffff;" align="center"><?php echo $each['id'] ?></td>
                        <td style="background-color: #ffffff;" align="center"><?php echo $each['name'] ?></td>
                        <td style="background-color: #ffffff;" align="justify" style="padding:5px"><?php echo $each['description'] ?></td>
                        <td style="background-color: #ffffff;" align="justify"><img src="photos/<?php echo $each['photo'] ?>" width="100px" height="100px" style="margin-left:20px"></td>
                        <td style="background-color: #ffffff;" align="justify" style="padding:5px"><?php echo $each['role'] ?></td>
                        <td style="background-color: #ffffff;" align="center"><a href="update_chef.php?id=<?php echo $each['id'] ?>">Edit</a></td>
                        <td style="background-color: #ffffff;" align="center"><a href="javascript:void(0)" onclick="xoaloaimonan(<?php echo $each['id'] ?>)">Delete</a></td>

                        <!--khi click vào nút xóa thì sự kiện onclick sẽ chạy-->
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