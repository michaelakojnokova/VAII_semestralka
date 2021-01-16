<?php
session_start();
$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "vaii_database";

$conn = mysqli_connect($hostname, $username, $password,$databasename);

if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}

$db=$conn;

// fetch query
function fetch_data(){
    global $db;
    $query="SELECT usersEmail, usersUid,firstName,lastName,age FROM users ORDER BY usersId DESC";
    $exec=mysqli_query($db, $query);
    $row = mysqli_num_rows($exec);
    if($row> 0){
        $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
        return $row;

    }else{
        return $row=[];
    }

}
$fetchData= fetch_data();
show_data($fetchData);
?>

<?php
function show_data($fetchData){

    echo '<table border="1">
        <tr>
            <th>Email</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Delete</th>
        </tr>';

    if(count($fetchData)>0){
        $userId=1;
        foreach($fetchData as $data){

            echo "<tr>
          
          <td>".$data['usersEmail']."</td>
          <td>".$data['usersUid']."</td>
          <td>".$data['firstName']."</td>
          <td>".$data['lastName']."</td>
           <td>".$data['age']."</td>
        
   </tr>";

            $userId++;
        }
    }else{

        echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>";
    }
    echo "</table>";
}

?>
<!--<td><a href='backend-script.php?delete=".$data['usersId']."'>Delete</a></td>

// delete data query
if(isset($_GET['delete'])){
    $usersId= $_GET['delete'];
    delete_data($conn, $usersId);
}
function delete_data($connection, $usersId){

    $query="DELETE from users WHERE usersId =$usersId";
    $exec= mysqli_query($connection,$query);
    if($exec){
        header('location:userlist.php');
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
        echo $msg;
    }
}
-->
