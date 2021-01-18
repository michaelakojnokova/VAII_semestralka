<?php


if ($_GET["action"] == 'submit') {

    include 'includes/Database.inc.php';
    session_start();

    $data = array(
        'firstName' => $_POST["firstName"],
        'lastName' => $_POST["lastName"],
        'usersEmail' => $_POST["usersEmail"],
        'age' => $_POST["age"],
        'usersUid' => $_SESSION["useruid"]
    );

    $query = "
   UPDATE users
   SET firstName = ?, 
   lastName = ?, 
   usersEmail = ?, 
   age = ?
   WHERE usersUid = ?
   ";
    $conn = mysqli_connect('localhost', 'root', '', 'vaii_database');
    $statement = $conn->prepare($query);
    $statement->bind_param('sssis', $data['firstName'], $data['lastName'], $data['usersEmail'], $data['age'], $data['usersUid']);
    $statement->execute();
    header("location:../Profile.php?action=view&success=1");
}
//////ziskanie dat
function getUserProfileData($useruid, $connection)
{
    $query = "SELECT * FROM users WHERE usersUid = '" . $useruid . "'
";
    return $connection->query($query);
}

/////zobrazenie dat do html
function getUserProfileDataHTML($useruid, $connection)
{
    $result = getUserProfileData($useruid, $connection);

    $output = '
<div class=" table table-responsive">
    <table id="profileTable" class="center">
        ';

    foreach ($result as $row) {
        //profil detaily
        $output .= '
        <tr>
            <th>First name</th>
            <td>' . $row["firstName"] . '</td>
        </tr>
          <tr>
            <th>Last name</th>
            <td>' . $row["lastName"] . '</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>' . $row["usersEmail"] . '</td>
        </tr>
      
        <tr>
            <th>Username</th>
            <td>' . $row["usersUid"] . '</td>
        </tr>
        <tr>
            <th>Age</th>
            <td>' . $row["age"] . '</td>
        </tr>
     
        ';
    }
    $output .= '
    </table>
</div>
';

    return $output;
}
