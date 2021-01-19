<?php
require_once 'Database.inc.php';

$email = $_POST["email"];
$username = $_POST["uid"];
$password = $_POST["psw"];
$passwordRepeat = $_POST["psw-repeat"];


function emptyInputSignup($email, $username, $password, $passwordRepeat)
{
    $result = "";
    if (empty($username || $password || $email || $passwordRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username)
{
    $result = "";
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result = "";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function pwdMatch($password, $passwordRepeat)
{
    $result = "";
    if ($password !== $passwordRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Signup.php?error=stmtFailed");

        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $email, $username, $password)
{
    $sql = "INSERT INTO users (usersEmail,usersUid, usersPwd) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Signup.php?error=stmtFailed");
        exit();
    }
    $hashedPwd = password_hash($password, PASSWORD_BCRYPT);

    mysqli_stmt_bind_param($stmt, "sss", $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Signup.php?error=none");
    exit();
}

//Login
function emptyInputLogin($username, $password)
{
    $result = "";
    if (empty($username) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password)
{
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../Login.php?error=wrongLogin");
        exit();
    }
    $passwordHashed = $uidExists["usersPwd"];
    $checkPassword = password_verify($password, $passwordHashed);
    if ($checkPassword === false) { //user wrote wrong password
        header("location: ../Login.php?error=wrongLogin");
        exit();

    } elseif ($checkPassword === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];

        header("location: ../Home.php");
        exit();
    }
}