
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Wild & Gorgeous - Lemon Pepper Chicken</title>
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
          rel="stylesheet" type="text/css">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="//db.onlinewebfonts.com/c/ed7de7f8213e4a5e40e57f9bbbbd8929?family=Neutraface+2+Display+Medium"
          rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/5c803199923a6ed48112bebbb486b3e0?family=Lora" rel="stylesheet"
          type="text/css"/>

</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
    <img src="images/logo.png" height="205" width="490" alt="logo"/>
    <!--   <h1>Wild & Gorgeous</h1>
       <p>Your daily dose of lifestyle!</p> -->
</div>
<hr>
<?php
require_once 'includes/comments.inc.php';
$conn = mysqli_connect('localhost','root','','vaii_database');
$cid = $_POST['cid'];
$uid = $_POST['uid'];
$date = $_POST['date'];
$message = $_POST['message'];

echo "<div class='comment col-lg-8 col-md-10 mx-auto d-flex justify-content-center'>
<form method='post' action='".editComments($conn)."'>
 <input type='hidden' name='cid' value='".$cid."'>
    <input type='hidden' name='uid' value='".$uid."'>
    <input type='hidden' name='date' value='".$date."'>
    <textarea style='resize: none' name='message' >".$message."</textarea><br>
    <button id='submitBtn1' name='commentSubmit' type='submit'>Edit comment</button>
    <br><br>

</form>
</div>";

?>



</body>
</html>