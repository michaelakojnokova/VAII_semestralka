<?php
session_start();
require_once 'Header.php';
?>


<form method="post" action="includes/Signup.inc.php">
    <div id="containerRegister" class="container">

        <h1 id="h1Register">Register</h1>
        <p id="pRegister">Please fill in this form to create an account.</p>
        <hr>
        <div id="errors">
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyInput") { //pozrieme sa do URL či je erorr prazdny
                    echo "<p> Fill in all fields !</p>";
                } elseif ($_GET["error"] == "usernameTaken") {
                    echo "<p>Username is already taken!</p>";
                } elseif ($_GET["error"] == "invalidUid") {
                    echo "<p>Choose a proper username !</p>";
                } elseif ($_GET["error"] == "invalidEmail") {
                    echo "<p>Choose a proper email !</p>";
                } elseif ($_GET["error"] == "passwordsDontMatch") {
                    echo "<p>Passwords don't match !</p>";
                } elseif ($_GET["error"] == "none") {
                    echo "<p>You have signed up !</p>";
                }
            }


            ?>
        </div>
        <label for="username"><b>Username</b></label>
        <input class="rounded" type="text" placeholder="Enter Username" name="uid" id="username">

        <label for="email"><b>Email</b></label>
        <input class="rounded" type="text" placeholder="Enter Email" name="email" id="email">

        <label for="psw"><b>Password</b></label>
        <input class="rounded" type="password" placeholder="Enter Password" name="psw" id="psw">

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input class="rounded" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat">
        <hr>

        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button name="submit1" type="submit" class="registerbtn button5">Register</button>

        <div class="container signin">
            <p>Already have an account? <a href="Login.php">Log in</a>.</p>
        </div>

    </div>

    <br>


</form>


</body>
</html>


