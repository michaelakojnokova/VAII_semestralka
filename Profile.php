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

    <div class="container" style="max-width: 800px;">
        <form method="post" action="includes/Profile.inc.php?action=submit" enctype="multipart/form-data">
            <div class="form-group">
                <label for="firstName">First name</label>
                <input type="name" class="form-control" name="firstName" id="firstName" value="<?php echo $row["firstName"]; ?>">
            </div>
            <div class=" form-group">
                <label for="lastName">Last name</label>
                <input type="name" class="form-control" name="lastName" id="lastName" value="<?php echo $row["lastName"]; ?>">
            </div>
            <div class="form-group">
                <label for="usersEmail">Email address</label>
                <input type="email" class="form-control" name="usersEmail" id="usersEmail" value="<?php echo $row["usersEmail"]; ?>">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" name="age" id="age" value=" <?php echo $row["age"]; ?>">
            </div>
            <input id="submitbtn" class="btn btn-success mx-auto" type="submit" submit="Submit" value="Submit">
        </form>
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

    if (isset($_GET["action"])) {
        if ($_GET["action"] == "error") {
            if ($_GET["error"] == 'emptyName') {
                echo "
    <div class='alert alert-danger'>Name shouldn't be empty</div>
    ";
            } else if ($_GET["error"] == 'email') {
                echo "
    <div class='alert alert-danger'>Email format is invalid</div>
    ";
            } else if ($_GET["error"] == 'age') {
                echo "
    <div class='alert alert-danger'>Invalid age</div>
    ";
            }
        }
    }
    ?>
