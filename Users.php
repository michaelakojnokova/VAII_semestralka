<?php
session_start();
require_once 'Header.php';
require_once'includes/Users.inc.php';
require_once 'includes/Database.inc.php';
?>

<?php
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

        $fetchData = fetch_data($conn);;
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
</div>
</body>
</html>