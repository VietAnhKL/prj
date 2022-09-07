<?php 
require '../check_admin_login.php';
include '../dashboard/dashboard.php';
include '../dashboard/menu.php'; 
require '../root/connect.php';

?>
<div style="border-top:#09F solid 1px; margin:15px">
		         <!--chèn ckeditor-->
<!--<script type="text/javascript" src="../public/ckeditor/ckeditor.js"></script>-->
<script type="text/javascript" src="../public/ckeditor/ckeditor.js"></script>

<!--chèn jquery ui datepicker-->
	<!--trong input ngay cap nhat cho id= ngay_cap_nhat-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  // $( function() {
  //   $( "#ngay_dang" ).datepicker({
	// 	changeMonth: true,
  //     	changeYear: true
	//   });
	// $( "#ngay_dang" ).datepicker( "option", "dateFormat", "yy-mm-dd" ); <!--format ngày tháng-->
	
	// $( "#ngay_gui" ).datepicker({
	// 	changeMonth: true,
  //     	changeYear: true
	//   });
	// $( "#ngay_gui" ).datepicker( "option", "dateFormat", "yy-mm-dd" ); <!--format ngày tháng-->
	
  // } );
  </script>
<!--/jquery ui datepicker-->

<!--viết code để kiểm tra dữ liệu dữ liệu-->
<script language="javascript">
$(document).ready(function(e) {
	$('#cap_nhat').click(function(){
		var tieude=$("#tieu_de");
		 if(tieude.val()=="")
		 {
			 alert("Bạn phải nhập tiêu đề tin tức");
			 tieude.focus();
			 return false;
		 }
		 return true;
	})
   
});
</script>
<h3 style="color: #fff">Add News</h3>
<form method="post" action="process_insert.php" name="frm" enctype="multipart/form-data">
<table width="900" border="0" cellspacing="40" cellpadding="15">
  <tbody><tr>
    <td style="color: #fff" >Title</td>
    <td><input type="text" name="title" id="tieu_de" size="30"></td>
  </tr>
  <tr>
    <td style="color: #fff">Content</td>
    <td><textarea name="content" rows="5" cols="50" style="text-align:justify"></textarea></td>
  </tr>
   <!-- <tr>
     <td>Nội Dung Chi Tiết</td>
    <td><textarea name="noi_dung_chi_tiet" rows="5" cols="50" class="ckeditor" id="noi_dung_chi_tiet"></textarea>
   <script language="javascript">ckeditor.replace("noi_dung_chi_tiet")</script>
    </td>
  </tr> -->
  <tr style="margin-bottom:20px">
    <td style="color: #fff">Image</td>
    <td style="color: #fff"><input type="file" name="photo"></td>
  </tr>
   <tr>
    <td style="color: #fff">Author</td>
    <td><input type="text" name="author" size="30" value="<?php echo $_SESSION['name']; ?>" readonly ></td>
  
  <tr align="center">
    <td colspan="2">
    <input class="btn btn-primary" type="submit" name="cap_nhat" id="cap_nhat" value="Add">&nbsp;&nbsp;&nbsp;
    <input class="btn btn-primary" type="button" name="bo_qua" value="Cancel" onclick="window.location='danh_sach_tin_tuc.php'">
    </td>    
  </tr>
</tbody></table>

</form>
        	</div>
</body>
</html>