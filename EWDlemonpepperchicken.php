<?php
session_start();
date_default_timezone_set('Europe/Bratislava');
require_once 'includes/dbh.inc.comments.php';
require_once 'includes/comments.inc.php';
$conn = mysqli_connect('localhost','root','','vaii_database');

?>

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

<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="Home.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
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

</nav>
<!--

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="Signup.php">Sign up</a>
        </li>
    </ul>

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="Login.php">Log in</a>
        </li>
    </ul>

-->

<!-- Post -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                <h2 id="h2EWDlemonpepperchickenR"> LEMON PEPPER CHICKEN</h2>
                <br><br>

                <img id="EWDlemonpepperchickenR" src="images/EWDlemonpepperchickenrecipe.jpg" class="img-fluid"
                     height="667" width="1000" alt="15"/>
                <br><br>
                <p id="pEWDlemonpepperchickenR">There’s something divine about lemon and pepper together. The zesty
                    flavours are awesome on both seafood and chicken. Here I’ve added a bit of extra spice and paired it
                    with a low-carb rice option for a lean and green dinner.</p>

                <div>
                    <p id="p2EWDlemonpepperchickenR">R E C I P E</p>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div id="centered" class="row">
            <div class="col-md-4">
                <h5 style="text-align: center">INGREDIENTS (1 SERVE)</h5>
                <br>
                <ul>
                    <li>1 organic chicken breast (skin off)</li>
                    <li>1 tsp virgin olive oil</li>
                    <li>1 lemon</li>
                    <li>1 tsp cracked black pepper</li>
                    <li>1 tsp lemon thyme</li>
                    <li>¼ tsp smokey paprika</li>
                    <li>¼ tsp dried oregano</li>
                    <li>¼ tsp dried thyme</li>
                    <li>pinch sea salt</li>
                    <li>¾ cup cauliflower</li>
                    <li>½ cup spinach</li>
                </ul>
            </div>

            <div class="col-md-4">
                <h5 style="text-align: center">METHOD</h5>
                <br>
                <ol>
                    <li>Preheat a frying pan with 1 teaspoon olive oil on medium.</li>
                    <li>Roll the chicken breast in the herbs and spices, and squeeze over half the lemon juice.</li>
                    <li>Cook the breast for 10 minutes, before flipping and cooking for an additional 5 minutes or until
                        cooked through. Add the other half of the lemon to the pan, cut side down.
                    </li>
                    <li>Meanwhile, prep the rice by finely shopping or blending the cauliflower to a rice-like texture.
                        Mix through the spinach and dress with additional lemon juice and a splash of olive oil. Season
                        with salt and pepper.
                    </li>
                    <li>Remove the chicken and lemon from the pan. Slice the breast on an angle.</li>
                    <li>Place the rice mix in a bowl and top with the chicken.</li>
                    <li>Serve with charred lemon.</li>
                </ol>
                <br><br>
            </div>




</article>



<hr>
<?php
    if(isset($_SESSION['useruid'])) { //musim bzt prihlasena ak chcem komentovat, inak vypise hlasku
        echo "<div class='comment col-lg-8 col-md-10 mx-auto'>
<form method='post' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea style='resize: none' name='message' placeholder='Write your comment here...'> </textarea><br>
    <button id='submitBtn1' name='commentSubmit' type='submit'>Submit comment</button>
    <br><br>

</form>
</div>";
    }
    else{
        echo "<div id = information  > You need to be logged in to comment !  </div> <br><br>";
    }

getComments($conn);
?>


</body>
</html>