<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wild & Gorgeous - Dinners</title>
    <meta charset="UTF-8">
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
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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
            <a class="nav-link" href="Logout.php">Log out</a>
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

--> <!--MENUUUUUUUUUUUUUUUUUUUUU-->


<h2 id="EWDh2Dinners">Delicious Dinners</h2>

<div id="EWDcol-sm-6" class="col-sm-6" style="float: none">

    <div id="container7">
        <img id="lemonpepperchicken" src="images/EWDlemonpepperchicken.jpg" height="370" width="370" style="float: left"
             class="img-fluid" alt="16"/>
        <h5 id="h5lemonpepperchicken"><a class="link-my-color" href="EWDlemonpepperchicken.php">LEMON PEPPER
            CHICKEN</a></h5>
        <p id="pLemonpepperchicken">There’s something divine about lemon and pepper together. The zesty flavours are
            awesome
            on both seafood and chicken. Here I’ve added a bit of extra spice and paired it with a low-carb rice option
            for
            a lean and green dinner. </p>
    </div>
    <br><br>


    <div id="container8">
        <img id="spicymexican" src="images/EWDspicymexican.jpg" height="370" width="370" style="float: left"
             class="img-fluid" alt="17"/>
        <h5 id="h5spicymexican">SPICY MEXICAN BOWL</h5>
        <p id="pspicymexican">This delicious and simple bowl can be whipped up in 10 minutes or less. Such a simple,
            nourishing dish, with all the robust flavours of Mexicana. Save yourself a heap of time an effort by using
            up
            that tin of beans in the cupboard too. Double win! </p>
    </div>

    <br><br>


    <div id="container9">
        <img id="pumpkinsoup" src="images/EWDpumpkinsoup.jpg" height="370" width="370" style="float: left"
             class="img-fluid" alt="18"/>
        <h5 id="h5pumpkinsoup">PUMPKIN SOUP</h5>
        <p id="ppumpkinsoup">This creamy pumpkin soup recipe is the perfect dish for a cool fall night. Packed with warm
            curry flavor, it's comforting, nourishing, and delicious. </p>
    </div>

    <br><br>


    <div id="container10">
        <img id="leftoverturkey" src="images/EWDleftoverturkey.jpg" height="370" width="370" style="float: left"
             class="img-fluid" alt="19"/>
        <h5 id="h5leftoverturkey">LEFTOVER TURKEY + STUFFING SALAD</h5>
        <p id="pleftoverturkey">Unless you are feeding a host of people, a whole roast turkey can be pretty difficult to
            eat
            in one sitting. Enter this salad which is perfect for using up the leftovers and is super healthy too. </p>
    </div>

    <br><br>

    <div id="container11">
        <img id="basacashew" src="images/EWDbasacashew.jpg" height="370" width="370" style="float: left"
             class="img-fluid" alt="20"/>
        <h5 id="h5basacashew">BASA + CASHEW STIR FRY</h5>
        <p id="pbasacashew">A classic stir fry is a super simple, 1-pan situation that is convenient after a long day or
            week – no chef skills required. Minimal prep and cooking time, throw this together when you need something
            tasty
            in a flash! </p>
    </div>


    <br><br>
    <nav>
        <ul class="pagination d-flex justify-content-center flex-wrap pagination-rounded-flat pagination-success">
            <li class="page-item"><a class="page-link" href="#" data-abc="true"> &#8678;</a></li>
            <li class="page-item "><a class="page-link" href="#" data-abc="true">1</a></li>
            <li class="page-item"><a class="page-link" href="#" data-abc="true">2</a></li>
            <li class="page-item"><a class="page-link" href="#" data-abc="true">3</a></li>
            <li class="page-item"><a class="page-link" href="#" data-abc="true">4</a></li>
            <li class="page-item"><a class="page-link" href="#" data-abc="true"> &#8680;</a></li>
        </ul>
    </nav>
</div>
<br><br>


</body>
</html>