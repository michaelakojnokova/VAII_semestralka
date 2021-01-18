<?php
require_once('includes/Users.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wild & Gorgeous</title>

</head>
<body>
<?php session_start();
require_once 'Header.php';
?>

<div class="table-data">

    <table class="table table-hover">
        <thead>
        <tr>
            <br><br>
            <th scope="col">User email</th>
            <th scope="col">Username</th>
            <th scope="col">First Name</th>
            <th scope="col">Last name</th>
            <th scope="col">Age</th>
            <th scope="col"></th>
        </tr>
        </thead>

        <?php
        $connection = mysqli_connect('localhost', 'root', '', 'vaii_database');
        $fetchData = fetch_data($connection);;
        if (count($fetchData) > 0) {
            $usersId = 1;
            foreach ($fetchData as $data) {
                ?>
                <tbody>
                <tr>

                    <td><?php echo $data['usersEmail']; ?></td>
                    <td><?php echo $data['usersUid']; ?></td>
                    <td><?php echo $data['firstName']; ?></td>
                    <td><?php echo $data['lastName']; ?></td>
                    <td><?php echo $data['age']; ?></td>

                    <td><a href="Users.php?delete=<?php echo $data['usersId']; ?>">Delete</a></td>
                </tr>
                </tbody>
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
</body>
</html>