<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword    = "";
$dBName = "vaii_database";
$conn = mysqli_connect($serverName,$dBUsername,$dBPassword ,$dBName);

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $password = $_POST["psw"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin( $username, $password) !== false) { //ak je prazdny , tak error
        header("location: ../Login.php?error=emptyInput"); //toto sa ukaze v url ak niekto zabudol dat nieco do form
        exit();
    }
    loginUser($conn, $username,$password);
}
else {
    header("location: ../Login.php");
    exit();
}