<?php
    include 'db_connect/db_config.php';
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">    
  <?php
   include 'header.php';
   protect_page();
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
    $coping = mysqli_query($connection, "SELECT * from intervention where coping = 1");
    while ($row = mysqli_fetch_assoc($coping))
	  {?>
	     <h6 class="border"><?php echo $row["question"]?></h6>
			 <form>
  			 <div class="qPadding" id="q1Bullets">
           <label class="border3"><input type="radio" name="Yes">Yes</label>                 
           <label class="border3"><input type="radio" name="No">No</label> 
         </div>
       </form>
    
<?php }
?>
    <h3>Food</h3>
    <?php
    $food = mysqli_query($connection, "SELECT * from intervention where food = 1");
    while ($row = mysqli_fetch_assoc($food))
	  {?>
			<h6 class="border"><?php echo $row["question"]?></h6>
			<form>
  			<div class="qPadding" id="q1Bullets">
          <label class="border3"><input type="radio" name="Yes">Yes</label>                 
          <label class="border3"><input type="radio" name="No">No</label> 
        </div>
      </form>
    
<?php }
?>
        <h3>Physical Activity</h3>
    <?php
    $physical = mysqli_query($connection, "SELECT * from intervention where physical = 1");
    while ($row = mysqli_fetch_assoc($physical))
	  {?>
			<h6 class="border"><?php echo $row["question"]?></h6>
			<form>
  			<div class="qPadding" id="q1Bullets">
          <label class="border3"><input type="radio" name="Yes">Yes</label>                 
          <label class="border3"><input type="radio" name="No">No</label> 
        </div>
      </form>
    
<?php }
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
