<?php
session_start();
date_default_timezone_set('Europe/Bratislava');
require_once 'includes/Database.inc.php';
require_once 'includes/Comments.inc.php';
$conn = mysqli_connect('localhost','root','','vaii_database');
require_once 'Header.php';
?>


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
if(isset($_SESSION['userid'])) { //musim bzt prihlasena ak chcem komentovat, inak vypise hlasku
    echo "<div class='comment  mx-auto d-flex justify-content-center '>
<form method='post' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='".$_SESSION['userid']."'>
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