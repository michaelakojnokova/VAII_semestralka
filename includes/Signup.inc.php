<?php
require_once 'Database.inc.php';
require_once 'SignupLoginFunctions.inc.php';


if (isset($_POST["submit1"])) {
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $password = $_POST["psw"];
    $passwordRepeat = $_POST["psw-repeat"];


    if (emptyInputSignup($email, $username, $password, $passwordRepeat) !== false) {
        header("location: ../Signup.php?error=emptyInput");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../Signup.php?error=usernameTaken");
        exit();
    }

    if (invalidUid($username) !== false) {
        header("location: ../Signup.php?error=invalidUid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../Signup.php?error=invalidEmail");
        exit();
    }


    if (pwdMatch($password, $passwordRepeat) !== false) {
        header("location: ../Signup.php?error=passwordsDontMatch");
        exit();
    }




    createUser($conn, $email, $username, $password);


} else {
    header("location: ../Signup.php");
    exit();
}