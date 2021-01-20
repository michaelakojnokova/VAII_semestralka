<?php
require_once 'Database.inc.php';
if (isset($_POST["action"])) {

    if ($_POST["action"] == "fetch") {
        $query = "SELECT * FROM tbl_images ORDER BY id DESC";
        $result = mysqli_query($conn, $query);
        $output = '

   <table class="table table-bordered">  
    <tr>
     <th width="10%">ID</th>
     <th width="70%">Image</th>
     <th width="10%">Edit</th>
     <th width="10%">Remove</th>
    </tr>
    
  ';
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
    <tr>
     <td>' . $row["id"] . '</td>
     <td>
      <img src="data:image/jpeg;base64,' . base64_encode($row['name']) . '" height="200" width="200" class="img-thumbnail" />
     </td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="' . $row["id"] . '">Edit</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="' . $row["id"] . '">Remove</button></td>
    </tr>
   ';
        }
        $output .= '</table>';
        echo $output;
    }



    if ($_POST["action"] == "insert") //ked stlacim tlacidlo insert
    {
        $file = file_get_contents($_FILES["image"]["tmp_name"]);

        $query = 'INSERT INTO tbl_images(name) VALUES (?)';
        $statement = $conn->prepare($query);
        $statement->bind_param('s', $file);
        $exec = $statement->execute();

        if ($exec) {
            echo 'Image Inserted into Database';
        }
    }
    if ($_POST["action"] == "update") {
        $file = file_get_contents($_FILES["image"]["tmp_name"]);

        $query = "UPDATE tbl_images SET name = ? WHERE id = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param('si', $file, $_POST["image_id"] );
        $exec = $statement->execute();

        if ($exec) {
            echo 'Image Updated into Database';
        }
    }
    if ($_POST["action"] == "delete") {

        $query = 'DELETE FROM tbl_images WHERE id=?';
        $statement = $conn->prepare($query);
        $statement->bind_param('i', $_POST["image_id"]);
        $exec = $statement->execute();
        if ($exec) {
            echo 'Image Deleted from Database';
        }
    }
}
?>

