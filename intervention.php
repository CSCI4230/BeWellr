<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">    
  <?php
   include 'header.php';
   include 'db_connect/db_config.php';
   protect_page();
   $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
   $user_id = get_userid($connection);
	 if (!has_taken_preassessment($connection, $user_id)) {
		 header('location: welcome.php');
	 }
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
            <h3>Interactive Behavior</h3>
    <?php
    
  $copingArray; //creates an array for holding Coping answer values
  $copingQCount = 0; //Counts the coping questions
  $coping = mysqli_query($connection, "SELECT * from intervention where coping = 1");
 while ($row = mysqli_fetch_assoc($coping))
  {?>
        <h6 class="border"><?php echo $row["question"]?></h6>
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
    <h3>Food Selection</h3>
    <?php
  $foodArray; //create an array for holding Food answer values
  $foodQCount = 0; //counts the food questions
  $food = mysqli_query($connection, "SELECT * from intervention where food = 1");
  while ($row = mysqli_fetch_assoc($food))
  {?>
        <h6 class="border"><?php echo $row["question"]?></h6>
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
  $physicalArray; //creates an array for holding physical activity answer values
  $physicalQCount = 0; //counts the physical activity questions
  $physical = mysqli_query($connection, "SELECT * from intervention where physical = 1");
  while ($row = mysqli_fetch_assoc($physical))
  {?>
        <h6 class="border"><?php echo $row["question"]?></h6>
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

        <h3>Personal Growth</h3>
    <?php
  $personalArray; //creates an array for holding personal activity answer values
  $personalQCount = 0; //counts the personal activity questions
  $personal = mysqli_query($connection, "SELECT * from intervention where personal = 1");
  while ($row = mysqli_fetch_assoc($personal))
  {?>
        <h6 class="border"><?php echo $row["question"]?></h6>
        <form>
        <div class="qPadding" id="q1Bullets">
        <label class="border3"><input type="radio" name="Yes" value=1>Yes</label>                 
        <label class="border3"><input type="radio" name="No" value=0>No</label> 
      </div>
      </form>
    
<?php
  $personalQCount++;
  }
  
?>
    
    <form class="survey" action="#" method="post">
        <br/>
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