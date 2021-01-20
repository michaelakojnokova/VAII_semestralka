<?php


if ($_GET["action"] == 'submit') {

    require_once 'Database.inc.php';
    require_once 'SignupLoginFunctions.inc.php';
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

    $statement = $conn->prepare($query);
    $statement->bind_param('sssis', $data['firstName'], $data['lastName'], $data['usersEmail'], $data['age'], $data['usersUid']);
    $statement->execute();
    header("location:../Profile.php?action=view&success=1");


    if (invalidEmail($data['usersEmail']) !== false) {
        header("location:../Profile.php?action=error&error=email");
        exit();
    }

    if ($data['firstName'] == '' || $data['lastName'] == '') {
        header("location:../Profile.php?action=error&error=emptyName");
        exit();
    }

    if (!is_numeric($data['age'])) {
        header("location:../Profile.php?action=error&error=age");
        exit();
    }


}
//////ziskanie dat
function getUserProfileData($useruid, $conn)
{
    $query = "SELECT * FROM users WHERE usersUid = '" . $useruid . "'
";
    return $conn->query($query);
}

/////zobrazenie dat do html
function getUserProfileDataHTML($useruid, $conn)
{
    $result = getUserProfileData($useruid, $conn);

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
