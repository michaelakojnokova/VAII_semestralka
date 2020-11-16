<?php
//session_start();

// initializing variables
$serverName = "localhost";
$dBUsername = "root";
$dBPassword    = "";
$dBName = "vaii_database";

// connect to the database
$conn = mysqli_connect($serverName,$dBUsername,$dBPassword ,$dBName);
//if connection fails
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
