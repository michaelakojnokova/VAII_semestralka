<?php
include_once('crud-form.php');
$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "vaii_database";

$connection = mysqli_connect($hostname, $username, $password,$databasename);

if (!$connection) {
    die("Unable to Connect database: " . mysqli_connect_error());
}

//$fetchData= fetch_data($connection);

if(isset($_GET['delete'])){
    $usersId= $_GET['delete'];
    delete_data($connection, $usersId);
}

// fetch query
function fetch_data($connection){
    $query="SELECT * from users ORDER BY usersId DESC";
    $exec=mysqli_query($connection, $query);
    if(mysqli_num_rows($exec)>0){
        $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
        return $row;

    }else{
        return $row=[];
    }
}


// delete data query
function delete_data($connection, $usersId){

    $query="DELETE from users WHERE usersId=$usersId";
    $exec= mysqli_query($connection,$query);
    if($exec){
        header('location:crud-form.php');
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
        echo $msg;
    }
}
// alert message



?>