<?php
$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "vaii_database";

$conn = mysqli_connect($hostname, $username, $password,$databasename);

if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?>