<?php include ('dbh.inc.php') ;// include ('dbh.inc.php') ; //nefunguje include
//cize musim to spravit duplicitne bohuzial
$serverName = "localhost";
$dBUsername = "root";
$dBPassword    = "";
$dBName = "vaii_database";
$conn = mysqli_connect($serverName,$dBUsername,$dBPassword ,$dBName);

if (isset($_POST["submit1"])) {
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $password = $_POST["psw"];
    $passwordRepeat = $_POST["psw-repeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
//ak nie je prazdne
    if (emptyInputSignup( $email,$username, $password, $passwordRepeat) !== false) {
        header("location: ../Signup.php?error=emptyInput");
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


    if (uidExists($conn, $username , $email) !== false) {
        header("location: ../Signup.php?error=usernameTaken");
        exit();
    }

    createUser($conn,$email,$username,$password);


} else {
    header("location: ../Signup.php");
    exit();
}