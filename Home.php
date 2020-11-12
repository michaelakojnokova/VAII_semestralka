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



<!-- SRDIECKOOO
    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
    </svg>
-->
<!-- LOGIN DIZAJN A MODAL OKNO
    <div id="containerLogin1" class="container">
        <button type="button" class="btn btn-info btn-round " data-toggle="modal" data-target="#loginModal">
            Login
        </button>
    </div>
-->
  <!--  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-title text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="d-flex flex-column text-center">
                        <form method="post">
                            <div class="form-group">
                                <input type="text" name="meno" class="form-control" placeholder="Your email address...">
                            </div>
                            <div class="form-group">
                                <input type="password" name="psw" class="form-control" id="password1" placeholder="Your password...">
                            </div>
                            <button type="submit" name="Login" class="btn btn-info btn-block btn-round">Login</button>
                        </form>


                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <div class="signup-section">Not a member yet? <a href="Registration.php" class="text-info"> Sign Up</a>.</div>
                </div>
            </div>
        </div>
    </div>

-->


</nav>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="4000"> <!--slider fotky-->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" id="foodTravelMovement" src="images/foodTravelMovement.jpg" height=350
                 width="1900" alt="1">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" id="fashionSkincareDiy" src="images/fashionSkincareDiy.jpg" height="350"
                 width="1900" alt="2">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" id="productivityOrganizingMind" src="images/productivityOrganizingMind.jpg"
                 height="350" width="1900" alt="3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="container" style="margin-top:30px">
    <div id="centered2" class="row">

        <div class="col-sm-4">
            <h2 id="mostPopular">Most popular</h2> <br>
            <h6 id="h6productivity1">PRODUCTIVITY</h6>
            <div id="container1">
                <img id="pr1" src="images/productivity1.jpg" height="80" width="100" style="float: left" alt="4"/>
                <p id="productivity1">5 ways to be more productive</p> <br>
            </div>
            <h6 id="h6morningWorkout">EAT WELL</h6>
            <div id="container2">
                <img id="morW" src="images/morningWorkout.jpg" height="80" width="100" style="float: left" alt="5"/>
                <p id="morningWorkout">what to eat before morning workout</p> <br>
            </div>
            <h6 id="h6chickenchickpeasalad">RECIPES</h6>
            <div id="container3">
                <img id="chickSal" src="images/chickenchickpeasalad.jpg" height="80" width="100" style="float: left"
                     alt="6"/>
                <p id="chickenchickpeasalad">chicken + chickpea salad </p> <br>
            </div>
            <h6 id="h6facemasks">BEAUTY&SKINCARE</h6>
            <div id="container4">
                <img id="faceM" src="images/facemasks.jpg" height="80" width="100" style="float: left" alt="7"/>
                <p id="facemasks">3 natural face masks to make at home</p> <br>
            </div>
            <h6 id="h6plasticChallenge">GREEN LIVING</h6>
            <div id="container5">
                <img id="plastCh" src="images/plasticChallenge.jpg" height="80" width="100" style="float: left"
                     alt="8"/>
                <p id="plasticChallenge">plastic detox challenge</p> <br>
            </div>
            <h6 id="h6exercise">MOVEMENT</h6>
            <div id="container6">
                <img id="exerc" src="images/exercise.jpeg" height="80" width="100" style="float: left" alt="9"/>
                <p id="exercise">how much exercise is enough? </p> <br>
            </div>
 <hr>





    <h6 id="form1">Hey ! Enter your details below to receive blog posts and recipes direct to your inbox. </h6>
            <br>
            <div id="container12">
            <form action="/Home.php">
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <button id="submit" type="submit" class="btn btn-default">Submit</button>
            </form>
            </div>
<hr>
        </div>
<br><br>



        <div class="col-sm-8">
            <h2 id="h2WhatsNew">WHAT'S NEW</h2> <br>

            <div id="container7">
                <img id="protein_uvod" src="images/protein_uvod.jpg" height="280" width="370" style="float: right"
                     class="img-fluid" alt="10"/>
            </div>
            <h6 id="h6eatwell"> EAT WELL</h6>
            <h5 id="h5vegan">WHAT TO LOOK FOR IN A VEGAN / PLANT BASED PROTEIN</h5>
            <p id="pProtein">Protein is a vital part of any healthy, balanced diet. It holds particular value if
                you’re trying to
                build muscle or get lean because protein takes more energy (aka calories) to break down, comparative to
                fats and carbs... </p>
            <br><br>
            <div id="container8">
                <img id="posture" src="images/posture.jpg" height="280" width="370" style="float: right"
                     class="img-fluid" alt="12"/>
                <h6 id="h6tips"> TIPS</h6>
                <h5 id="h5posture">6SIMPLE WAYS TO HAVE BETTER POSTURE AT YOUR DESK</h5>
                <p id="pPosture"> You’re probably currently sitting at your desk reading this, blissfully unaware of
                    your posture
                    right now—and that’s perfectly normal. It can be difficult to always be mindful of your posture,
                    especially
                    during a hectic workday through hours of Zoom meetings and conference calls...</p>
            </div>
            <br><br>
            <div id="container9">
                <img id="unproductive.png" src="images/unproductive.png" height="280" width="370" style="float: right"
                     class="img-fluid" alt="13"/>
                <h6 id="h6tips1"> TIPS</h6>
                <h5 id="h5unproductive">10THINGS TO DO WHEN YOU'RE FEELING UNPRODUCTIVE</h5>
                <p id="pUnproductive"> If you’re lacking motivation or energy these days, it’s not just you.
                    Unfortunately, we don’t have an “on” button, and we can’t be plugged into an outlet. That means that
                    no matter how much our employers expect us to be productive from 9-5, our energy levels and
                    motivation don’t always fall in line with our work calendars...</p>
            </div>
            <br><br>
            <div id="container10">
                <img id="payRise" src="images/payRise.jpg" height="280" width="370" style="float: right"
                     class="img-fluid" alt="14"/>
                <h6 id="h6finance"> FINANCE</h6>
                <h5 id="h5payRise">WHAT TO DO IF YOUR REQUEST FOR A PAY RISE GETS TURNED DOWN</h5>
                <p id="pPayRise"> Having the confidence to ask for a pay rise is no easy feat. There’s the daunting task
                    of having to sell yourself to your seniors, the tricky dynamics of knowing your worth, and the
                    unfortunate truth that women are much more likely than their male counterparts to have a raise
                    request refused...</p>
            </div>
            <br><br>
            <div id="container11">
                <img id="toxins" src="images/toxins.jpeg" height="280" width="370" style="float: right"
                     class="img-fluid" alt="15"/>
                <h6 id="h6greenLiving"> GREEN LIVING</h6>
                <h5 id="h5toxins">HOMEMADE CLEANING PRODUCTS THAT WILL SAVE YOU MONEY AND TOXINS</h5>
                <p id="pToxins"> 2-Butoxyethanol.Honestly, I’m not sure if I pronounced that right, but hey props to you
                    if you did. And if you did do you know what it is used for? I think the title of this blog post
                    gives it away but it’s cleaning products....</p>
            </div>


        </div>
    </div>
</div>
<br>
<br>
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
<br><br>
<!--
<div class="jumbotron text-center" style="margin-bottom:0">
    <p>Footer</p>
</div>
-->

</body>
</html>
