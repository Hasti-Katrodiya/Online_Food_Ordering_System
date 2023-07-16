<?php

$host = "localhost";
$dbname = "fast_food";
$usename = "root";
$password = "";

$con = mysqli_connect($host, $usename, $password, $dbname);

if (!$con) {
    echo "Error";
}
