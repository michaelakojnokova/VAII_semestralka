<?php
session_start();
require_once 'header1.php';
require_once 'function.php';
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "vaii_database";

$connection = mysqli_connect($hostname, $username, $password, $databasename);

if (!$connection) {
    die("Unable to Connect database: " . mysqli_connect_error());
}


?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-sm">
                    <h3 style="text-align:left" class="panel-title">Profile Details</h3>
                </div>
                <div class="col-md-3" align="right">
                    <a href="Profile.php?action=edit" class="btn btn-success btn-xs">Edit</a>

                </div>
            </div>
        </div>
        <div class="panel=body">
            <?php

            echo Get_user_profile_data_html($_SESSION["useruid"], $connection);

            ?>
        </div>
    </div>


    <?php


if($_GET["action"] == 'edit')
{
    $result = Get_user_profile_data($_SESSION["useruid"], $connection);

    foreach($result as $row) {


        ?>
        <script>
            $(document).ready(function(){


            }
        </script>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="panel-title">Edit Profile</h3>
                    </div>
                    <div class="col-md-3" align="right">
                        <a href="profile.php?action=view" class="btn btn-primary btn-xs">View</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4" align="right">First name</label>
                            <div class="col-md-8">
                                <input type="name" name="firstName" id="firstName" class="form-control" value="<?php echo $row["firstName"];  ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4" align="right">Last name</label>
                            <div class="col-md-8">
                                <input type="name" name="lastName" id="lastName" class="form-control" value="<?php echo $row["lastName"];  ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4" align="right">Email</label>
                            <div class="col-md-8">
                                <input type="email" name="usersEmail" id="usersEmail" class="form-control" value="<?php echo $row["usersEmail"]; ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4" align="right">Username</label>
                            <div class="col-md-8">
                                <input type="name" name="usersUid" id="usersUid" class="form-control" value="<?php echo $row["usersUid"]; ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4" align="right">Age</label>
                            <div class="col-md-8">
                                <input type="number" name="age" id="age" class="form-control" value="<?php echo $row["age"]; ?>" />
                            </div>
                        </div>
                    </div>
                </form>
        </div>
        <?php
        $message = '';
        if($message == '')
        {
            $data = array(
                ':firstName'    => $_POST["firstName"],
                ':lastName'  => $_POST["lastName"],
                ':usersEmail'   => $_POST["usersEmail"],
                ':usersUid'   => $_POST["usersUid"],
                'age'    => $_POST["age"]
            );
            $query = "
   UPDATE users
   SET firstName = :firstName, 
   lastName = :lastName, 
   usersEmail = :usersEmail, 
  usersUid = :usersUid, 
   age = :age
   WHERE usersUid = :useruid
   ";

            $statement = $connection->prepare($query);

            $statement->execute($data);

            header("location:profile.php?action=view&success=1");

        }
        }
        }

        ?>
        <?php
if (isset($_GET["action"])) {
    if ($_GET["action"] == "view") {
        if (isset($_GET["success"])) {
            echo '
    <div class="alert alert-success">Profile Edited Successfully</div>
    ';
        }
    }
}
    ?>
    </div>
    <div class="col-md-3">
    </div>
</div>