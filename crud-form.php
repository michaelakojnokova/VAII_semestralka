<?php
require_once('crud-script.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD Operations</title>
    <!--<style>
        table, td, th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            max-width: 100%;
            width: 90%;
        }

        .table-data {

            width: 65%;

        }

        th, td {
            padding: 15px;
        }

        body {
            overflow-x: hidden;
        }

        * {
            box-sizing: border-box;
        }

        .user-detail form {
            height: 100vh;
            border: 2px solid #f1f1f1;
            padding: 16px;
            background-color: white;
        }

        .user-detail {
            width: 30%;
            float: left;
        }

        input {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        button[type=submit] {
            background-color: #434140;
            color: #ffffff;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            font-size: 20px;
        }

        label {
            font-size: 18px;;
        }

        button[type=submit]:hover {
            background-color: #3d3c3c;
        }

        .form-title a, .form-title h2 {
            display: inline-block;

        }

        .form-title a {
            text-decoration: none;
            font-size: 20px;
            background-color: green;
            color: honeydew;
            padding: 2px 10px;
        }

    </style>-->
</head>
<body>
<?php  session_start(); require_once 'header1.php';   ?>
<!--====form section start====-->
<div class="table-data">
    <div class="list-title">


    </div>

    <table border="1">
        <tr>
<br><br>
            <th>User email</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last name</th>
            <th>Age</th>
            <th>Delete</th>
        </tr>

        <?php


        $hostname     = "localhost";
        $username     = "root";
        $password     = "";
        $databasename = "vaii_database";
        $connection = mysqli_connect($hostname, $username, $password,$databasename);
        $fetchData = fetch_data($connection);;
        if (count($fetchData) > 0) {
            $usersId = 1;
            foreach ($fetchData as $data) {
                ?>
                <tr>

                    <td><?php echo $data['usersEmail']; ?></td>
                    <td><?php echo $data['usersUid']; ?></td>
                    <td><?php echo $data['firstName']; ?></td>
                    <td><?php echo $data['lastName']; ?></td>
                    <td><?php echo $data['age']; ?></td>

                    <td><a href="crud-form.php?delete=<?php echo $data['usersId']; ?>">Delete</a></td>
                </tr>
                <?php
                $usersId++;
            }
        } else {
            ?>
            <tr>
                <td colspan="7">No Data Found</td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>
</body>
</html>