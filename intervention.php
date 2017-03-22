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
	 //print_r($_POST); //Used For Testing $_POST Array
  ?>

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/black-tie/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>
  <script src="interventionScript.js"></script>

  <!-- This php section gets the number of times the user has completed the intervention questions
  and saves the number into a variable -->
  <?php
    //SQL query that counts the number of rows the current user has
    $query = "SELECT count(*) AS total FROM intervention_results WHERE user_id = '$user_id'";

    $result = mysqli_query($connection, $query);

      if(mysqli_num_rows($result) > 0)
      {
          while($row = mysqli_fetch_array($result))
          {
            $totalDays = $row["total"];
          }
      }
      else
      {
          echo("No results");
      }
  ?>

 <form class="survey" action="" method="post">
    <div class="interventionMain">
      <div id="progressbarContainer">
        <div id="progressbar">

          <!-- This script sets up the progress bar and updates the percentage completed every time the
          page is loaded. -->
          <script>
            var numDays = <?php echo $totalDays ?>;
            var totalDays = 28;
            var percentage = Math.round((numDays/totalDays) * 100);

            $( function() {
              var progressbar = $( "#progressbar" ),
                progressLabel = $( ".progress-label" );

              progressbar.progressbar({
                value: false,
                change: function() {
                  progressLabel.text( progressbar.progressbar( "value" ) + "% Completed" );
                },
                complete: function() {
                  progressLabel.text( "Intervention Complete!" );
                }
              });

              function progress() {
                var val = progressbar.progressbar( "value" ) || 0;

                progressbar.progressbar( "value", percentage );

                if ( val < 99 ) {
                  setTimeout( progress, 90 );
                }
              }

              setTimeout( progress, 2000 );
            } );
          </script>
          <div class="progress-label">Getting your progress...</div>
        </div>
      </div>

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
            <h6>This intervention is composed of 32 quick questions.</h6>
			<h3>Interactive Behavior</h3>
    <?php
  $copingArray; //creates an array for holding Coping answer values
  $copingQCount = 0; //Counts the coping questions
  $coping = mysqli_query($connection, "SELECT * from intervention where coping = 1");
  $questionNumber=0;
 while ($row = mysqli_fetch_assoc($coping))
  {?>
        <h6 class="border"><?php echo $questionNumber+1 ?>. <?php echo $row["question"]?></h6>
        <div class="qPadding" id="q1Bullets">
        <label class="border3"><input type="radio" name="<?php echo $questionNumber ?>" value=1>Yes</label>
        <label class="border3"><input type="radio" name="<?php echo $questionNumber ?>" value=0>No</label>
      </div>


<?php
$questionNumber++;
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
        <h6 class="border"><?php echo $questionNumber+1 ?>. <?php echo $row["question"]?></h6>
        <div class="qPadding" id="q1Bullets">
        <label class="border3"><input type="radio" name="<?php echo $questionNumber ?>" value=1>Yes</label>
        <label class="border3"><input type="radio" name="<?php echo $questionNumber ?>" value=0>No</label>
      </div>

<?php
$questionNumber++;
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
        <h6 class="border"><?php echo $questionNumber+1 ?>. <?php echo $row["question"]?></h6>
        <div class="qPadding" id="q1Bullets">
        <label class="border3"><input type="radio" name="<?php echo $questionNumber ?>" value=1>Yes</label>
        <label class="border3"><input type="radio" name="<?php echo $questionNumber ?>" value=0>No</label>
      </div>

<?php
  $questionNumber++;
  $physicalQCount++;
  }
?>

<!-- <<<<<<< HEAD
======= -->
        <h3>Personal Growth</h3>
    <?php
  $personalArray; //creates an array for holding personal activity answer values
  $personalQCount = 0; //counts the personal activity questions
  $personal = mysqli_query($connection, "SELECT * from intervention where personal = 1");
  while ($row = mysqli_fetch_assoc($personal))
  {?>
        <h6 class="border"><?php echo $questionNumber+1 ?>. <?php echo $row["question"]?></h6>
        <div class="qPadding" id="q1Bullets">
        <label class="border3"><input type="radio" name="<?php echo $questionNumber ?>" value=1>Yes</label>
        <label class="border3"><input type="radio" name="<?php echo $questionNumber ?>" value=0>No</label>
      </div>

<?php
  $questionNumber++;
  $personalQCount++;
  }
  $ib = 0; //interactive behavior
  $fs = 0; // food selection
  $pa = 0; // physical activity
  $pg = 0; // personal growth
  $i=0;
  $j;
  $k;
  $n;

  if(!empty($_POST))
  {
	  for($i; $i < $copingQCount; $i++)
	  {
		  if($_POST[$i] == 1)
		  {
			  $ib++;
		  }
	  }

	  for($j = $i; $j < $foodQCount + $copingQCount; $j++)
	  {
		  if($_POST[$j] == 1)
		  {
			  $fs++;
		  }
	  }

	  for($k = $j; $k < $physicalQCount + $copingQCount + $foodQCount; $k++)
	  {
		  if($_POST[$k] == 1)
		  {
			 $pa++;
		  }
	  }

	  for($n = $k; $n < $personalQCount + $physicalQCount + $copingQCount + $foodQCount; $n++)
	  {
		  if($_POST[$n] == 1)
		  {
			  $pg++;
		  }
	  }
  }


  $total = $ib + $fs + $pa + $pg;

  $query = "SELECT user_id, weekNumber, dayOfWeekNumber FROM intervention_results WHERE user_id = $user_id ORDER BY weekNumber DESC, dayOfWeekNumber DESC LIMIT 1";

  $results = mysqli_query($connection, $query);


  $day = 1;
  $week = 1;
  if(mysqli_num_rows($results) > 0)
  {
	  $row = mysqli_fetch_assoc($results);

	  $day = $row["dayOfWeekNumber"];
	  $week = $row["weekNumber"];

	  if( $week <= 4 && $day <= 6)
	  {
		 $day++;
	  }
	  else if($week <= 4 && $day == 7)
	  {
		  $week++;
		  $day = 1;
	  }
	  else
	  {
		  echo "ERROR:  Intervention over OR wrong week/day input";
	  }
  }

  $sql = "INSERT INTO intervention_results (user_id, weekNumber, dayOfWeekNumber, IBScore, FSScore, PAScore, PGScore, TotalScore) VALUES ($user_id, $week, $day, $ib, $fs, $pa, $pg, $total)";

  $insert = $connection->query($sql);


?>

<!-- >>>>>>> d3cb0f42f3122c138907c3d455b572425281d132 -->

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
