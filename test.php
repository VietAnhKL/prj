<?php

	require 'admin/root/connect.php';
	$sql = "select 
    meal.*,
    category.name as category_name
    from meal
    join category 
    on meal.category_id=category.id
    ";
$result = mysqli_query($conn, $sql);
$each = mysqli_fetch_array($result);
print_r ($each);
echo '--------------';
print_r(array_rand($each,7));
?>