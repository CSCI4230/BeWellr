<DOCTYPE! HTML>

<html>
 <body>
 <?php 
	include 'header.php';
	session_start();
?>
	<h2>Welcome!</h2>
	<div class="container">
		<div class="biobox">
			<h4>Welcome, <?php echo $_SESSION['email'] ?> </h4>
		</div>
		<div class="wrap">
				<a href="logout.php" class="button">Log Out</a>
				<a href="guest.php" class="button2">Placeholder Button</a>
				<a href="#" class="button3">Placeholder Button</a>
			</div>
    </div>
     <div class="bottomContainer">
        <div class="quoteBox">
            <h3 class="quote">
            "Go confidently in the direction of your dreams. Live the life you have imagined."
            </h3>
            <p class="quoteAuthor">-Henry David Thoreau</p>
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