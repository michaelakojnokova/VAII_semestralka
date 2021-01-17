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
} ?>
<div class="row">
    <div class="col-md-9">
        <?php
        if (isset($_GET["action"])) {

            if ($_GET["action"] == view) {
                ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-9">
                                <h3 class="panel-title">Profile Details</h3>
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
            }
        }
        ?>
    </div>
    <div class="col-md-3">
    </div>
</div>
