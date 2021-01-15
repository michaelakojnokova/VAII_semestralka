<?php
session_start();
require_once 'header.php';
?>


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
            <h5 id="h5vegan"><a class="link-my-color " href="gallery.php">WHAT TO LOOK FOR IN A VEGAN / PLANT BASED PROTEIN</a></h5>
            <p id="pProtein">Protein is a vital part of any healthy, balanced diet. It holds particular value if
                you’re trying to
                build muscle or get lean because protein takes more energy (aka calories) to break down, comparative to
                fats and carbs... </p>
            <br><br>
            <div id="container8">
                <img id="posture" src="images/posture.jpg" height="280" width="370" style="float: right"
                     class="img-fluid" alt="12"/>
                <h6 id="h6tips"> TIPS</h6>
                <h5 id="h5posture"><a class="link-my-color " href="gallery.php">6SIMPLE WAYS TO HAVE BETTER POSTURE AT YOUR DESK</a></h5>
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
                <h5 id="h5unproductive"><a class="link-my-color " href="gallery.php">10THINGS TO DO WHEN YOU'RE FEELING UNPRODUCTIVE</a></h5>
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
                <h5 id="h5payRise"><a class="link-my-color " href="gallery.php">WHAT TO DO IF YOUR REQUEST FOR A PAY RISE GETS TURNED DOWN</a></h5>
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
                <h5 id="h5toxins"><a class="link-my-color " href="gallery.php">HOMEMADE CLEANING PRODUCTS THAT WILL SAVE YOU MONEY AND TOXINS</a></h5>
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
