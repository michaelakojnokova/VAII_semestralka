<?php
session_start();
require_once('includes/Users.inc.php');
require_once 'Header.php';
?>


<div class="table-data">

    <table class="table table-hover">
        <thead>
        <tr>
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