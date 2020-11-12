<?php
//session_start();

// initializing variables
$serverName = "localhost";
$dBUsername = "root";
$dBPassword    = "";
$dBName = "vaii_database";

// connect to the database
$conn = mysqli_connect($serverName,$dBUsername,$dBPassword ,$dBName);
//if connection fails
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
} /*
//echo "Connected successfully";
// REGISTER USER
if (isset($_POST['register'])) {
    // receive all input values from the form
    $dBUsername = mysqli_real_escape_string($conn, $_POST['name']);
    $dBPassword = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['psw']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['psw-repeat']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($dBUsername)) { array_push($errors, "Username is required"); }
    if (empty($dBPassword)) { array_push($errors, "Email is required");}
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if (empty($password_2)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$dBUsername' OR email='$dBPassword' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $dBUsername) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $dBPassword) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        password_hash("", PASSWORD_DEFAULT);

        $query = "INSERT INTO registration (username, email, password) 
  			  VALUES('$dBUsername', '$dBPassword', '$password_1')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $dBUsername;
        $_SESSION['success'] = "You are now logged in";
        header('location: Home.php');
    }
     if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php  endif ;
}
// LOGIN USER
if (isset($_POST['Login'])) {
    $dBUsername = mysqli_real_escape_string($conn, $_POST['name']);
    $password = mysqli_real_escape_string($conn, $_POST['psw']);

    if (empty($dBUsername)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        password_hash("", PASSWORD_DEFAULT);
        $query = "SELECT * FROM registration WHERE username='$dBUsername' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $dBUsername;
            $_SESSION['success'] = "You are now logged in";
            header('location: Home.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
    if (count($errors) > 0) : ?>
        <div class="error">
            <?php foreach ($errors as $error) : ?>
                <p><?php echo $error ?></p>
            <?php endforeach ?>
        </div>
    <?php  endif ;
}

?>
<?php  if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php  endif ?> */
