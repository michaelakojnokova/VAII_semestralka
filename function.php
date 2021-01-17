<?php

function Get_user_profile_data($useruid, $connection)
{
$query = "
SELECT * FROM users
WHERE usersUid = '".$useruid."'
";
return $connection->query($query);
}

function Get_user_profile_data_html($useruid, $connection)
{
$result = Get_user_profile_data($useruid, $connection);

$output = '
<div class="table-responsive">
    <table class="table">
        ';

        foreach($result as $row)
        {

        $output .= '
        <tr>
            <th>First name</th>
            <td>'.$row["firstName"].'</td>
        </tr>
          <tr>
            <th>Last name</th>
            <td>'.$row["lastName"].'</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>'.$row["usersEmail"].'</td>
        </tr>
      
        <tr>
            <th>Username</th>
            <td>'.$row["usersUid"].'</td>
        </tr>
        <tr>
            <th>Age</th>
            <td>'.$row["age"].'</td>
        </tr>
     
        ';
        }
        $output .= '
    </table>
</div>
';

return $output;
}
?>
