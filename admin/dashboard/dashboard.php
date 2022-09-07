<?php
require '../root/connect.php';
$sql = "select * from admin";
$result = mysqli_query($conn, $sql);
$each = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/animate.css">

    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">

    <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../css/jquery.timepicker.css">
    <link rel="stylesheet" href="../../js/bootstrap.min.js">
    <link rel="stylesheet" href="../../js/jquery.min.js">



    <link rel="stylesheet" href="../../css/flaticon.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <div class="col-md-3 sidebar" style="line-height:0.8em">
        <ul class="list-group">
            <li class="list-group-item">
                <div class="media">
                    <a class="pull-left">
                        <img class="media-object" src="../users/photos/<?php echo $each['photo']; ?>" alt="Ảnh đại diện" width="84" height="84">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $each['name']; ?></h4>
                        <h4><span class="label label-primary"><?php
                                                                if ($each['level'] == 0) {
                                                                    echo 'Admin';
                                                                } else {
                                                                    echo 'Super Admin';
                                                                } ?></span></h4>

                    </div>
                </div>
            </li>
            <!--li.list-group-item-->

            <a class="list-group-item" href="../root/index.php" style="font-weight:bold">
            <span class="glyphicon glyphicon-dashboard"></span> Dashboard
            </a>
            <a class="list-group-item " href="../news/" style="background-color:#337ab7; font-weight:bold">
                <span class="glyphicon glyphicon-tag"></span> News
            </a>
            <ul  style="list-style:none">
                <li><a href="../news/" title="tintuc" class="list-group-item">News List</a></li>
                <li><a href="../news/add_news.php" title="tintuc" class="list-group-item">Add News</a></li>
            </ul>
            <a class="list-group-item " href="../chef/" style="background-color:#337ab7; font-weight:bold">
                <span class="glyphicon glyphicon-tag"></span> Chef
            </a>
            <ul  style="list-style:none">
                <li><a href="../chef/" title="tintuc" class="list-group-item">Chef List</a></li>
                <li><a href="../chef/add_chef.php" title="tintuc" class="list-group-item">Add Chef</a></li>
            </ul>


            <a class="list-group-item" href="../category_meal/" style="background-color:#337ab7; font-weight:bold">
                <span class="glyphicon glyphicon-edit"></span> Type of Meal
            </a>
            <ul style="list-style:none">
                <li><a href="../category_meal/" title="tintuc" class="list-group-item">Type of Meal List</a></li>
                <li><a href="../category_meal/add_cate_meal.php" title="tintuc" class="list-group-item">Add Type of Meal</a></li>
            </ul>

            <a class="list-group-item" href="../meal/" style="background-color:#337ab7; font-weight:bold">
                <span class="glyphicon glyphicon-edit"></span> Meal
            </a>
            <ul style="list-style:none">
                <li><a href="../meal/" title="tintuc" class="list-group-item">Meal List</a></li>
                <li><a href="../meal/add_meal.php" title="tintuc" class="list-group-item">Add Meal</a></li>
            </ul>

            <a class="list-group-item" href="../users/" style="background-color:#337ab7; font-weight:bold">
                <span class="glyphicon glyphicon-user"></span> User
            </a>
            <ul style="list-style:none">
                <li><a href="../users/" title="tintuc" class="list-group-item">User List</a></li>
                <li><a href="../users/add_users.php" title="tintuc" class="list-group-item">Add User</a></li>
            </ul>
            <a class="list-group-item" href="../booking/" style="background-color:#337ab7; font-weight:bold">
                <span class="glyphicon glyphicon-edit"></span> Booking
            </a>
            <a class="list-group-item" href="../log_out.php" style="background-color:#337ab7; font-weight:bold">
                <span class="glyphicon glyphicon-off"></span> Log out
            </a>

            <!--
<?php
// Phân quyền sidebar
// Nếu tài khoản là admin
if ($data_user['position'] == '1') {
    echo
    '
                <a class="list-group-item" href="' . $_DOMAIN . 'categories">
                    <span class="glyphicon glyphicon-tag"></span> Chuyên mục
                </a>
                <a class="list-group-item" href="' . $_DOMAIN . 'setting">
                    <span class="glyphicon glyphicon-cog"></span> Cài đặt chung
                </a>  
            ';
}

?>-->
<!-- <script>
function myFunction(e) {
  if (document.querySelector('#navList a.active') !== null) {
    document.querySelector('#navList a.active').classList.remove('active');
  }
  e.target.className = "active";
} -->
</script>

        </ul>
        <!--ul.list-group-->
    </div>