<?php
require_once 'includes/Database.inc.php';

if (isset($_GET['delete'])) {
    $usersId = $_GET['delete'];
    delete_data($conn, $usersId);
}

// fetch query
function fetch_data($connection)
{
    $query = "SELECT * from users ORDER BY usersId DESC";
    $exec = mysqli_query($connection, $query);
    if (mysqli_num_rows($exec) > 0) {
        $row = mysqli_fetch_all($exec, MYSQLI_ASSOC);
        return $row;

    } else {
        return $row = [];
    }
}


// delete data query
function delete_data($connection, $usersId)
{
    $query = 'DELETE from users WHERE usersId=?';
    $statement = $connection->prepare($query);
    $statement->bind_param('i', $usersId);
    $exec = $statement->execute();

    if ($exec) {
        header('location:Users.php');
    } else {
        $msg = "Error: " . $query . "<br>" . mysqli_error($connection);
        echo $msg;
    }
}


?>