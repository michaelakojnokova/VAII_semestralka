<?php
require_once 'Database.inc.php';
require_once 'SignupLoginFunctions.inc.php';


if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $password = $_POST["psw"];


    if (emptyInputLogin($username, $password) !== false) {
        header("location: ../Login.php?error=emptyInput");
        exit();
    }
    loginUser($conn, $username, $password);
} else {
    header("location: ../Login.php");
    exit();
}