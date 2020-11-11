<?php include ('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wild & Gorgeous - Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="//db.onlinewebfonts.com/c/ed7de7f8213e4a5e40e57f9bbbbd8929?family=Neutraface+2+Display+Medium"
          rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/5c803199923a6ed48112bebbb486b3e0?family=Lora" rel="stylesheet"
          type="text/css"/>
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />


</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
    <img src="images/logo.png" height="205" width="490" alt="logo"/>

</div>


<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="Home.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    EAT WELL
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="#">Eat well</a>
                    <a class="dropdown-item" href="EatWellRecipes.php">Recipes</a>
                    <a class="dropdown-item" href="#">Breakfast</a>
                    <a class="dropdown-item" href="#">Lunch</a>
                    <a class="dropdown-item" href="EatWellDinners.php">Dinner</a>
                    <a class="dropdown-item" href="#">Appetizers</a>
                    <a class="dropdown-item" href="#">Meat</a>
                    <a class="dropdown-item" href="#">Vegan</a>
                    <a class="dropdown-item" href="#">Vegetarian</a>
                    <a class="dropdown-item" href="#">Baking</a>
                    <a class="dropdown-item" href="#">Soups</a>
                    <a class="dropdown-item" href="#">Salads</a>
                    <a class="dropdown-item" href="#">Dressing&Sauce</a>
                    <a class="dropdown-item" href="#">Drinks</a>
                    <a class="dropdown-item" href="#">Asian</a>
                    <a class="dropdown-item" href="#">Fish</a>
                    <a class="dropdown-item" href="#">Pizza</a>
                    <a class="dropdown-item" href="#">BBQ</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    LIFESTYLE
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Fashion</a>
                    <a class="dropdown-item" href="#">Travel destinations</a>
                    <a class="dropdown-item" href="#">Tips</a>
                    <a class="dropdown-item" href="#">DIY</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    WORK WELL
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Mind</a>
                    <a class="dropdown-item" href="#">Productivity</a>
                    <a class="dropdown-item" href="#">Organizing ideas</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink4" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    LIVE WELL
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Movement</a>
                    <a class="dropdown-item" href="#">Beauty&Skincare</a>
                    <a class="dropdown-item" href="#">Green living</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="AboutMe.php">About me</a>
            </li>
        </ul>

        <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
        </svg>
    </div>



</nav>

<?php
$nameErr = $emailErr  = $passwordErr = $repeatPasswordErr = "";
$name = $email  = $password = $repeatPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password= test_input($_POST["password"]);
        if( !preg_match( '/[^A-Za-z0-9]+/', $password) || strlen( $password) < 8)
        {
            echo "Invalid password!";
        }
    }
    if (empty($_POST["repeatPassword"])) {
        $repeatPasswordErr= "Password is required";
    } else {
        $repeatPassword= test_input($_POST["repeatPassword"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}
?>



    <div id="containerRegister" class="container">

        <h1 id="h1Register">Register</h1>
        <p id="pRegister">Please fill in this form to create an account.</p>
        <hr>
        <p><span class="error">* required field</span></p>

        <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


        <label for="name"><b>Name</b></label>
        <input class="rounded " type="text" placeholder="Enter Name" name="name" id="name" required>
        <span class="error">* <?php echo $nameErr;?></span>

        <label for="email"><b>Email</b></label>
        <input class="rounded " type="text" placeholder="Enter Email" name="email" id="email" required>
        <span class="error">* <?php echo $emailErr;?></span>

        <label for="password"><b>Password</b></label>
        <input class="rounded" type="password" placeholder="Enter Password" name="password" id="password" required>
        <span class="error">*<?php echo $passwordErr;?></span>

        <label for="repeatPassword"><b>Repeat Password</b></label>
        <input class="rounded" type="password" placeholder="Repeat Password" name="repeatPassword" id="repeatPassword" required>
        <span class="error"><?php echo $repeatPasswordErr;?></span>
        <hr>

        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button  type="submit" class="registerbtn button5">Register</button>

        <div class="container signin">
            <p>Already have an account? <a href="Home.php#"> Sign in</a>.</p>
        </div>
        </form>


    </div>

    <br>

</body>
</html>



