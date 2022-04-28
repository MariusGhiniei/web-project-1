<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "zuzugram";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Connection died: " .mysqli_connect_error());
}