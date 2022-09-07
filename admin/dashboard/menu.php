<div class="col-md-9 content">
    <h2><span class="label label-success ">Vinegar Food Restaurant Management
        </span></h2>
    <?php
    require '../root/connect.php';
    ?>

    <div class="row" style="margin-bottom: 25px; margin-top:35px; margin-left:15px; text-align:justify ">
        <a href="../meal/"><button class="btn btn-primary" style="border: 1px solid #14cd85 !important; background-color:#14cd85 !important; width:200px; height:100px; margin-right:25px">
               <p style="font-weight:bolder; font-size:large"><?php
                        $sql = "SELECT COUNT(*)as total_meal FROM `meal`";
                        $result = mysqli_query($conn, $sql);
                        $each = mysqli_fetch_array($result);
                        echo $each['total_meal'];
                        ?></p> Total  Meal </button></a>
        <a href="../category_meal/"><button class="btn btn-primary" style="border: 1px solid #0044cc !important; background-color: #0044cc !important; width:200px; height:100px; margin-right:25px">
        <p style="font-weight:bolder; font-size:large"><?php
                        $sql = "SELECT COUNT(*)as total_cate_meal FROM `category`";
                        $result = mysqli_query($conn, $sql);
                        $each = mysqli_fetch_array($result);
                        echo $each['total_cate_meal'];
                        ?></p> Total Type of meal</button></a>
        <a href="../news/"><button class="btn btn-primary" style="border: 1px solid #4a51d5 !important; background-color: #4a51d5 !important; width:200px; height:100px; margin-right:25px">
        <p style="font-weight:bolder; font-size:large"><?php
                        $sql = "SELECT COUNT(*)as total_new FROM `news`";
                        $result = mysqli_query($conn, $sql);
                        $each = mysqli_fetch_array($result);
                        echo $each['total_new'];
                        ?></p>
        News</button></a>
        <a href="../users/"><button class="btn btn-primary" style="border: 1px solid #bd62c5 !important; background-color: #bd62c5 !important; width:200px; height:100px; margin-right:25px">
        <p style="font-weight:bolder; font-size:large"><?php
                        $sql = "SELECT COUNT(*)as total_user FROM `admin`";
                        $result = mysqli_query($conn, $sql);
                        $each = mysqli_fetch_array($result);
                        echo $each['total_user'];
                        ?></p>Total User</button></a>
        <a href="../booking/"><button class="btn btn-primary" style="border: 1px solid #ffc107 !important; background-color: #ffc107 !important; width:200px; height:100px; margin-right:25px">
        <p style="font-weight:bolder; font-size:large"><?php
                        $sql = "SELECT COUNT(*)as total_booking FROM `booking`";
                        $result = mysqli_query($conn, $sql);
                        $each = mysqli_fetch_array($result);
                        echo $each['total_booking'];
                        ?></p>Total Booking</button></a>

    </div>