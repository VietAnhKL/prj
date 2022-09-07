<?php
	include 'menu-navbar.html';
  require 'admin/root/connect.php';
?>
	

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center mb-5">
        <h1 class="mb-2 bread">Blog</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
 <div class="container">
  <div class="row">
  <?php
  // Phân trang;
$trang = isset($_GET['trang']) ? $_GET['trang'] : 1;
$sql_so_tin_tuc = "select count(*) from news
 ";
$mang_so_tin_tuc = mysqli_query($conn, $sql_so_tin_tuc);
$ket_qua_so_tin_tuc = mysqli_fetch_array($mang_so_tin_tuc);
$so_tin_tuc = $ket_qua_so_tin_tuc['count(*)'];

$so_tin_tuc_tren_1_trang = 6;


$so_trang = ceil($so_tin_tuc / $so_tin_tuc_tren_1_trang);
$so_bai_bo_qua = $so_tin_tuc_tren_1_trang * ($trang - 1);




$sql = "select * from news
limit $so_tin_tuc_tren_1_trang  offset $so_bai_bo_qua";
$result = mysqli_query($conn,$sql); 

		
			foreach ($result as  $each) {
			?>
    <div class="col-md-4 ftco-animate">
      <div class="blog-entry">
        <a href="blog-single.php?id=<?php echo $each['id']; ?>" class="block-20" style="background-image: url(admin/news/photos/<?php echo $each['photo']; ?>);">
        </a>
        <div class="text px-4 pt-3 pb-4">
          <div class="meta">
            <div><a href="#"><?php echo $each['created_at']; ?></a></div>
            <div><a href="#"><?php echo $each['author']; ?></a></div>
          </div>
          <h3 class="heading"><a href="blog-single.php?id=<?php echo $each['id']; ?>"><?php echo $each['title']; ?></a></h3>
          <p class="clearfix">
            <a href="blog-single.php?id=<?php echo $each['id']; ?>" class="float-left read btn btn-primary">Read more</a>
            <a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
          </p>
        </div>
      </div>
    </div>
    <?php
					
				}
				?>
    
    
  </div>
  <div class="row no-gutters my-5">
    <div class="col text-center">
      <div class="block-27">
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
    </div>
  </div>
</div>
</section>

<?php
  include 'footer.php';
?>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>