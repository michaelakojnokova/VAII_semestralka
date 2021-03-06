<?php
ob_start();
function setComments($conn)
{


    if (isset($_POST['commentSubmit'])) {
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $query =
            "INSERT INTO comments(uid,date,message) VALUES (?,?,?)";
        $statement = $conn->prepare($query);
        $statement->bind_param('sss', $uid, $date, $message);
        $statement->execute();
    }
}

function getComments($conn)
{
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $id = $row['uid'];
        $sql2 =
            "SELECT * FROM users WHERE usersId = ?";
        $statement = $conn->prepare($sql2);
        $statement->bind_param('i', $id);
        $statement->execute();
        $result2 = $statement->get_result();

        if ($row2 = $result2->fetch_assoc()) {
            echo "<div class='comment-box' >
<div class='col-sm-' ></div> <p>";
            echo $row2['usersUid'] . "<br>"; //user table
            echo $row['date'] . "<br>";
            echo nl2br($row['message']);
            echo "</p>";
            if (isset($_SESSION['useruid'])) {
                if ($_SESSION['useruid'] == $row2['usersUid']) { //zhoduje sa vysledok z databazy s ID v session?
                    echo " <form class='delete-form' method='post' action='" . deleteComments($conn) . "'>  
             <input type='hidden' name='cid' value='" . $row['cid'] . "'> 
            <button type='submit' name='commentDelete'>Delete</button>
            </form>
            <form class='edit-form' method='post' action='CommentsEdit.php'>  
             <input type='hidden' name='cid' value='" . $row['cid'] . "'> 
              <input type='hidden' name='uid' value='" . $row['uid'] . "'>
               <input type='hidden' name='date' value='" . $row['date'] . "'>
                <input type='hidden' name='message' value='" . $row['message'] . "'>
            <button>Edit</button>
            </form>";
                }
                if ($_SESSION["useruid"] == "admin") {
                    echo " <form class='delete-form' method='post' action='" . deleteComments($conn) . "'>  
             <input type='hidden' name='cid' value='" . $row['cid'] . "'> 
            <button type='submit' name='commentDelete'>Delete</button>
            </form>
            </div>  <br>";
                }
            }

            echo "";
        }
    }
}


function editComments($conn)
{

    if (isset($_POST['commentSubmit'])) {
        $cid = $_POST['cid'];

        $message = $_POST['message'];

        $query =
            "UPDATE comments SET message=? WHERE cid = ? ";
        $statement = $conn->prepare($query);
        $statement->bind_param('si', $message, $cid);
        $statement->execute();

        header("Location: CommentPageReceipt1.php");
    }
}

function deleteComments($conn)
{

    if (isset($_POST['commentDelete'])) {
        $cid = $_POST['cid'];

        $sql = " DELETE FROM comments WHERE cid='$cid' ";


        $query =
            "DELETE FROM comments WHERE cid= ? ";
        $statement = $conn->prepare($query);
        $statement->bind_param('i', $cid);
        $statement->execute();

        header("Location: CommentPageReceipt1.php");
    }
}
