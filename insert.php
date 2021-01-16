<?php
$connect = mysqli_connect("localhost", "root", "", "vaii_database");
if(isset( $_POST["usersEmail"], $_POST["usersUid"]))
{
    $usersEmail = mysqli_real_escape_string($connect, $_POST["usersEmail"]);
    $usersUid = mysqli_real_escape_string($connect, $_POST["usersUid"]);
    $query = "INSERT INTO users(usersEmail, usersUid) VALUES('$usersEmail', '$usersUid')";
    if(mysqli_query($connect, $query))
    {
        echo 'Data Inserted';
    }
}
?>