<DOCTYPE! HTML>

<html>
 <body>
 <?php
	include 'header.php';
  include 'db_connect\quoteGenerator.php';
?>
   <h2>Welcome to BeWell'r</h2>
		<div class="container">
			<div class="bioBox">
				<h4>What is BeWell'r All About?</h4>
				<p>It is a period of civil war. Rebel spaceships, striking from a hidden base, have won their first victory against the evil Galactic Empire.
During the battle, Rebel spies managed to steal secret plans to the Empire's ultimate weapon, the DEATH STAR, an armored space station with enough power to destroy an entire planet.
Pursued by the Empire's sinister agents, Princess Leia races home aboard her starship, custodian of the stolen plans that can save her people and restore freedom to the galaxy....</p>
			</div>
			<div class="wrap">
				<a href="login.php" class="button">Log In</a>
				<a href="guest.php" class="button2">Continue as Guest</a>
				<a href="#" class="button3">Learn More</a>
			</div>
    </div>

     <div class="bottomContainer">
        <div class="quoteBox">
            <h3 class="quote"><?php echo $quoteText; ?></h3>
            <p class="quoteAuthor"><?php echo $quoteAuthor; ?></p>
         </div>
     </div>
     <div class="imageContainer">
       <img id="food" src="images/food.png">
        <img id="fruit" src="images/fruit.png">
        <img id="water-bottle" src="images/water-bottle.png">
        <img id="weight" src="images/weight.png">
        <img id="bench" src="images/bench.png">
        <img id="cardiogram" src="images/cardiogram.png">
        <img id="strawberry" src="images/strawberry.png">
        <img id="juice" src="images/juice.png">
     </div>

 </body>
</html>
