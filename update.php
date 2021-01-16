<?php
$connect = mysqli_connect("localhost", "root", "", "vaii_database");
if(isset($_POST["usersId"]))
{
    $value = mysqli_real_escape_string($connect, $_POST["value"]);
    $query = "UPDATE users SET ".$_POST["column_name"]."='".$value."' WHERE usersId = '".$_POST["usersId"]."'";
    if(mysqli_query($connect, $query))
    {
        echo 'Data Updated';
    }
}
?>