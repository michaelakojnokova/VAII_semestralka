
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wild & Gorgeous - Home</title>
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
    <!--   <h1>Wild & Gorgeous</h1>
       <p>Your daily dose of lifestyle!</p> -->
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="Home.php">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
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

        <?php //toto dám do každého menu ktoré mám
        if (isset($_SESSION["useruid"])){ //existuje to ? ak ano,user je logged in
            echo '<ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="Profile.php">Profile</a>
        </li>
    </ul> ';
            if($_SESSION["useruid"] == "admin"){
                echo '    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
    </ul>';
                echo '    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="crud-form.php">Users</a>
        </li>
    </ul>';
            }
            echo '    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="includes/Logout.inc.php">Log out</a>
        </li>
    </ul>';


        }


        else{
            echo '<ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="Signup.php">Sign up</a>
        </li>
    </ul> ';

            echo '    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="Login.php">Log in</a>
        </li>
    </ul>';
        }
        ?>
    </div>
</nav>