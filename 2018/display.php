<?php
include("database.php");

$query = "SELECT * FROM userss";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
echo $total;
?>