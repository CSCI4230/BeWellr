<DOCTYPE! HTML>

<html>
 <body>
 <?php
	include 'header.php';
  include 'db_connect/db_config.php';
  //connect to MySQL
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
  //current logged in user
  $logged_in = $_SESSION['email'];
  //SQL query that pulls user information from the user_data table
  $query = "SELECT firstname, lastname FROM user_data WHERE email = '$logged_in'";
  $result = mysqli_query($connection, $query);
  	if(mysqli_num_rows($result) > 0)
  	{
  			while($row = mysqli_fetch_array($result))
  			{
  				$firstname = $row["firstname"];
  				$lastname = $row["lastname"];
            }
  	}
  	else
  	{
  			echo("No results");
  	}
      mysqli_close($connection);
	protect_page();
    
?>
	<h2>Welcome!</h2>
	<div class="container">
		<div class="biobox">
			<h4><?php echo "Welcome $firstname $lastname to BeWellr";?> </h4>
		</div>
		<div class="wrap">
				<a href="logout.php" class="button">Log Out</a>
				<a href="userSurvey.php" class="button2">Pre-Assessment</a>
				<a href="intervention.php" class="button3">Intervention</a>
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
