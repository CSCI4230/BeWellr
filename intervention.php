<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">    
  <?php
   include 'header.php';
   include 'db_connect/db_config.php';
   protect_page();
   $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
   //Code for getting the user_id
   $logged_in = $_SESSION['email'];
   $query = "SELECT user_id FROM user_data WHERE email = '$logged_in'";
   $result = mysqli_query($connection, $query);
   $user_idArray = mysqli_fetch_array($result);
   $user_id = $user_idArray['user_id'];
  ?>
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
  <script src="interventionScript.js"></script>

    <div class="interventionMain">
        <div class="tab">
            <a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'wellnessQuestions')" id="defaultOpen">Wellness Questions</a>
            <a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'weekAverages')">Week Averages</a>
            <a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'overallAverages')">Overall Averages</a>
        </div>

        <div id="wellnessQuestions" class="tabcontent">
            <!--Code for Questions go HERE-->
            <!--Code for Questions go HERE-->
            <!--Code for Questions go HERE-->
            <!--Code for Questions go HERE-->
            <!--Code for Questions go HERE-->
            <h3>Coping</h3>
    <?php
    $fileName = "coping.txt";
	$names=file($fileName);
	$copingArray; //creates an array for holding Coping answer values
	$copingQCount = 0; //Counts the coping questions
	foreach($names as $name)
	{?>
				<h6 class="border"><?php echo $name?></h6>
				<form>
				<div class="qPadding" id="q1Bullets">
        <label class="border3"><input type="radio" name="Yes" value=1>Yes</label>                 
        <label class="border3"><input type="radio" name="No" value=0>No</label> 
      </div>
      </form>
	  
    
<?php 
	$copingQCount++;
	}

?>
    <h3>Food</h3>
    <?php
    $fileName = "food.txt";
	$names=file($fileName);
	$foodArray; //create an array for holding Food answer values
	$foodQCount = 0; //counts the food questions
	foreach($names as $name)
	{?>
				<h6 class="border"><?php echo $name?></h6>
				<form>
				<div class="qPadding" id="q1Bullets">
        <label class="border3"><input type="radio" name="Yes" value=1>Yes</label>                 
        <label class="border3"><input type="radio" name="No" value=0>No</label> 
      </div>
      </form>
    
<?php
	$foodQCount++;
	}
	
?>
        <h3>Physical Activity</h3>
    <?php
    $fileName = "physical.txt";
	$names=file($fileName);
	$physicalArray; //creates an array for holding physical activity answer values
	$physicalQCount = 0; //counts the physical activity questions
	foreach($names as $name)
	{?>
				<h6 class="border"><?php echo $name?></h6>
				<form>
				<div class="qPadding" id="q1Bullets">
        <label class="border3"><input type="radio" name="Yes" value=1>Yes</label>                 
        <label class="border3"><input type="radio" name="No" value=0>No</label> 
      </div>
      </form>
    
<?php
	$physicalQCount++;
	}
	
?>
    
    <form class="survey" action="#" method="post">
        <button>Submit</button>
    </form>

        </div>

        <div id="weekAverages" class="tabcontent">
            <!--Code for Week Averages go HERE-->
            <!--Code for Week Averages go HERE-->
            <!--Code for Week Averages go HERE-->
            <!--Code for Week Averages go HERE-->
            <!--Code for Week Averages go HERE-->
            <h3>Paris</h3>
            <p>Paris is the capital of France.</p>
        </div>

        <div id="overallAverages" class="tabcontent">
            <!--Code for Overall Averages go HERE-->
            <!--Code for Overall Averages go HERE-->
            <!--Code for Overall Averages go HERE-->
            <!--Code for Overall Averages go HERE-->
            <!--Code for Overall Averages go HERE-->
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>
        
        <script>
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>
  </div>

</body>
</html>
