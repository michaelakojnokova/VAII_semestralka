<?php
session_start();
require_once 'Header.php';
require_once 'includes/Profile.inc.php';
require_once 'includes/Database.inc.php';

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-sm">
                <h3 id="profiledetails"  class="panel-title">Profile Details</h3>
            </div>
            <div class="col-md-3" >
                <a href="Profile.php?action=edit" class="btn btn-success btn-xs">Edit</a>

            </div>
        </div>
    </div>
    <div class="panel=body">
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'vaii_database');
        //zobraz data na zaklade username
        echo getUserProfileDataHTML($_SESSION["useruid"], $conn);
        ?>
    </div>
</div>


<?php
//ak stlacim edit , zobrazi sa mi formular na upravu a url sa nastavi na edit

if ($_GET["action"] == 'edit') {
$result = getUserProfileData($_SESSION["useruid"], $conn);

foreach ($result

as $row) {

?>

<div  class="panel panel-default ">
    <div  class="panel-body  ">
        <form method="post" action="includes/Profile.inc.php?action=submit" enctype="multipart/form-data">
            <div class="form-group">
                <input id="submitbtn" class="btn btn-success" type="submit" submit="Submit" value="Submit" >
            </div>
            <div class="form-group">
                <div class="row">
                    <label style="padding-left:20px" class="col-md-1">First name</label>
                    <div class="col-sm-5">
                        <input type="name" name="firstName" id="firstName" class="form-control" value="<?php echo $row["firstName"]; ?>" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-1" style="padding-left:20px">Last name</label>
                    <div class="col-sm-5">
                        <input type="name" name="lastName" id="lastName" class="form-control" value="<?php echo $row["lastName"]; ?>" />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <label class="col-md-1" style="padding-left:20px">Email</label>
                    <div class="col-sm-5">
                        <input type="email" name="usersEmail" id="usersEmail" class="form-control" value="<?php echo $row["usersEmail"]; ?>" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-1" style="padding-left:20px">Age</label>
                    <div class="col-sm-5">
                        <input type="number" name="age" id="age" class="form-control" value="<?php echo $row["age"]; ?>" />
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
    <?php


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
