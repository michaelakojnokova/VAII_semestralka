
<?php
session_start();
require_once 'includes/Comments.inc.php';
require_once 'Header.php';
$conn = mysqli_connect('localhost', 'root', '', 'vaii_database');
$cid = $_POST['cid'];
$uid = $_POST['uid'];
$date = $_POST['date'];
$message = $_POST['message'];

echo "<div class='comment mx-auto container form-group' style='max-width:600px'>
<form method='post' action='" . editComments($conn) . "'>
 <input type='hidden' name='cid' value='" . $cid . "'>
    <input type='hidden' name='uid' value='" . $uid . "'>
    <input type='hidden' name='date' value='" . $date . "'>
    <textarea class='form-control' name='message' rows='5' >" . $message . "</textarea><br>
    <button id='submitBtn1' name='commentSubmit' type='submit'>Edit comment</button>
    <br><br>

</form>
</div>";

?>



</body>

</html>