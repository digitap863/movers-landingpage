<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "movers_landing_page";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
