<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register7";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>