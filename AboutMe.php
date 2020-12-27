<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Wild & Gorgeous - About me</title>
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
          rel="stylesheet" type="text/css">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>

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
        <div class="col-sm-16">
            <h2 id="h2AboutMe"> ABOUT ME</h2>
            <br><br>
            <div id="container14">
                <img id="girl" src="images/girl.jpg" height="370" width="600"
                     class="img-fluid" alt="16"/>
                <p id="pAboutMe">Hi ! My name is Peyton. I started this blog on a whim in the fall of 2010. I was frequently asked for my
                    recipes from friends and family members. I happened to follow a few recipe blogs and one day I
                    thought ” Hey, why not start my own?” So here is the result. My blog is constantly changing and
                    growing as I learn more about blogging. It truly is an art. I hope you enjoy the blog as much as I
                    enjoy creating it.

                    I have a Bachelor’s Degree in Hotel/Restaurant Management from the University of Minnesota. I
                    trained professionally in a kitchen during school in serving mass quantities in cafeterias and also
                    trained for situation which required preparing and serving meals table side in a small intimate
                    settings at client’s houses. Having this trained background has helped me to develop recipes that
                    you will find easy and flavorful.

                    My recipes are usually simple and easy with ingredients that you’ll usually find in your kitchen. My
                    goal is to provide you with simple, easy, and family friendly options that help Mom win in the
                    kitchen again. Recipes need to work with your life, so while you are running around after your kids,
                    cleaning boogers off your clothes, or simply trying to fit in a shower you can still make home made
                    meals. Trust me. I’ve been there and often times still am! </p>
                <br>

            </div>





            <section class="mb-4">

                <h2 id="ContactMe" class="h1-responsive  text-center my-4">CONTACT ME</h2>
                <p id="Suggestion" class="text-center w-responsive mx-auto mb-5">Do you have any suggestions or offers for collaboration? Please do not hesitate to contact me directly.</p>

                <div class="row">


                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" class="contact-form" action="contactform.php" method="POST">


                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Full name" >
                                        <label for="name" class="">Your name</label>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="mail" class="form-control" placeholder="Email" >
                                        <label for="mail" class="">Your email</label>
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" >
                                        <label for="subject" class="">Subject</label>
                                    </div>
                                </div>
                            </div>


                            <div class="row">


                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Message" ></textarea>
                                        <label for="message">Your message</label>
                                    </div>

                                </div>
                            </div>
                            <div class="text-center text-md-left">
                                <button type="submit" class="btn btn-secondary" name="submit" ">Send message</button>
                            </div>
                            <div class="status"></div>


                        </form>


                    </div>

                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>San Francisco, CA 94126, USA</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>+ 01 234 567 89</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>Wild&Gorgeous@gmail.com</p>
                            </li>
                        </ul>
                    </div>

                </div>
            </section>





        </div>
    </div>


</article>


</body>
</html>