<?php
session_start();
require_once 'header.php';
?>
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