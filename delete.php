<?php
$connect = mysqli_connect("localhost", "root", "", "vaii_database");
if (isset($_POST["usersId"])) {
    $query = "DELETE FROM users WHERE usersId = '".$_POST["usersId"]."'";
    if (mysqli_query($connect, $query)) {
        echo 'Data Deleted';
    }
}
