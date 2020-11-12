<?php include ('dbh.inc.php') ;// include ('dbh.inc.php') ; //nefunguje include
//cize musim to spravit duplicitne bohuzial
$serverName = "localhost";
$dBUsername = "root";
$dBPassword    = "";
$dBName = "vaii_database";
$conn = mysqli_connect($serverName,$dBUsername,$dBPassword ,$dBName);
//nechceme aby sa pouzivatel vedel dostat cez url do includes
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $password = $_POST["psw"];
    $passwordRepeat = $_POST["psw-repeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup( $email,$username, $password, $passwordRepeat) !== false) { //ak je prazdny , tak error
        header("location: ../Signup.php?error=emptyInput"); //toto sa ukaze v url ak niekto zabudol dat nieco do form
        exit();
    }

    if (invalidUid($username) !== false) { //ak nie je validne username, tak error
        header("location: ../Signup.php?error=invalidUid"); //toto sa ukaze v url
        exit();
    }

    if (invalidEmail($email) !== false) { //ak nie je validny mail , tak error
        header("location: ../Signup.php?error=invalidEmail"); //toto sa ukaze v url
        exit();
    }

    if (pwdMatch($password, $passwordRepeat) !== false) { //ak nie su hesla match , tak error
        header("location: ../Signup.php?error=passwordsDontMatch"); //toto sa ukaze v url
        exit();
    }


    if (uidExists($conn, $username , $email) !== false) { //ak username is taken , tak error
        header("location: ../Signup.php?error=usernameTaken"); //toto sa ukaze v url
        exit();
    }

    createUser($conn,$email,$username,$password);


} else {
    header("location: ../Signup.php");
    exit();
}
