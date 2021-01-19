<?php
session_start();
require_once 'Header.php';
?>

<form method="post" action="includes/Login.inc.php">
    <div id="containerRegister" class="container">

        <h1 id="h1Register">Log in</h1>
        <hr>
        <div id="errors">
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyInput") { //pozrieme sa do URL či je erorr prazdny
                    echo "<p> Fill in all fields !</p>";
                } elseif ($_GET["error"] == "wrongLogin") {
                    echo "<p>Incorrect login informations !</p>";
                }
            }
            ?>
        </div>

        <label for="username"><b>Username</b></label>
        <input class="rounded" type="text" placeholder="Enter Username/Email" name="uid" id="username">

        <label for="password"><b>Password</b></label>
        <input class="rounded" type="password" placeholder="Enter Password" name="psw" id="password">
        <hr>

        <button name="submit" type="submit" class="registerbtn button5">Log in</button>

        <div class="container signin">
            <p>Don't have an account yet? <a href="Signup.php">Sign up</a>.</p>
        </div>
    </div>

    <br>


</form>

</body>
</html>
